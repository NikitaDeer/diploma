@aware(['page', 'pageTitle', 'services'])
<!-- SERVICE -->
<div id="service" class="tokyo_tm_section">

  <div class="container">
    <div class="tokyo_tm_services">
      <div class="tokyo_tm_title">
        <div class="title_flex">
          <div class="left">
            <span>Services</span>
            <h3>{{ $pageTitle }}</h3>
          </div>
        </div>
      </div>
      <div class="list">
        <ul>
          {{-- TODO Все это надо из базы --}}
          @foreach ($services as $service)
            @php
              $record = \App\Models\Service::find($service['serviceId']);
            @endphp
            @if ($record->is_published)
              <li>
                <div class="list_inner">
                  <span class="number">{{ $loop->iteration }}</span>
                  <h3 class="title">{{ $record->name }}</h3>
                  <p class="text">{{ $record->description }}</p>
                  <div class="tokyo_tm_read_more">
                    <a href="#"><span>Подробнее</span></a>
                  </div>
                  <a class="tokyo_tm_full_link" href="#"></a>

                  <!-- Service Popup Start -->
                  <img class="popup_service_image" src="{{ asset('storage/tokyo/img/news/1.jpg') }}" alt="" />
                  {{-- <x-curator-glider class="popup_service_image" :media="$service['image']" /> --}}
                  <div class="service_hidden_details">
                    <div class="service_popup_informations">
                      <div class="descriptions">
                        <x-markdown>
                          {{ $record->text }}
                        </x-markdown>
                      </div>
                    </div>
                  </div>
                  <!-- /Service Popup End -->

                </div>
              </li>
            @endif
          @endforeach

        </ul>
      </div>
    </div>
  </div>

  {{-- <div class="tokyo_tm_partners">
    <div class="container">
      <div class="tokyo_section_title">
        <h3>Partners</h3>
      </div>
      <div class="partners_inner">
        <ul>

          <li>
            <div class="list_inner">
              <img src="{{ asset('storage/tokyo/img/partners/dark/1.png') }}" alt="" />
            </div>
          </li>

        </ul>
      </div>
    </div>
  </div> --}}

  <div class="tokyo_tm_pricing">
    <div class="container">
      <div class="tokyo_section_title">
        <h3>Цены</h3>
      </div>
      <div class="list">
        <ul>
          @foreach ($services as $service)
            @php
              $record = \App\Models\Service::find($service['serviceId']);
            @endphp
            @if ($record->is_published)
              <li>
                <div class="list_inner">
                  <div class="price">
                    <h3><span>{{ $record->price }}<span class="currency">$</span></span></h3>
                  </div>
                  <div class="plan">
                    <h3>{{ $record->name }}</h3>
                  </div>
                  {{-- <ul class="item">
                    <li class="active">
                      <p>Premium Icons</p>
                    </li>
                    <li class="active">
                      <p>Quality Logo</p>
                    </li>
                    <li>
                      <p>Stock Images</p>
                    </li>
                    <li>
                      <p>Free Support</p>
                    </li>
                  </ul> --}}
                  <div class="tokyo_tm_button" data-position="left">
                    <a href="#">
                      <span>Purchase</span>
                    </a>
                  </div>
                  @if ($record->popular)
                    <span class="popular">Popular</span>
                  @endif
                </div>
              </li>
            @endif
          @endforeach
        </ul>
      </div>
    </div>
  </div>

  <div class="tokyo_tm_facts">
    <div class="container">
      <div class="tokyo_section_title">
        <h3>Fun Facts</h3>
      </div>
      <div class="list">
        <ul>

          <li>
            <div class="list_inner">
              <h3>777+</h3>
              <span>Projects Completed</span>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </div>

</div>
<!-- /SERVICE -->
