@extends('layouts.app')

@section('content')

<style>
    .bg-color {
        background-image: linear-gradient(130deg, #8624E1 25%, #3607A6 100%) !important;
    }
</style>

<section class="relative h-screen overflow-hidden">
  <div
    class="absolute bg-color top-0 left-0 w-full h-[1245.86px] bg-cover bg-center -z-10"
  ></div>
  <div
    id="parallax-bg"
    class="absolute top-0 left-0 w-full h-[1245.86px] bg-[url('/public/images/bg.png')] bg-cover bg-center -z-10"
  ></div>

  <div class="relative z-10 flex items-center justify-center h-full text-black text-5xl font-bold">
    Parallax Hero Content
  </div>
</section>

<div
  class="absolute bottom-0 h-[250px] w-full z-[1] bg-[url('/public/images/divider.svg')]"
  style="background-size: 100% 250px;
    transform: rotateY(180deg);
  "
></div>


<section class="h-screen flex items-center justify-center bg-white text-3xl">
  More content below
</section>




@endsection
<script>
  window.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    const bg = document.getElementById('parallax-bg');
    bg.style.transform = `translateY(${scrolled * 0.4}px)`;
  });
</script>
