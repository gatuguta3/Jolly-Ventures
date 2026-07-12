@extends('main')

@section('title', 'Jolly Kitchen - Home')

@section('content')

<!-- Slider -->
<div class="px-2 sm:px-4 lg:px-8 py-6 sm:py-10">
  <div data-hs-carousel='{
      "loadingClasses": "opacity-0"
    }' class="relative">
    <div class="hs-carousel relative overflow-hidden w-full h-[50vh] sm:h-[60vh] md:h-[calc(100vh-106px)] bg-surface rounded-xl sm:rounded-2xl">
      <div class="hs-carousel-body absolute top-0 bottom-0 inset-s-0 flex flex-nowrap transition-transform duration-700 opacity-0">
        
        <!-- Item 1 -->
        <div class="hs-carousel-slide">
          <div class="h-[50vh] sm:h-[60vh] md:h-[calc(100vh-106px)] flex flex-col bg-[url('https://plus.unsplash.com/premium_photo-1664790560123-c5f839457591?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZXZlbnQlMjBkZWNvcnxlbnwwfHwwfHx8MA%3D%3D')] bg-cover bg-center bg-no-repeat">
            <div class="mt-auto w-full sm:w-3/4 md:max-w-lg p-4 sm:ps-5 sm:pb-5 md:ps-10 md:pb-10">
              <span class="block text-black sm:text-base text-sm">Events & Planning</span>
                <span class="block text-black text-lg sm:text-xl md:text-3xl leading-tight mt-1">Planning made seamless, execution made flawless — because your story deserves a stunning stage</span>
                <div class="mt-3 sm:mt-5">
                <a class="py-2 px-3 sm:px-4 inline-flex items-center gap-x-2 text-xs sm:text-sm font-medium rounded-lg sm:rounded-xl bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:bg-orange-700 transition-colors" href="#">
                    Book us today
                </a>
                </div>
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="hs-carousel-slide">
          <div class="h-[50vh] sm:h-[60vh] md:h-[calc(100vh-106px)] flex flex-col bg-[url('https://images.unsplash.com/photo-1782150923899-fe27b23d0b98?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fG91dHNpZGUlMjBldmVudCUyMGZvb2R8ZW58MHx8MHx8fDA%3D')] bg-cover bg-center bg-no-repeat">
            <div class="mt-auto w-full sm:w-3/4 md:max-w-lg p-4 sm:ps-5 sm:pb-5 md:ps-10 md:pb-10">
              <span class="block text-black sm:text-base text-sm">Outside Catering</span>
                <span class="block text-black text-lg sm:text-xl md:text-3xl leading-tight mt-1">Planning made seamless, execution made flawless — because your story deserves a stunning stage</span>
                <div class="mt-3 sm:mt-5">
                <a class="py-2 px-3 sm:px-4 inline-flex items-center gap-x-2 text-xs sm:text-sm font-medium rounded-lg sm:rounded-xl bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:bg-orange-700 transition-colors" href="/contact-us">
                    Book us today
                </a>
                </div>
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="hs-carousel-slide">
          <div class="h-[50vh] sm:h-[60vh] md:h-[calc(100vh-106px)] flex flex-col bg-[url('https://images.unsplash.com/photo-1760269734155-b6bb8c41dad6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzB8fGNvb2tpbmclMjB1dGVuc2lsc3xlbnwwfHwwfHx8MA%3D%3D')] bg-cover bg-center bg-no-repeat">
            <div class="mt-auto w-full sm:w-3/4 md:max-w-lg p-4 sm:ps-5 sm:pb-5 md:ps-10 md:pb-10">
              <span class="block text-black sm:text-base text-sm">Utensils for Hire</span>
                <span class="block text-black text-lg sm:text-xl md:text-3xl leading-tight mt-1">Planning made seamless, execution made flawless — because your story deserves a stunning stage</span>
                <div class="mt-3 sm:mt-5">
                <a class="py-2 px-3 sm:px-4 inline-flex items-center gap-x-2 text-xs sm:text-sm font-medium rounded-lg sm:rounded-xl bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:bg-orange-700 transition-colors" href="#">
                    Hire from us
                </a>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Previous Arrow -->
    <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-10 sm:w-12 h-full text-white hover:bg-white/10 rounded-l-xl sm:rounded-l-2xl focus:outline-none focus:bg-white/20 transition-colors">
      <span aria-hidden="true">
        <svg class="shrink-0 size-4 sm:size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
      </span>
      <span class="sr-only">Previous</span>
    </button>

    <!-- Next Arrow -->
    <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-10 sm:w-12 h-full text-white hover:bg-white/10 rounded-r-xl sm:rounded-r-2xl focus:outline-none focus:bg-white/20 transition-colors">
      <span class="sr-only">Next</span>
      <span aria-hidden="true">
        <svg class="shrink-0 size-4 sm:size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg>
      </span>
    </button>
  </div>
