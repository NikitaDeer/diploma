@aware(['page', 'year', 'url', 'title'])
<div class="copyright">
  <p>&copy; {{ $year }} {{ config('app.name', 'Tokyo') }}<br>Created by <a href="{{ $url }}"
      target="_blank">{{ $title }}</a></p>
</div>
