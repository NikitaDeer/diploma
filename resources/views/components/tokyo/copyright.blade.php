@props(['page'])
@php
  $found = false;
@endphp

@foreach ($page->blocks as $block)
  @if ($block['type'] == 'tokyo.tokyo-copyright')
    <x-filament-fabricator.page-block :block="$block" />
    @php
      $found = true;
    @endphp
  @endif
@endforeach
@if (!$found)
  блок Copyright не найден
@endif
