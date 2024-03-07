
@extends('components.master')   

@section('content')
<!-- About -->
<section
        id="about"
        class="max-container container-gap flex justify-between gap-10"
      >
        <div class="flex-1 flex flex-col items-start justify-center gap-8">
          <h2 class="font-palanquin text-black text-5xl font-bold lg:max-w-lg">
            We Provide You
            <span class="text-coral-red">Super Quality</span> Shoes
          </h2>
          <p class="font-montserrat text-lg text-slate-gray lg:max-w-lg">
            Ensuring premium comfort and style, our meticulously crafted
            footwear is designed to elevate your experience, providing you with
            unmatched quality, innovation, and a touch of elegance.
          </p>
          <p
            class="font-montserrat text-lg text-slate-gray lg:max-w-lg lg:-mt-4"
          >
            Our dedication to detail and excellence ensures your satisfaction
          </p>

          <button class="theme-btn">View details</button>
        </div>
        <div class="flex-1 flex justify-center items-center">
          <img src="assets/graphics/images/shoe8.svg" alt="" />
        </div>
      </section>

      <!-- Features -->
      <section class="container-gap max-container">
        <div class="flex gap-9">
          <div
            class="flex flex-1 flex-col shadow-3xl p-16 px-10 items-start gap-5 rounded-[20px]"
          >
            <img
              src="assets/graphics/icons/truck-fast.svg"
              alt=""
              class="max-w-full bg-coral-red rounded-full p-3"
            />
            <h3 class="font-palanquin font-bold text-black text-3xl">
              Free shipping
            </h3>
            <p class="font-montserrat text-lg text-slate-gray">
              Enjoy seamless shopping with our complimentary shipping service.
            </p>
          </div>
          <div
            class="flex flex-1 flex-col shadow-3xl p-16 px-10 items-start gap-5 rounded-[20px]"
          >
            <img
              src="assets/graphics/icons/shield-tick.svg"
              alt=""
              class="max-w-full bg-coral-red rounded-full p-3"
            />
            <h3 class="font-palanquin font-bold text-black text-3xl">
              Secure Payment
            </h3>
            <p class="font-montserrat text-lg text-slate-gray">
              Experience worry-free transactions with our secure payment
              options.
            </p>
          </div>
          <div
            class="flex flex-1 flex-col shadow-3xl p-16 px-10 items-start gap-5 rounded-[20px]"
          >
            <img
              src="assets/graphics/icons/support.svg"
              alt=""
              class="max-w-full bg-coral-red rounded-full p-3"
            />
            <h3 class="font-palanquin font-bold text-black text-3xl">
              Love to help you
            </h3>
            <p class="font-montserrat text-lg text-slate-gray">
              Our dedicated team is here to assist you every step of the way.
            </p>
          </div>
        </div>
      </section>

      @endsection