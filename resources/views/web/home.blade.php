<x-app-layout>
  <x-slot name="mainLogoRoute">
    {{ route('home') }}
  </x-slot>


    <div class="relative">
        {{-- <img class="w-full" src="{{ asset('images\banner-salon.png') }}" alt="Banner image"> --}}
        {{-- <img class="max-h-fit w-full" src="{{ asset('images\salon1.png') }}" alt="Banner image"> --}}
        <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<section
class="relative bg-cover bg-center bg-no-repeat " style="background-image: url({{ asset('images/bad.jpg') }}" ;>
<div class="absolute inset-0 bg-gradient-to-r from-white/95 to-white/0 ltr:bg-gradient-to-r rtl:bg-gradient-to-l sm:bg-transparent sm:from-white/95 sm:to-white/0"></div>

<div
  class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
>
  <div class="max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
    <h1 class="text-3xl font-extrabold sm:text-5xl text-neutral-700">
      Find Your Perfect Sport training Experience at
      <strong class="block font-extrabold text-blue-500">
    Badminton Field.      </strong>
    </h1>

    <p class="mt-4 max-w-lg sm:text-xl/relaxed">
      Discover a World of sport with Badminton field booking.
         </p>

    <div class="mt-8 flex flex-wrap gap-4 text-center">
      <a
        href="{{route('services')}}"
        class="block w-full rounded bg-blue-500 px-12 py-3 text-lg font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
      >
Book Now      </a>
<a
          href="{{route('services')}}"
          class="block w-full rounded bg-white px-12 py-3 text-lg font-medium text-blue-500 shadow hover:text-blue-600 focus:outline-none focus:ring-offset-blue-400 active:text-blue-500 sm:w-auto"
        >
          Browse Services
        </a>


    </div>

  </div>
</div>
</section>

        {{-- <img class="w-full bg-cover" src="{{ asset('images\Salon2.jpg') }}" alt="Banner image"> --}}
        {{-- <div class="absolute right-1 top-5 font-black text-blue-600 text-7xl">30% OFF <br>THIS SEASON</div> --}}
 <div>

<!--Copyright section-->
<div class="bg-white p-2 text-center">
  <span class="text-neutral-500">© 2023 Copyright:</span>
  <a
    class="font-semibold text-neutral-600"
    href="/"
    >IT DEL Badminton Field</a
  >
</div>
</footer>
<script>
  // hide offer-banner when user clicks on close
  document.getElementById("offer-banner-close").addEventListener("click", function() {
    document.getElementById("offer-banner").style.display = "none";
  });

</script>

</x-app-layout>
