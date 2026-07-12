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
                <a class="py-2 px-3 sm:px-4 inline-flex items-center gap-x-2 text-xs sm:text-sm font-medium rounded-lg sm:rounded-xl bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:bg-orange-700 transition-colors" href="#">
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
  <span class="block text-orange-400 text-lg  md:text-xl mt-3 font-light">Jolly ventures was founded back in 2022 by Elizabeth Kamau a food entrepreneur whose dreams went beyond an ordinary Hotel. Since that time Jolly ventures had created unforgetable experiences for their clients. Events are not just about food! Good food is all you need.</span>
<span class="block text-orange-400 text-lg  md:text-xl mt-3 font-light">Are you planning an event ? Dont shy off know more about us and get in touch!</span>

</div>

<div class="flex justify-center">
  <button type="button" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-hover disabled:opacity-50 disabled:pointer-events-none">
  More about us
</button>
</div>
 

@endsection