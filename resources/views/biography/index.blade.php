@extends('layouts.app')
@section('title', __('آموزش‌ها'))

@section('content')
@section('canvas')
    <!-- Canvas element for animation -->
    <canvas id="bgCanvas"></canvas>
@endsection
<body class=" text-light leading-relaxed ">
  <div class="relative w-screen h-screen flex items-center justify-center bg-black bg-opacity-60">
  <!-- About Section -->
  <section id="about" class="mt-52 px-6">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-[10rem_26rem_auto] gap-12 relative">
      
      <!-- About Title -->
      <h2 class="absolute -top-28 text-4xl md:text-5xl font-light text-white z-[9]">
        {{ __('biography.section_title_1') }}<br />{{ __('biography.section_title_2') }}
      </h2>
      
      <!-- About Button -->
      <a href="#" class="self-end text-primary-variant transition-transform duration-300 hover:text-primary hover:-translate-y-4">
        Discover More
      </a>

      <!-- Left Section (Images) -->
      <div class="relative group">
        <!-- Background Block -->
        <div class="absolute bottom-0 w-64 h-96 bg-bg4 group-hover:border-[1rem] group-hover:border-bg4 group-hover:left-0 group-hover:bottom-0 transition duration-500"></div>


        <!-- Main Image -->
        <div class="relative group">
            <img 
              src="{{ asset('images/elyas_toghyani_full.jpg') }}" 
              alt="Main Image"
              class="about__image-lg relative w-[400px] h-[600px] object-cover border-[1rem] border-bg4 left-[1rem] bottom-[1rem] saturate-0 brightness-[0.3] transition-all duration-500 filter group-hover:left-0 group-hover:bottom-0 group-hover:grayscale-0 group-hover:brightness-100 group-hover:saturate-[1.2] group-hover:shadow-2xl group-hover:border-[1rem] group-hover:border-bg4"
            />
          </div>
          

        <!-- Small Image -->
        <div class="absolute top-12 left-24 w-[350px] h-[350px] overflow-hidden shadow-lg transition-opacity duration-500 group-hover:opacity-0">
          <img src="{{ asset('images/elyas_toghyani_full.jpg') }}" alt="Small Image" 
               class="w-full h-full object-cover">
        </div>
      </div>

      <!-- Right Section (Texts) -->
      <div class="text-neutral-200 space-y-4">
        <p class="mb-4">
            {{ __('biography.bio_p1') }}
        </p>
        <p class="mb-4">
            {{ __('biography.bio_p2') }}
        </p>
        <p>
            {{ __('biography.bio_p3') }}
        </p>
        <p>
          {{ __('biography.bio_p4') }}
      </p>
      <p>
        {{ __('biography.bio_p5') }}
    </p>
    <p>
      {{ __('biography.bio_p6') }}
  </p>
  <p>
    {{ __('biography.bio_p7') }}
</p>
<p>
  {{ __('biography.bio_p8') }}
</p>
<p>
  {{ __('biography.bio_p9') }}
</p>
    </div>
    </div>
  </section>
  </div>
</body>
</html>



@endsection