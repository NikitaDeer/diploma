@props(['blocks' => []])

@foreach ($blocks as $blockData)
  @if ($blockData['type'] != 'tokyo.tokyo-copyright' && $blockData['type'] != 'tokyo.tokyo-menu')
    @php
      $pageBlock = \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getPageBlockFromName($blockData['type']);
    @endphp

    @isset($pageBlock)
      <x-dynamic-component :component="$pageBlock::getComponent()" :attributes="new \Illuminate\View\ComponentAttributeBag($pageBlock::mutateData($blockData['data']))" />
    @endisset
  @else
    @continue
  @endif
@endforeach
