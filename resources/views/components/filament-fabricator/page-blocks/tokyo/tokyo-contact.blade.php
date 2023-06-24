@aware(['page', 'pageTitle', 'googleMap'])
<!-- CONTACT -->
<div id="contact" class="tokyo_tm_section">
  <div class="container">
    <div class="tokyo_tm_contact">
      <div class="tokyo_tm_title">
        <div class="title_flex">
          <div class="left">
            <span>Contact</span>
            <h3>{{ $pageTitle }}</h3>
          </div>
        </div>
      </div>
      <div class="map_wrap">
        <div class="mapouter">
          <div class="gmap_canvas">
            @isset($googleMap)
              <iframe width="100%" height="355" id="gmap_canvas" src="{{ $googleMap }}" frameborder="0"
                scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
            @endisset

            <a wire:href="https://fmovies-online.net">fmovies</a><br>
            <style>
              .mapouter {
                position: relative;
                text-align: right;
                height: 355px;
                width: 100%;
              }
            </style>

            <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
            <style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 355px;
                width: 100%;
              }
            </style>
          </div>
        </div>

        <!-- Get your API here https://www.embedgooglemap.net -->

      </div>
      <div class="fields">
        <form action="/" method="post" class="contact_form" id="contact_form" autocomplete="off">
          <div class="returnmessage" data-success="Your message has been received, We will contact you soon.">
          </div>
          <div class="empty_notice"><span>{{ __('Пожалуйста, заполните поля') }}</span></div>
          <div class="first">
            <ul>
              <li>
                <input id="name" type="text" placeholder="Name">
              </li>
              <li>
                <input id="email" type="text" placeholder="Email">
              </li>
            </ul>
          </div>
          <div class="last">
            <textarea id="message" placeholder="Message"></textarea>
          </div>
          <div class="tokyo_tm_button" data-position="left">
            <a id="send_message" href="#">
              <span>{{ __('Отправить') }}</span>
            </a>
          </div>

          <!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

        </form>
      </div>
    </div>
  </div>
</div>
<!-- /CONTACT -->