</div>

<div class="text-center">
  <span class="block text-black text-2xl sm:text-2xl md:text-3xl lg:text-4xl font-bold">
    Who are Jolly Ventures? <span class="text-orange-500">and what do we do</span>
  </span>
  <span class="block text-black-400 text-lg  md:text-xl mt-3 font-light">Jolly ventures was founded back in 2022 by Elizabeth Kamau a food entrepreneur whose dreams went beyond an ordinary Hotel. Since that time Jolly ventures had created unforgetable experiences for their clients. Events are not just about food! Good food is all you need.</span>
<span class="block text-black-400 text-lg  md:text-xl mt-3 font-light">Are you planning an event ? Dont shy off know more about us and get in touch!</span>

</div>

<div class="flex justify-center py-10">
  <a href="/about-us" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:bg-orange-700 transition-colors shadow-lg shadow-orange-500/25">
    More about us
  </a>
</div>



<!-- Testimonials -->
<div class="py-5 md:py-16 lg:py-20 bg-primary-100 dark:bg-primary-500/20">
  <div class="px-4 sm:px-6 lg:px-8">
    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 md:items-center">
      <div class="relative h-80 md:h-150 bg-surface rounded-2xl">
        <img class="absolute inset-0 size-full object-cover rounded-2xl" src="https://images.unsplash.com/photo-1530023367847-a683933f4172?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Y2F0ZXJpbmclMjBldmVudHN8ZW58MHx8MHx8fDA%3D" alt="Testimonials Image">
      </div>
      <!-- End Col -->

      <div class="pt-10 md:p-10">
        <blockquote class="max-w-4xl mx-auto">
          <p class="mb-6  sm:text-2xl lg:text-3xl text-foreground">
            A Family Tradition of Rich, Aromatic Coffee
          </p>

          <p class="text-xl md:text-lg lg:leading-normal text-foreground">
            Coffee has the power to connect generations – whether it's learning grandma's brewing techniques and trying to perfect them just like her or the intense memories triggered by the rich flavors and aromas of our favorite coffee blends.
          </p>

          <footer class="mt-6 md:mt-10">
            <div class="flex justify-center py-10">
                <a href="/about-us" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:bg-orange-700 transition-colors shadow-lg shadow-orange-500/25">
                    Learn More
                </a>
                </div>
          </footer>
        </blockquote>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
</div>
<!-- End Testimonials -->


<!-- Testimonials -->
<div class="py-5 md:py-16 lg:py-20 bg-primary-100 dark:bg-primary-500/20">
  <div class="px-4 sm:px-6 lg:px-8">
    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 md:items-center">

      <div class="pt-10 md:p-10">
        <blockquote class="max-w-4xl mx-auto">
          <p class="mb-6  sm:text-2xl lg:text-3xl text-foreground">
            A Family Tradition of Rich, Aromatic Coffee
          </p>

          <p class="text-xl md:text-lg lg:leading-normal text-foreground">
            Coffee has the power to connect generations – whether it's learning grandma's brewing techniques and trying to perfect them just like her or the intense memories triggered by the rich flavors and aromas of our favorite coffee blends.
          </p>

          <footer class="mt-6 md:mt-10">
            <div class="flex justify-center py-10">
                <a href="/about-us" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:bg-orange-700 transition-colors shadow-lg shadow-orange-500/25">
                    Learn More
                </a>
                </div>
          </footer>
        </blockquote>
      </div>
      <!-- End Col -->
       <div class="relative h-80 md:h-150 bg-surface rounded-2xl">
        <img class="absolute inset-0 size-full object-cover rounded-2xl" src="https://images.unsplash.com/photo-1555244162-803834f70033?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2F0ZXJpbmclMjBldmVudHN8ZW58MHx8MHx8fDA%3D" alt="Testimonials Image">
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
</div>
<!-- End Testimonials -->

<!-- Testimonials -->
<div class="py-5 md:py-16 lg:py-20 bg-primary-100 dark:bg-primary-500/20">
  <div class="px-4 sm:px-6 lg:px-8">
    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 md:items-center">
      <div class="relative h-80 md:h-150 bg-surface rounded-2xl">
        <img class="absolute inset-0 size-full object-cover rounded-2xl" src="https://images.unsplash.com/photo-1599757628564-db10729b97f1?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGV2ZW50JTIwZGVjb3J8ZW58MHx8MHx8fDA%3D" alt="Testimonials Image">
      </div>
      <!-- End Col -->

      <div class="pt-10 md:p-10">
        <blockquote class="max-w-4xl mx-auto">
          <p class="mb-6  sm:text-2xl lg:text-3xl text-foreground">
            A Family Tradition of Rich, Aromatic Coffee
          </p>

          <p class="text-xl md:text-lg lg:leading-normal text-foreground">
            Coffee has the power to connect generations – whether it's learning grandma's brewing techniques and trying to perfect them just like her or the intense memories triggered by the rich flavors and aromas of our favorite coffee blends.
          </p>

          <footer class="mt-6 md:mt-10">
            <div class="flex justify-center py-10">
              <a href="/about-us" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:bg-orange-700 transition-colors shadow-lg shadow-orange-500/25">
                Learn More
              </a>
            </div>
          </footer>
          </footer>
        </blockquote>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
