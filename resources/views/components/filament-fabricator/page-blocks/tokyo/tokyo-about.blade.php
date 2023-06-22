@aware(['page', 'title', 'photo', 'curation', 'subtitle', 'description', 'text', 'shortInfoLeft', 'shortInfoRight'])
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
      <div class="tokyo_tm_button" data-position="left">
        <a href="{{ asset('storage/tokyo/img/cv/1.jpg') }}" download>
          <span>Download CV</span>
        </a>
      </div>
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
            <h3>Education</h3>
          </div>
          <div class="tokyo_tm_resume_list">
            <ul>
              <li>
                <div class="list_inner">
                  <div class="time">
                    <span>2014 - 2016</span>
                  </div>
                  <div class="place">
                    <h3>Oxford Univercity</h3>
                    <span>Master Degree</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="list_inner">
                  <div class="time">
                    <span>2010 - 2014</span>
                  </div>
                  <div class="place">
                    <h3>Texas Univercity</h3>
                    <span>Bachelor Degree</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="list_inner">
                  <div class="time">
                    <span>2008 - 2010</span>
                  </div>
                  <div class="place">
                    <h3>Simone College</h3>
                    <span>Associate Degree</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="right">
          <div class="tokyo_section_title">
            <h3>Experience</h3>
          </div>
          <div class="tokyo_tm_resume_list">
            <ul>
              <li>
                <div class="list_inner">
                  <div class="time">
                    <span>2018 - Now</span>
                  </div>
                  <div class="place">
                    <h3>Envato Market</h3>
                    <span>Exclusive Author</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="list_inner">
                  <div class="time">
                    <span>2016 - 2018</span>
                  </div>
                  <div class="place">
                    <h3>RGB Studio</h3>
                    <span>UX Designer</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="list_inner">
                  <div class="time">
                    <span>2012 - 2016</span>
                  </div>
                  <div class="place">
                    <h3>Innovations Park</h3>
                    <span>Web Designer</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="tokyo_tm_testimonials">
    <div class="container">
      <div class="tokyo_section_title">
        <h3>Testimonials</h3>
      </div>
      <div class="list">
        <ul class="owl-carousel">
          <li>
            <div class="list_inner">
              <div class="text">
                <p>Beautiful minimalist design and great, fast response with support. Highly recommend. Thanks
                  Marketify!</p>
              </div>
              <div class="details">
                <div class="image">
                  <div class="main" data-img-url="{{ asset('storage/tokyo/img/testimonials/1.jpg') }}"></div>
                </div>
                <div class="info">
                  <h3>Alexander Walker</h3>
                  <span>Graphic Designer</span>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="list_inner">
              <div class="text">
                <p>These people really know what they are doing! Great customer support availability and
                  supperb kindness.</p>
              </div>
              <div class="details">
                <div class="image">
                  <div class="main" data-img-url="{{ asset('storage/tokyo/img/testimonials/2.jpg') }}"></div>
                </div>
                <div class="info">
                  <h3>Isabelle Smith</h3>
                  <span>Content Manager</span>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="list_inner">
              <div class="text">
                <p>I had a little problem and the support was just awesome to quickly solve the situation. And
                  keep going on.</p>
              </div>
              <div class="details">
                <div class="image">
                  <div class="main" data-img-url="{{ asset('storage/tokyo/img/testimonials/3.jpg') }}"></div>
                </div>
                <div class="info">
                  <h3>Baraka Clinton</h3>
                  <span>English Teacher</span>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- /ABOUT -->
