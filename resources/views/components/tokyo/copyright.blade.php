@props(['page'])

@forelse ($page->blocks as $block)
@if ($block['type'] == 'tokyo.tokyo-copyright')
<x-filament-fabricator.page-block :block="$block" />
@endif
@empty
блок не найден
@endforelse