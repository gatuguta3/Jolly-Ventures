@extends('main')

@section('title', 'Jolly Kitchen - About Us')

@section('content')

<div class="bg-local w-full h-[30vh] sm:h-[60vh] md:h-[40vh] flex items-center justify-center bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1555244162-803834f70033?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2F0ZXJpbmclMjBldmVudHN8ZW58MHx8MHx8fDA%3D')">
    <h1 class="text-4xl text-white font-bold">What We Do</h1>
</div>

<hr class="border-stone-500 dark:border-neutral-500">
    <p class="block text-black-400 text-lg  md:text-xl mt-3 font-light">
            Coffee has the power to connect generations – whether it's learning grandma's brewing techniques and trying to perfect them just like her or the intense memories triggered by the rich flavors and aromas of our favorite coffee blends.
             Coffee has the power to connect generations – whether it's learning grandma's brewing techniques and trying to perfect them just like her or the intense memories triggered by the rich flavors and aromas of our favorite coffee blends.
    </p>
    <p class="block text-black-400 text-lg  md:text-xl mt-3 font-light">
            Coffee has the power to connect generations – whether it's learning grandma's brewing techniques and trying to perfect them just like her or the intense memories triggered by the rich flavors and aromas of our favorite coffee blends.
    </p>

    <div class="py-5 md:py-10 lg:py-10 bg-primary-100 dark:bg-primary-500/20">
    <h1 class="text-4xl text-stone-600 dark:text-black-300">Meet Our Team</h1></div>

    <!-- Card -->
<div class="flex flex-col bg-card border border-card-line shadow-2xs rounded-xl">
  <img class="w-full h-auto rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80" alt="Card Image">
  <div class="p-4  ">
    <h3 class="font-semibold text-foreground">
      Jolly Ventures Team
    </h3>
    <p class="mt-1 text-muted-foreground-1">
      Some quick example text to build on the card title and make up the bulk of the card's content.
    </p>
    
  </div>
</div>
<!-- End Card -->

   

<div class="py-2 md:py-5 lg:py-5 bg-primary-100 dark:bg-primary-500/20">

    <p class="block text-black-400 text-lg  md:text-xl mt-3 font-light">
            Coffee has the power to connect generations – whether it's learning grandma's brewing techniques and trying to perfect them just like her or the intense memories triggered by the rich flavors and aromas of our favorite coffee blends.
             Coffee has the power to connect generations – whether it's learning grandma's brewing techniques and trying to perfect them just like her or the intense memories triggered by the rich flavors and aromas of our favorite coffee blends.
    </p>
  
  <ul class="list-disc list-inside text-foreground">
    <li>Now this is a story all about how, my life got flipped turned upside down</li>
    <li>And I like to take a minute and sit right here</li>
    <li>I'll tell you how I became the prince of a town called Bel-Air </li>
  </ul>
</div>

<div class="py-5 md:py-10 lg:py-10 bg-primary-100 dark:bg-primary-500/20">
    <h1 class="text-4xl text-stone-600 dark:text-black-300">Meet Our CEO</h1></div>

 <!-- Testimonials -->
<div class="py-2 md:py-5 lg:py-5 bg-primary-100 dark:bg-primary-500/20">
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

         
        </blockquote>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
</div>
<!-- End Testimonials -->



@endsection