</div>
<!-- End Testimonials -->


<!-- FAQ -->
<div class="max-w-340 px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid md:grid-cols-5 gap-10">
    <div class="md:col-span-2">
      <div class="max-w-xs">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight text-foreground">Frequently<br>asked questions</h2>
        <p class="mt-1 hidden md:block text-muted-foreground-2">Answers to the most frequently asked questions.</p>
      </div>
    </div>
    <!-- End Col -->

    <div class="md:col-span-3">
      <!-- Accordion -->
      <div class="hs-accordion-group divide-y divide-line-2">
        <div class="hs-accordion pb-3 active" id="hs-basic-with-title-and-arrow-stretched-heading-one">
          <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-foreground rounded-lg transition hover:text-muted-foreground-1 focus:outline-hidden" aria-expanded="true" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
            Can I cancel at anytime?
            <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-muted-foreground-2 group-hover:text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-muted-foreground-2 group-hover:text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
          </button>
          <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
            <p class="text-muted-foreground-2">
              Yes, you can cancel anytime no questions are asked while you cancel but we would highly appreciate if you will give us some feedback.
            </p>
          </div>
        </div>

        <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-two">
          <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-foreground rounded-lg transition hover:text-muted-foreground-1 focus:outline-hidden" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
            My team has credits. How do we use them?
            <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-muted-foreground-2 group-hover:text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-muted-foreground-2 group-hover:text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
          </button>
          <div id="hs-basic-with-title-and-arrow-stretched-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
            <p class="text-muted-foreground-2">
              Once your team signs up for a subscription plan. This is where we sit down, grab a cup of coffee and dial in the details.
            </p>
          </div>
        </div>

        <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-three">
          <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-foreground rounded-lg transition hover:text-muted-foreground-1 focus:outline-hidden" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
            How does Preline's pricing work?
            <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-muted-foreground-2 group-hover:text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-muted-foreground-2 group-hover:text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
          </button>
          <div id="hs-basic-with-title-and-arrow-stretched-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
            <p class="text-muted-foreground-2">
              Our subscriptions are tiered. Understanding the task at hand and ironing out the wrinkles is key.
            </p>
          </div>
        </div>

        <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-four">
          <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-foreground rounded-lg transition hover:text-muted-foreground-1 focus:outline-hidden" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-four">
            How secure is Preline?
            <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-muted-foreground-2 group-hover:text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-muted-foreground-2 group-hover:text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
          </button>
          <div id="hs-basic-with-title-and-arrow-stretched-collapse-four" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
            <p class="text-muted-foreground-2">
              Protecting the data you trust to Preline is our first priority. This part is really crucial in keeping the project in line to completion.
            </p>
          </div>
        </div>

        <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-five">
          <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-foreground rounded-lg transition hover:text-muted-foreground-1 focus:outline-hidden" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-five">
            How do I get access to a theme I purchased?
            <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-muted-foreground-2 group-hover:text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-muted-foreground-2 group-hover:text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
          </button>
          <div id="hs-basic-with-title-and-arrow-stretched-collapse-five" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-five">
            <p class="text-muted-foreground-2">
              If you lose the link for a theme you purchased, don't panic! We've got you covered. You can login to your account, tap your avatar in the upper right corner, and tap Purchases. If you didn't create a login or can't remember the information, you can use our handy Redownload page, just remember to use the same email you originally made your purchases with.
            </p>
          </div>
        </div>

        <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-six">
          <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-foreground rounded-lg transition hover:text-muted-foreground-1 focus:outline-hidden" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-six">
            Upgrade License Type
            <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-muted-foreground-2 group-hover:text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-muted-foreground-2 group-hover:text-muted-foreground-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
          </button>
          <div id="hs-basic-with-title-and-arrow-stretched-collapse-six" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-six">
            <p class="text-muted-foreground-2">
              There may be times when you need to upgrade your license from the original type you purchased and we have a solution that ensures you can apply your original purchase cost to the new license purchase.
            </p>
          </div>
        </div>
      </div>
      <!-- End Accordion -->
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
</div>
<!-- End FAQ -->

@endsection