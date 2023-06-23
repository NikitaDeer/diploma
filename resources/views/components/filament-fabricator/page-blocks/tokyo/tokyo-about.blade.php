@aware(['page', 'title', 'photo', 'curation', 'subtitle', 'description', 'text', 'shortInfoLeft', 'shortInfoRight', 'educationLeftTitle', 'educationLeft', 'educationRightTitle', 'educationRight', 'testimonialsTitle', 'testimonials'])
<!-- ABOUT -->
<div id="about" class="tokyo_tm_section">

  <div class="container">

    <div class="tokyo_tm_about">
      <div class="tokyo_tm_title">
        <div class="title_flex">
          <div class="left">
            <span>About</span>
            <h3>{{ $title }}</h3>
          </div>
        </div>
      </div>
      <div class="top_author_image">
        <x-curator-curation class="image" :media="$photo" curation="{{ $curation }}" loading="lazy" />
      </div>
      <div class="about_title">
        <h3>{{ $subtitle }}</h3>
        <span>{{ $description }}</span>
      </div>
      <div class="about_text">{{ $text }}</div>
      <div class="tokyo_tm_short_info">
        <div class="left">
          <div class="tokyo_tm_info">
            <ul>
              @foreach ($shortInfoLeft as $item)
                <li>
                  <span>{{ $item['short-title'] }}</span>
                  <span>
                    <a href="{{ $item['short-url'] }}">
                      {{ $item['short-text'] }}
                    </a>
                  </span>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="right">
          <div class="tokyo_tm_info">
            <ul>
              @foreach ($shortInfoRight as $item)
                <li>
                  <span> {{ $item['short-title'] }}</span>
                  <span>{{ $item['short-text'] }}</span>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      {{-- TODO Кнопка пока не нужна --}}
      {{-- <div class="tokyo_tm_button" data-position="left">
        <a href="{{ asset('storage/tokyo/img/cv/1.jpg') }}" download>
          <span>Download CV</span>
        </a>
      </div> --}}
    </div>

  </div>

  {{-- <div class="tokyo_tm_progressbox">
    <div class="container">
      <div class="in">
        <div class="left">
          <div class="tokyo_section_title">
            <h3>Programming Skills</h3>
          </div>
          <div class="tokyo_progress">
            <div class="progress_inner" data-value="95">
              <span><span class="label">WordPress</span><span class="number">95%</span></span>
              <div class="background">
                <div class="bar">
                  <div class="bar_in"></div>
                </div>
              </div>
            </div>
            <div class="progress_inner" data-value="80">
              <span><span class="label">JavaScript</span><span class="number">80%</span></span>
              <div class="background">
                <div class="bar">
                  <div class="bar_in"></div>
                </div>
              </div>
            </div>
            <div class="progress_inner" data-value="90">
              <span><span class="label">Angular</span><span class="number">90%</span></span>
              <div class="background">
                <div class="bar">
                  <div class="bar_in"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="tokyo_section_title">
            <h3>Language Skills</h3>
          </div>
          <div class="tokyo_progress">
            <div class="progress_inner" data-value="90">
              <span><span class="label">English</span><span class="number">90%</span></span>
              <div class="background">
                <div class="bar">
                  <div class="bar_in"></div>
                </div>
              </div>
            </div>
            <div class="progress_inner" data-value="95">
              <span><span class="label">Russian</span><span class="number">95%</span></span>
              <div class="background">
                <div class="bar">
                  <div class="bar_in"></div>
                </div>
              </div>
            </div>
            <div class="progress_inner" data-value="85">
              <span><span class="label">Arabic</span><span class="number">85%</span></span>
              <div class="background">
                <div class="bar">
                  <div class="bar_in"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- <div class="tokyo_tm_skillbox">
    <div class="container">
      <div class="in">
        <div class="left">
          <div class="tokyo_section_title">
            <h3>Knowledge</h3>
          </div>
          <div class="tokyo_tm_skill_list">
            <ul>
              <li>
                <span><img class="svg" src="{{ asset('storage/tokyo/img/svg/rightarrow.svg') }}"
                    alt="" />Bootstrap, Angular</span>
              </li>
              <li>
                <span><img class="svg" src="{{ asset('storage/tokyo/img/svg/rightarrow.svg') }}"
                    alt="" />React, Vue, Laravel</span>
              </li>
              <li>
                <span><img class="svg" src="{{ asset('storage/tokyo/img/svg/rightarrow.svg') }}"
                    alt="" />Stylus, Sass, Less</span>
              </li>
              <li>
                <span><img class="svg" src="{{ asset('storage/tokyo/img/svg/rightarrow.svg') }}"
                    alt="" />Gulp, Webpack, Grunt</span>
              </li>
              <li>
                <span><img class="svg" src="{{ asset('storage/tokyo/img/svg/rightarrow.svg') }}"
                    alt="" />Tweenmax, GSAP</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="right">
          <div class="tokyo_section_title">
            <h3>Interests</h3>
          </div>
          <div class="tokyo_tm_skill_list">
            <ul>
              <li>
                <span><img class="svg" src="{{ asset('storage/tokyo/img/svg/rightarrow.svg') }}"
                    alt="" />Make UI/UX Design</span>
              </li>
              <li>
                <span><img class="svg" src="{{ asset('storage/tokyo/img/svg/rightarrow.svg') }}"
                    alt="" />Create Mobile App</span>
              </li>
              <li>
                <span><img class="svg" src="{{ asset('storage/tokyo/img/svg/rightarrow.svg') }}"
                    alt="" />Site Optimization</span>
              </li>
              <li>
                <span><img class="svg" src="{{ asset('storage/tokyo/img/svg/rightarrow.svg') }}"
                    alt="" />Custom Website</span>
              </li>
              <li>
                <span><img class="svg" src="{{ asset('storage/tokyo/img/svg/rightarrow.svg') }}"
                    alt="" />Learn Ecommerce</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="tokyo_tm_resumebox">
    <div class="container">
      <div class="in">
        <div class="left">
          <div class="tokyo_section_title">
            <h3>{{ $educationLeftTitle }}</h3>
          </div>
          <div class="tokyo_tm_resume_list">
            <ul>
              @foreach ($educationLeft as $item)
                <li>
                  <div class="list_inner">
                    <div class="time">
                      <span>{{ $item['year'] }}</span>
                    </div>
                    <div class="place">
                      <h3>{{ $item['place'] }}</h3>
                      <span>{{ $item['description'] }}</span>
                    </div>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="right">
          <div class="tokyo_section_title">
            <h3>{{ $educationRightTitle }}</h3>
          </div>
          <div class="tokyo_tm_resume_list">
            <ul>
              @foreach ($educationRight as $item)
                <li>
                  <div class="list_inner">
                    <div class="time">
                      <span>{{ $item['year'] }}</span>
                    </div>
                    <div class="place">
                      <h3>{{ $item['place'] }}</h3>
                      <span>{{ $item['description'] }}</span>
                    </div>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="tokyo_tm_testimonials">
    <div class="container">
      <div class="tokyo_section_title">
        <h3>{{ $testimonialsTitle }}</h3>
      </div>
      <div class="list">
        <ul class="owl-carousel">
          @foreach ($testimonials as $testimonial)
            <li>
              <div class="list_inner">
                <div class="text">
                  <p>{{ $testimonial['text'] }}</p>
                </div>
                <div class="details">
                  <div class="image">
                    <x-curator-curation class="main" media="{{ $testimonial['photo'] }}"
                      curation="{{ $testimonial['curation'] }}" loading="lazy" />
                  </div>
                  <div class="info">
                    <h3>{{ $testimonial['title'] }}</h3>
                    <span>{{ $testimonial['description'] }}</span>
                  </div>
                </div>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- /ABOUT -->
