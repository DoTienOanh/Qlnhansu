<template>
  <div class="p-6 bg-indigo-800 min-h-screen flex justify-center items-center">
    <div class="w-full max-w-md">
      <form class="mt-8 bg-white rounded-lg shadow-xl overflow-hidden" @submit.prevent="sendResetCode">
        <div class="px-10 py-12">
          <h1 class="text-center font-bold text-3xl">Quên mật khẩu</h1>
          <text-input 
            v-model="form.email" 
            :error="form.errors.email" 
            class="mt-10" 
            label="Email của bạn" 
            type="email" 
            autofocus 
          />
        </div>
        <div class="px-10 py-4 bg-gray-100 border-t border-gray-100 flex">
          <loading-button :loading="form.processing" class="ml-auto btn-indigo" type="submit">
            Gửi mã xác thực
          </loading-button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import TextInput from '@/Shared/TextInput';
import LoadingButton from '@/Shared/LoadingButton';

export default {
  components: {
    TextInput,
    LoadingButton,
  },
  data() {
    return {
      form: this.$inertia.form({
        email: '',
      }),
    };
  },
  methods: {
    async sendResetCode() {
        this.form.post(this.route('password.sendResetEmail'), {
            onSuccess: () => {
                alert('Mã xác thực đã được gửi đến email của bạn.');
                window.location.href = this.route('login'); // Chuyển hướng về trang login
            },
            onError: () => {
                alert('Đã xảy ra lỗi. Vui lòng kiểm tra email của bạn.');
            },
        });
    },
},
};
</script>
