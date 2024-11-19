<script setup>
import HelloWorld from './components/HelloWorld.vue'

</script>

<template>
  <div class="bg-green-400">
    <!-- Header -->
    <header class="bg-white shadow">
      <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <div class="flex items-center">
          <span class="text-lg font-bold text-gray-800">Performance Checker</span>
        </div>
        <nav class="flex space-x-6 text-gray-600">
          <a href="#" class="hover:text-gray-800">Articles</a>
          <a href="#" class="hover:text-gray-800">Packages</a>
          <a href="#" class="hover:text-gray-800">Free Tools</a>
          <a href="#" class="hover:text-gray-800">Recent</a>
          <a href="#" class="hover:text-gray-800">Contact</a>
          <a href="#" class="hover:text-gray-800">Log In</a>
          <a href="#" class="bg-yellow-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-yellow-600">Sign Up Free</a>
        </nav>
      </div>
    </header>

    <!-- Main Section -->
    <section class="flex flex-col items-center text-center py-24">
      <h1 class="text-3xl font-bold text-white mb-2">Best SEO Company</h1>
      <h2 class="text-2xl font-bold text-white mb-4">Technical SEO Checklist</h2>
      <p class="text-white text-lg mb-8">Search engine optimization (SEO) Made Easy<br>Analyzing and tracking the SEO page quickly and effectively</p>

      <!-- Search Box -->
      <div class="flex items-center bg-white rounded-full shadow-lg p-4 max-w-md w-full">
        <input type="text" placeholder="Type web address..." class="flex-1 bg-transparent text-gray-700 placeholder-gray-400 focus:outline-none">
        <button class="bg-orange-500 text-white py-2 px-6 rounded-full hover:bg-orange-600 font-semibold">SEO Analysis</button>
      </div>
    </section>
  </div>
  </template>

<style scoped>
</style>
