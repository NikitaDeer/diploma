@aware(['page', 'pageTitle', 'youtube', 'image', 'detail', 'youtubeTitle', 'imageTitle', 'detailTitle'])

<div class="tokyo_tm_portfolio_titles"></div>
<!-- PORTFOLIO -->
<div id="portfolio" class="tokyo_tm_section">
  <div class="container">
    <div class="tokyo_tm_portfolio">
      <div class="tokyo_tm_title">
        <div class="title_flex">
          <div class="left">
            <span>Portfolio</span>
            <h3>{{ $pageTitle }}</h3>
          </div>
          <div class="portfolio_filter">

            <ul>
              <li><a href="#" class="current" data-filter="*">All</a></li>
              @if (!empty($youtube[0]))
                <li><a href="#" data-filter=".youtube">{{ $youtubeTitle }}</a></li>
              @endif
              @if (!empty($image[0]))
                <li><a href="#" data-filter=".image">{{ $imageTitle }}</a></li>
              @endif
              @if (!empty($detail[0]))
                <li><a href="#" data-filter=".detail">{{ $detailTitle }}</a></li>
              @endif
            </ul>
          </div>
        </div>
      </div>
      <div class="list_wrapper">
        <ul class="portfolio_list gallery_zoom">
          @if (!empty($youtube[0]))
            @foreach ($youtube as $item)
              <li class="youtube">
                <div class="inner">
                  <div class="entry tokyo_tm_portfolio_animation_wrap"
                    data-title="{{ Curator::getMedia($item)->first()->title }}" data-category="Youtube">
                    <a class="popup-youtube" href="{{ $item['url'] }}">
                      <x-curator-glider class="!opacity-100" :media="$item['image']" />
                    </a>
                  </div>
                </div>
              </li>
            @endforeach
          @endif

          @if (!empty($image[0]))
            @foreach ($image as $item)
              {{-- Доступ к картинке более сложный, так как надо получить несколько атрибутов из модели --}}
              @php
                $media = Curator::getMedia($item)->first();
              @endphp
              <li class="image">
                <div class="inner">
                  <div class="entry tokyo_tm_portfolio_animation_wrap" data-title="{{ $media->title }}"
                    data-category="Image">
                    <a class="zoom" href="{{ asset('storage/' . $media->path) }}">
                      {{-- TODO заменить на x-curator-curation --}}
                      <x-curator-glider class="!opacity-100" media="{{ $media->id }}" />
                    </a>
                  </div>
                </div>
              </li>
            @endforeach
          @endif

          @if (!empty($detail[0]))
            @foreach ($detail as $item)
              <li class="detail">
                <div class="inner">
                  <div class="entry tokyo_tm_portfolio_animation_wrap"
                    data-title="{{ Curator::getMedia($item)->first()->title }}" data-category="Detail">
                    <a class="popup_info" href="#">
                      <x-curator-glider class="!opacity-100" :media="$item['image']" />
                    </a>
                  </div>
                </div>

                <!-- Portfolio Popup Start -->
                <div class="details_all_wrap">
                  <div class="popup_details">
                    <div class="main_details">
                      <div class="textbox">
                        {{-- Вывод markdown, результат одинаковый --}}
                        {{-- {!! Str::of($item['detail-text'])->markdown() !!} --}}
                        <x-markdown>
                          {{ $item['detail-text'] }}
                        </x-markdown>
                      </div>
                      {{-- <div class="detailbox">
                        <ul>
                          <li>
                            <span class="first">Client</span>
                            <span>Alvaro Morata</span>
                          </li>
                          <li>
                            <span class="first">Category</span>
                            <span><a href="#">Detail</a></span>
                          </li>
                          <li>
                            <span class="first">Date</span>
                            <span>October 22, 2022</span>
                          </li>
                          <li>
                            <span class="first">Share</span>
                            <ul class="share">
                              <li><a href="#"><i class="icon-facebook-squared"></i></a></li>
                              <li><a href="#"><i class="icon-twitter-squared"></i></a></li>
                              <li><a href="#"><i class="icon-behance-squared"></i></a></li>
                              <li><a href="#"><i class="icon-linkedin-squared"></i></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div> --}}
                    </div>
                    <div class="additional_images">
                      <ul>
                        <li>
                          <div class="list_inner">
                            <div class="my_image">
                              <x-curator-glider class="!opacity-100" :media="$item['additional-image1']" />
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="list_inner">
                            <div class="my_image">
                              <x-curator-glider class="!opacity-100" :media="$item['additional-image2']" />
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="list_inner">
                            <div class="my_image">
                              <x-curator-glider class="!opacity-100" :media="$item['additional-image3']" />
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /Portfolio Popup End -->

              </li>
            @endforeach
          @endif
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- /PORTFOLIO -->
