<x-main-layout>
  {{-- header --}}
  <x-site.header />

  {{-- start info section --}}
  <x-site.info :$page />

  {{-- about section --}}
  <x-site.about :$advantages />

  {{-- main section --}}
  <x-site.main />

  {{-- bye bye section --}}
  <x-site.bye-bye />

  {{-- footer --}}
  <x-site.footer />

</x-main-layout>
