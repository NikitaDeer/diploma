@props(['page'])

<x-main-layout>

  <x-filament-fabricator::page-blocks :blocks="$page->blocks" />

</x-main-layout>