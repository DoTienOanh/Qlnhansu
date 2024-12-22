<template>
  <div class="bg-gradient-to-b from-indigo-50 via-white to-indigo-100 min-h-screen py-10 px-6">
    <div class="max-w-7xl mx-auto">
      <!-- Header -->
      <header class="mb-10 text-center">
        <h1 class="text-5xl font-extrabold text-indigo-700 tracking-wide">
          Giới Thiệu Về Chúng Tôi
        </h1>
        <p class="text-indigo-600 mt-4 text-xl">
          Cùng khám phá sứ mệnh và giá trị của TechAsian qua những hình ảnh ấn tượng dưới đây.
        </p>
      </header>

      <!-- Gallery Section -->
      <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Image 1 -->
        <div class="relative overflow-hidden rounded-xl shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
          <img src="/images/tv1.jpg" alt="Hình ảnh 1" class="w-full h-64 object-cover">
          <div class="absolute inset-0 bg-indigo-900 bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
            <p class="text-white text-lg font-semibold">Đội Ngũ Chuyên Nghiệp</p>
          </div>
        </div>

        <!-- Image 2 -->
        <div class="relative overflow-hidden rounded-xl shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
          <img src="/images/tv2.jpg" alt="Hình ảnh 2" class="w-full h-64 object-cover">
          <div class="absolute inset-0 bg-orange-700 bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
            <p class="text-white text-lg font-semibold">Công Nghệ Hiện Đại</p>
          </div>
        </div>

        <!-- Image 3 -->
        <div class="relative overflow-hidden rounded-xl shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
          <img src="/images/tv3.png" alt="Hình ảnh 3" class="w-full h-64 object-cover">
          <div class="absolute inset-0 bg-green-700 bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
            <p class="text-white text-lg font-semibold">Giải Pháp Tối Ưu</p>
          </div>
        </div>

        <!-- Image 4 -->
        <div class="relative overflow-hidden rounded-xl shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
          <img src="/images/tv4.png" alt="Hình ảnh 4" class="w-full h-64 object-cover">
          <div class="absolute inset-0 bg-purple-700 bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
            <p class="text-white text-lg font-semibold">Môi Trường Làm Việc</p>
          </div>
        </div>

        <!-- Image 5 -->
        <div class="relative overflow-hidden rounded-xl shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
          <img src="/images/tv5.png" alt="Hình ảnh 5" class="w-full h-64 object-cover">
<div class="absolute inset-0 bg-pink-700 bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
            <p class="text-white text-lg font-semibold">Thành Tựu Nổi Bật</p>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer class="mt-16 text-center text-gray-600">
        <p>© 2024 TechAsian. All rights reserved. Phát triển bởi <a class="text-indigo-500 underline hover:text-indigo-700" href="#" target="_blank">nhóm 11</a>.</p>
      </footer>
    </div>
  </div>
</template>

<script>
import Layout from '@/Shared/Layout'

export default {
  metaInfo: { title: 'Giới Thiệu' },
  layout: Layout,
}
</script>

<style scoped>
/* Custom Scrollbar for a modern look */
body::-webkit-scrollbar {
  width: 10px;
}
body::-webkit-scrollbar-thumb {
  background: linear-gradient(to bottom, #6366f1, #9333ea);
  border-radius: 8px;
}
body::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(to bottom, #4f46e5, #7e22ce);
}
</style>