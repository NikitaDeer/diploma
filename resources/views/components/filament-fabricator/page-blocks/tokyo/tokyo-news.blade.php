@aware(['page', 'pageTitle', 'news', 'page', 'page'])
<!-- NEWS -->
<div id="news" class="tokyo_tm_section">
  <div class="container">
    <div class="tokyo_tm_news">
      <div class="tokyo_tm_title">
        <div class="title_flex">
          <div class="left">
            <span>News</span>
            <h3>{{ $pageTitle }}</h3>
          </div>
        </div>
      </div>
      <ul>
        @foreach ($news as $item)
          @php
            $record = App\Models\News::find($item['newsId']);
          @endphp
          <li>
            <div class="list_inner">
              <div class="image">
                {{-- TODO Добавить тень картинке --}}
                <x-curator-glider class="!opacity-100" :media="$record->image" loading="lazy" />
                <a class="tokyo_tm_full_link" href="#"></a>
              </div>
              <div class="details">
                <div class="extra">
                  <div class="short">
                    <p class="date">
                      <a href="#">{{ $record->author }}</a>
                      <span>{{ $record->updated_at }}</span>
                    </p>
                  </div>
                </div>
                <h3 class="title">
                  <a href="#">{{ $record->title }}</a>
                </h3>
                <div class="tokyo_tm_read_more">
                  <a href="#"><span>Подробности</span></a>
                </div>
              </div>

              <!-- News Popup Start -->
              <div class="main_content">
                <div class="descriptions">
                  <p class="bigger">
                    {{ $record->subtitle }}
                  </p>

                  {{-- <div class="quotebox">
                      <div class="icon">
                        <i class="icon-quote-left"></i>
                      </div>
                      {{ $item['quotebox'] }}
                    </div> --}}

                  <x-markdown>
                    {{ $record->text }}
                  </x-markdown>
                </div>

              </div>
              <!-- /News Popup End -->
            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
<!-- /NEWS -->
