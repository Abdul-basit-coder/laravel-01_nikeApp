<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nike Landing</title>
    <link
      rel="shortcut icon"
      href="assets/graphics/favicon.ico"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <main class="relative">
      <!-- Header -->
      <header class="w-full px-16 py-8 absolute z-10">
        <nav class="max-container flex justify-between items-center">
          <a href="" class="max-w-[200px]">
            <img
              src="assets/graphics/images/header-logo.svg"
              alt=""
              class="max-w-full"
            />
          </a>
          <ul class="flex flex-row gap-16">
            <li>
              <a href="/" class="text-slate-gray text-lg font-montserrat"
                >Home</a
              >
            </li>
            <li>
              <a href="/about" class="text-slate-gray text-lg font-montserrat"
                >About Us</a
              >
            </li>
            <li>
              <a href="/products" class="text-slate-gray text-lg font-montserrat"
                >Products</a
              >
            </li>
            <li>
              <a href="#" class="text-slate-gray text-lg font-montserrat"
                >Contact Us</a
              >
            </li>
          </ul>
          <div
            class="flex gap-2 text-lg text-black font-montserrat leading-normal font-medium wide:mr-24"
          >
            <span>Sign in</span>
            <span>/</span>
            <span>Explore now</span>
          </div>
        </nav>
      </header>

      @yield('content')



      </main>

<!-- Footer -->
<footer class="bg-black container-gap pb-0">
  <div class="flex max-container text-white-400 gap-8 justify-between">
    <div class="max-w-96">
      <a href="">
        <img src="assets/graphics/images/footer-logo.svg" alt="" class="max-w-36 mb-4" />
      </a>
      <p class="font-montserrat leading-7 mt-2">
        Get shoes ready for the new term at your nearest Nike store. Find
        Your perfect Size In Store. Get Rewards
      </p>
      <div class="flex gap-7 mt-8">
        <a href="#" class="bg-white rounded-full p-3">
          <img src="assets/graphics/icons/facebook.svg" alt="">
        </a>
        <a href="#" class="bg-white rounded-full p-3">
          <img src="assets/graphics/icons/twitter.svg" alt="">
        </a>
        <a href="#" class="bg-white rounded-full p-3">
          <img src="assets/graphics/icons/instagram.svg" alt="">
        </a>
      </div>
    </div>
    <div class="">
      <h3 class="text-white text-2xl leading-9 font-medium mb-4 font-montserrat">Products</h3>
      <ul>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">Air Force 1</a></li>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">Air Max 1</a></li>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">Air Jordan 1</a></li>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">Air Force 2</a></li>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">Nike Waffle Racer</a></li>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">Nike Cortez</a></li>
      </ul>
    </div>
    <div class="">
      <h3 class="text-white text-2xl leading-9 font-medium mb-4 font-montserrat">Help</h3>
      <ul>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">About us</a></li>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">FAQs</a></li>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">How it works</a></li>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">Privacy policy</a></li>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">Payment policy</a></li>
      </ul>
    </div>
    <div class="">
      <h3 class="text-white text-2xl leading-9 font-medium mb-4 font-montserrat">Get in touch</h3>
      <ul>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">customer@nike.com</a></li>
        <li class="mb-2"><a href="#" class="font-montserrat  leading-6 hover:opacity-55 ">+92554862354</a></li>
      </ul>
    </div>
  </div>
  <div class=" max-container flex justify-between text-white-400 font-montserrat mt-10 py-6">
    <div class="flex items-center ">
      <img src="assets/graphics/icons/copyright-sign.svg" alt="" class="mr-2">
      <p> copyright sign
        Copyright. All rights reserved.</p>
    </div>
      <a href="#">
        Terms & Conditions</a>
  </div>
</footer>

<script src="assets/js/app.js"></script>