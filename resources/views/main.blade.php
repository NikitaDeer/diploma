<x-main-layout>

  {{-- header --}}
  <x-site.header />

  {{-- start info section --}}
  <x-site.info :$page />

  {{-- about section --}}
  <x-site.about :$advantages :$page />

  {{-- main section --}}
  <x-site.main :$page />

  <x-site.service :$services />

  {{-- bye bye section --}}
  <x-site.bye-bye />

  {{-- footer --}}
  <x-site.footer />

</x-main-layout>
