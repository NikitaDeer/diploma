@aware(['page', 'items'])

<ul class="transition_link">
  @foreach ($items as $item)
    {{-- TODO добавить код для class="active" --}}
    <li><a href="{{ $item['url'] }}">{{ $item['title'] }}</a></li>
  @endforeach
</ul>
