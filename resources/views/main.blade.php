<x-main-layout>

  {{-- start info section --}}
  <x-site.info :$page />

  {{-- about section --}}
  <x-site.about :$advantages :$page />

  {{-- main section --}}
  <x-site.main :$page />

  <x-site.service :$services />

  {{-- bye bye section --}}
  <x-site.bye-bye />

</x-main-layout>
