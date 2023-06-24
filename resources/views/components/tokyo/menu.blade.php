@props(['page'])

@php
  $found = false;
@endphp

@foreach ($page->blocks as $block)
  @if ($block['type'] == 'tokyo.tokyo-menu')
    <x-filament-fabricator.page-block :block="$block" />
    @php
      $found = true;
    @endphp
  @endif
@endforeach
@if (!$found)
  блок Menu не найден
@endif

@env('local')
<div class="space-y-2">
  <x-login-link email="admin@admin.com" label="Login as admin" redirect-url="/tokyo" />
  <x-login-link email="user@example.com" label="Login as regular user" redirect-url="/tokyo" />
</div>
@endenv

@can('view', auth()->user())
  <a href="/admin">Перейти в админ панель</a>
@endcan
