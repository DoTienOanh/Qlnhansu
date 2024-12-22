<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Inertia\Inertia;

class ForgotPasswordController extends Controller
{
    public function showForgotForm()
    {
        // Hiển thị form nhập email
        return Inertia::render('ForgotPassword');
    }

    public function sendResetEmail()
    {
        $email = request('email');
    
        // Kiểm tra xem email có tồn tại không
        $user = User::where('email', $email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'Email không tồn tại trong hệ thống.']);
        }
    
        // Tạo mật khẩu mới
        $newPassword = Str::random(8);
    
        // Lưu mật khẩu mới (đã băm) vào cơ sở dữ liệu
        $user->password = bcrypt($newPassword);
        $user->save();
        
        // Khởi tạo đối tượng PHPMailer
        $mail = new PHPMailer(true);
        
        try {
            // Cấu hình gửi email qua SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Cấu hình thông tin người gửi và người nhận
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($email);

            // Cấu hình nội dung email
            $mail->isHTML(true);
            $mail->Subject = 'Reset Mật khẩu';
            $mail->Body = "
                <h1>Xin chào, {$user->name}</h1>
                <p>Mật khẩu mới của bạn là: <strong>{$newPassword}</strong></p>
                <p>Hãy đăng nhập và thay đổi mật khẩu ngay lập tức để bảo vệ tài khoản của bạn.</p>
            ";

            // Bật chế độ debug (hiển thị thông tin chi tiết về quá trình gửi email)
            $mail->SMTPDebug = 2;  // Mức độ debug (2 hoặc 3 để hiển thị thông tin chi tiết)
            $mail->Debugoutput = 'html';  // Đầu ra debug dưới dạng HTML

            // Gửi email
            $mail->send();
    
            // Chuyển hướng về trang đăng nhập sau khi gửi email
            return redirect('/')->with('success', 'Mật khẩu mới đã được gửi tới email của bạn.');
            
        } catch (Exception $e) {
            // Ghi lại lỗi chi tiết vào log
            Log::error("Không thể gửi email: {$e->getMessage()}");
            return back()->withErrors(['email' => 'Không thể gửi email. Vui lòng thử lại sau.']);
        }
    }
}
