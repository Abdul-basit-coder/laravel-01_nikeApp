 
 @extends('components.master')   

 @section('content')
 <!-- Hero  -->
 <section
        class="max-container flex justify-center items-center gap-9 pb-12 sm:pb-24"
      >
        <!-- content -->
        <div class="wide:w-[45%] pt-28">
          <h3 class="text-coral-red text-xl font-montserrat">
            Our Summer collections
          </h3>
          <h1
            class="font-palanquin text-black font-bold text-8xl mt-10 relative z-10"
          >
            <span class="xl:whitespace-nowrap relative bg-white pr-10"
              >The New Arrival</span
            >
            <br />
            <span class="text-coral-red inline-block mt-4">Nike</span> Shoes
          </h1>
          <p
            class="font-montserrat text-lg text-slate-gray sm:max-w-sm leading-8 mt-5 mb-14 block"
          >
            Discover stylish Nike arrivals, quality comfort, and innovation for
            your active life.
          </p>
          <button class="theme-btn">
            Shop now
            <img src="assets/graphics/icons/arrow-right.svg" alt="" />
          </button>

          <div class="flex mt-20 gap-16 flex-wrap">
            <span class="flex flex-col justify-center">
              <span class="font-palanquin text-5xl font-bold text-black"
                >1k+</span
              >
              <span class="font-montserrat text-slate-gray leading-7"
                >Brands</span
              >
            </span>
            <span class="flex flex-col justify-center">
              <span class="font-palanquin text-5xl font-bold text-black"
                >500+</span
              >
              <span class="font-montserrat text-slate-gray leading-7"
                >Shops</span
              >
            </span>
            <span class="flex flex-col justify-center">
              <span class="font-palanquin text-5xl font-bold text-black"
                >250k+</span
              >
              <span class="font-montserrat text-slate-gray leading-7"
                >Customers</span
              >
            </span>
          </div>
        </div>
        <!-- Images -->
        <div
          class="flex justify-center items-center flex-col bg-hero h-screen flex-1 relative"
        >
          <img
            src="assets/graphics/images/big-shoe1.png"
            width="610"
            height="502"
            class="object-contain"
            alt="shoesImage"
            id="shoe-banner"
          />
          <div class="flex sm:gap-6 absolute -bottom-[5%] sm:-left-[-10%]">
            <div
              class="bg-card p-5 bg-cover cursor-pointer rounded-xl border-2 transition card-active"
            >
              <img src="assets/graphics/images/thumbnail-shoe1.svg" alt="" />
            </div>
            <div
              class="bg-card p-5 bg-cover cursor-pointer rounded-xl border-2 transition"
            >
              <img src="assets/graphics/images/thumbnail-shoe2.svg" alt="" />
            </div>
            <div
              class="bg-card p-5 bg-cover cursor-pointer rounded-xl border-2 transition"
            >
              <img src="assets/graphics/images/thumbnail-shoe3.svg" alt="" />
            </div>
          </div>
        </div>
      </section>

      <!-- Products -->
      <section class="max-container container-gap">
        <div class="">
          <h2 class="text-5xl font-palanquin text-black font-bold mb-5">
            Our <span class="text-coral-red">Popular</span> Products
          </h2>
          <p class="text-slate-gray font-montserrat max-w-lg">
            Experience top-notch quality and style with our sought-after
            selections. Discover a world of comfort, design, and value
          </p>
        </div>
        <!-- products cards -->
        <div class="mt-16 flex gap-24">
          <div class="flex flex-col gap-4 flex-1">
            <img src="assets/graphics/images/shoe4.svg" alt="" />
            <div class="flex gap-3">
              <img src="assets/graphics/icons/star.svg" alt="" />
              <span class="text-slate-gray font-montserrat text-xl">(4.5)</span>
            </div>
            <h3 class="text-black font-palanquin text-2xl font-semibold">
              Nike Air Jordan-01
            </h3>
            <h4 class="font-montserrat text-2xl text-coral-red font-semibold">
              $220.20
            </h4>
          </div>
          <div class="flex flex-col gap-4 flex-1">
            <img src="assets/graphics/images/shoe5.svg" alt="" />
            <div class="flex gap-3">
              <img src="assets/graphics/icons/star.svg" alt="" />
              <span class="text-slate-gray font-montserrat text-xl">(4.5)</span>
            </div>
            <h3 class="text-black font-palanquin text-2xl font-semibold">
              Nike Air Jordan-10
            </h3>
            <h4 class="font-montserrat text-2xl text-coral-red font-semibold">
              $210.20
            </h4>
          </div>
          <div class="flex flex-col gap-4 flex-1">
            <img src="assets/graphics/images/shoe6.svg" alt="" />
            <div class="flex gap-3">
              <img src="assets/graphics/icons/star.svg" alt="" />
              <span class="text-slate-gray font-montserrat text-xl">(4.5)</span>
            </div>
            <h3 class="text-black font-palanquin text-2xl font-semibold">
              Nike Air Jordan-100
            </h3>
            <h4 class="font-montserrat text-2xl text-coral-red font-semibold">
              $220.20
            </h4>
          </div>
          <div class="flex flex-col gap-4 flex-1">
            <img src="assets/graphics/images/shoe7.svg" alt="" />
            <div class="flex gap-3">
              <img src="assets/graphics/icons/star.svg" alt="" />
              <span class="text-slate-gray font-montserrat text-xl">(4.5)</span>
            </div>
            <h3 class="text-black font-palanquin text-2xl font-semibold">
              Nike Air Jordan-001
            </h3>
            <h4 class="font-montserrat text-2xl text-coral-red font-semibold">
              $230.20
            </h4>
          </div>
        </div>
      </section>

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

      <!-- Special Offer -->
      <section class="container-gap max-container flex gap-10">
        <div class="flex w-1/2">
          <img src="assets/graphics/images/offer.svg" alt="" />
        </div>

        <div class="flex flex-col justify-center w-1/2">
          <h2 class="font-palanquin font-bold text-5xl text-coral-red">
            Special <span class="text-black">Offer</span>
          </h2>
          <p class="font-montserrat text-slate-gray text-lg mt-4">
            Embark on a shopping journey that redefines your experience with
            unbeatable deals. From premier selections to incredible savings, we
            offer unparalleled value that sets us apart.
          </p>
          <p class="font-montserrat text-slate-gray text-lg mt-6">
            Navigate a realm of possibilities designed to fulfill your unique
            desires, surpassing the loftiest expectations. Your journey with us
            is nothing short of exceptional.
          </p>
          <div class="flex mt-11 gap-5 items-end">
            <button class="theme-btn">
              Shop now
              <img src="assets/graphics/icons/arrow-right.svg" alt="" />
            </button>
            <button
              class="rounded-full px-7 py-4 font-montserrat text-slate-gray text-lg border border-slate-gray leading-4"
            >
              Learn more
            </button>
          </div>
        </div>
      </section>

      <!-- Testimonials -->
      <section class="container-gap bg-primary">
        <div class="max-container">
          <div class="w-full">
            <h2
              class="font-palanquin font-bold text-5xl text-black text-center"
            >
              What Our <span class="text-coral-red">Customers</span> Say?
            </h2>
            <p
              class="max-w-lg m-auto mt-4 text-center font-montserrat text-slate-gray text-lg"
            >
              Hear genuine stories from our satisfied customers about their
              exceptional experiences with us.
            </p>
          </div>
          <div class="flex justify-evenly items-center mt-16">
            <div class="flex flex-col items-center gap-4">
              <img
                class="w-28 h-28 rounded-full object-cover"
                src="assets/graphics/images/customer1.jpeg"
                alt=" "
              />
              <p
                class="max-w-sm font-montserrat text-slate-gray text-lg text-center"
              >
                The attention to detail and the quality of the product exceeded
                my expectations. Highly recommended!
              </p>
              <div class="flex">
                <img src="assets/graphics/icons/star.svg" alt="" />
                <span class="text-slate-gray text-lg">(4.5)</span>
              </div>
              <h3 class="font-palanquin text-[28px] font-bold text-black">
                Morich Brown
              </h3>
            </div>

            <div class="flex flex-col items-center gap-4">
              <img
                class="w-28 h-28 rounded-full object-cover"
                src="assets/graphics/images/customer2.svg"
                alt=" "
              />
              <p
                class="max-w-sm font-montserrat text-slate-gray text-lg text-center"
              >
                The product not only met but exceeded my expectations. I'll
                definitely be a returning customer!
              </p>
              <div class="flex">
                <img src="assets/graphics/icons/star.svg" alt="" />
                <span class="text-slate-gray text-lg">(4.5)</span>
              </div>
              <h3 class="font-palanquin text-[28px] font-bold text-black">
                Lota Mongeskar
              </h3>
            </div>
          </div>
        </div>
      </section>

      <!-- News Letter -->
      <section class="max-container container-gap">
        <div class="flex justify-between items-center">
          <h2 class="text-black font-palanquin font-bold text-5xl lg:max-w-md">
            Sign Up for <span class="text-coral-red">Updates</span> & Newsletter
          </h2>

          <div
            class="flex rounded-full lg:max-w-[40%] w-full items-center justify-between pr-3 border py-2 border-black pl-5"
          >
            <input type="text" class="focus:outline-none w-3/5" placeholder="Sign Up for Newsletter" />
            <button class="theme-btn">Sign Up</button>
          </div>
        </div>
      </section>

      @endsection