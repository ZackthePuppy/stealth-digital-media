@extends('layouts.app')

@section('content')

<style>
    .bg-color {
        background-image: linear-gradient(130deg, #8624E1 25%, #3607A6 100%) !important;
    }
</style>

<div x-data="{ burger: false }" class="relative">
    <header id="site-header" class="fixed top-0 w-full z-50 transition-all duration-300 ease-in-out h-[80px]">
        <div class="max-lg:container relative mx-auto px-8 h-full flex items-center justify-between">

            <div class="lg:flex-1 my-5 w-full">
                <a href="
                    ">
                    <img src="{{ asset('images/logo-text.webp') }}" class="h-auto max-md:max-w-[50%] lg:max-w-full"
                        alt="">
                </a>
            </div>

            <div class="lg:flex-1 font-open-sans">
                <div class="lg:hidden">
                    <img src="{{ asset('images/burger.svg') }}" x-on:click="burger =! burger" class="cursor-pointer"
                        width="32" height="32" alt="">
                </div>
                <div class="uppercase justify-end font-semibold items-center max-lg:hidden flex xl:gap-8 gap-5 text-xs xl:text-sm text-white">
                    <a href="">home</a>
                    <a href="">what we do</a>
                    <a href="">word from ceo</a>
                    <a href="">about</a>
                    <a href="">history</a>
                    <a href="">contact</a>
                </div>
            </div>

        </div>
    </header>

    <div x-show="burger" x-cloak x-transition:enter="transition-all duration-300 ease-in-out"
        x-transition:enter-start="max-h-0 opacity-0" x-transition:enter-end="max-h-96 opacity-100"
        x-transition:leave="transition-all duration-300 ease-in-out" x-transition:leave-start="max-h-96 opacity-100"
        x-transition:leave-end="max-h-0 opacity-0" class="mt-[80px] absolute z-20 w-full mx-auto px-8">
        <div class="border-t-[3px] py-8 px-[10%] bg-black/20 font-semibold shadow-lg text-white text-sm border-white w-full">
            <div class="uppercase flex gap-5 flex-col">
                <a href="">home</a>
                <a href="">what we do</a>
                <a href="">word from ceo</a>
                <a href="">about</a>
                <a href="">history</a>
                <a href="">contact</a>
            </div>
        </div>
    </div>
</div>


<div class="relative w-full overflow-hidden bg-color h-[90vh]">
    <div id="parallax-bg"
        class="top-0 left-0 absolute w-full h-[130%] bg-[url('/public/images/bg.webp')] bg-no-repeat bg-cover bg-top">
    </div>
    <div class="absolute bottom-0 h-[110px] lg:bg-size-[100%_250px] bg-size-[100%_110px] lg:h-[250px] w-full z-[1] bg-[url('/public/images/divider.svg')]"
        style="transform: rotateY(180deg);
  "></div>

  <div class="container mx-auto">

  </div>
</div>



<section class="h-screen flex items-center justify-center bg-white text-3xl">
    More content below
</section>
<section class="h-screen flex items-center justify-center bg-white text-3xl">
    More content below
</section>




@endsection
@section('script')
<script>
    window.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    const bg = document.getElementById('parallax-bg');
    bg.style.transform = `translateY(${scrolled * 0.4}px)`;
  });
</script>
<script>
    let lastScroll = 0;
  const header = document.getElementById('site-header');

  window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;

    // Shrink on scroll
    if (currentScroll > 10) {
      header.classList.remove('h-[80px]');
      header.classList.remove('bg-transparent'); 
      header.classList.add('h-[54px]');
      header.classList.add('bg-[#8300E9]'); 
    } else {
      header.classList.remove('h-[54px]');
      header.classList.remove('bg-[#8300E9]'); 
      header.classList.add('h-[80px]');
      header.classList.add('bg-transparent'); 
    }

    // Hide on scroll down (mobile only)
    const isMobile = window.innerWidth < 768;
    if (isMobile) {
      if (currentScroll > lastScroll && currentScroll > 100) {
        header.classList.add('-translate-y-full');
      } else {
        header.classList.remove('-translate-y-full');
      }
    }

    lastScroll = currentScroll;
  });
</script>

@endsection