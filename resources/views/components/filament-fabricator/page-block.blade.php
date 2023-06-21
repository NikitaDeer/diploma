@props(['block' => []])

@php
$pageBlock = \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getPageBlockFromName($block['type'])
@endphp

@isset($pageBlock)
<x-dynamic-component :component="$pageBlock::getComponent()"
  :attributes="new \Illuminate\View\ComponentAttributeBag($pageBlock::mutateData($block['data']))" />
@endisset