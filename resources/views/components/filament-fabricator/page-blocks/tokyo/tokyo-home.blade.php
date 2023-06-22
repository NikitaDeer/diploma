@aware(['page', 'title', 'subtitle', 'socials', 'photo', 'type', 'background'])
<!-- HOME -->
<div id="home" class="tokyo_tm_section animated">
  <div class="container">
    <div class="tokyo_tm_home">
      <div class="home_content">
        <div class="avatar" data-type="{{ $type }}">
          <!-- data-type values are: "wave", "circle", "square"-->
          @if ($background)
            <div class="image" data-img-url="{{ asset('storage/tokyo/img/portfolio/1.jpg') }}"></div>
          @endif
          <x-curator-glider class="image" :media="$photo" loading="lazy" />
        </div>
        <div class="details">
          <h3 class="name">{{ $title }}</h3>
          <p class="job">{{ $subtitle }}</p>
          <div class="social">
            <ul>
              @foreach ($socials as $social)
                <li><a href="{{ $social['url'] }}"><i class="{{ $social['icon'] }}"></i></a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /HOME -->
