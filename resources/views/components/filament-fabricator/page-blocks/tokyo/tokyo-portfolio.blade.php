@aware(['page'])
<div class="tokyo_tm_portfolio_titles"></div>
<!-- PORTFOLIO -->
<div id="portfolio" class="tokyo_tm_section">
  <div class="container">
    <div class="tokyo_tm_portfolio">
      <div class="tokyo_tm_title">
        <div class="title_flex">
          <div class="left">
            <span>Portfolio</span>
            <h3>Creative Portfolio</h3>
          </div>
          <div class="portfolio_filter">
            <ul>
              <li><a href="#" class="current" data-filter="*">All</a></li>
              <li><a href="#" data-filter=".vimeo">Vimeo</a></li>
              <li><a href="#" data-filter=".youtube">Youtube</a></li>
              <li><a href="#" data-filter=".soundcloud">Soundcloud</a></li>
              <li><a href="#" data-filter=".image">Image</a></li>
              <li><a href="#" data-filter=".detail">Detail</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="list_wrapper">
        <ul class="portfolio_list gallery_zoom">
          <li class="vimeo">
            <div class="inner">
              <div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Teresa Butler" data-category="Vimeo">
                <a class="popup-vimeo" href="https://vimeo.com/337293658">
                  <img src="{{ asset('storage/tokyo/img/thumbs/1-1.jpg') }}" alt="" />
                  <div class="abs_image" data-img-url="{{ asset('storage/tokyo/img/portfolio/5.jpg') }}"></div>
                </a>
              </div>
            </div>
          </li>
          <li class="youtube">
            <div class="inner">
              <div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Ashley Flores" data-category="Youtube">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                  <img src="{{ asset('storage/tokyo/img/thumbs/1-1.jpg') }}" alt="" />
                  <div class="abs_image" data-img-url="{{ asset('storage/tokyo/img/portfolio/6.jpg') }}"></div>
                </a>
              </div>
            </div>
          </li>
          <li class="soundcloud">
            <div class="inner">
              <div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Derek Smith" data-category="Soundcloud">
                <a class="soundcloude_link mfp-iframe audio"
                  href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471954807&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true">
                  <img src="{{ asset('storage/tokyo/img/thumbs/1-1.jpg') }}" alt="" />
                  <div class="abs_image" data-img-url="{{ asset('storage/tokyo/img/portfolio/4.jpg') }}"></div>
                </a>
              </div>
            </div>
          </li>
          <li class="image">
            <div class="inner">
              <div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Gloria Jenkins" data-category="Image">
                <a class="zoom" href="{{ asset('storage/tokyo/img/portfolio/3.jpg') }}">
                  <img src="{{ asset('storage/tokyo/img/thumbs/1-1.jpg') }}" alt="" />
                  <div class="abs_image" data-img-url="{{ asset('storage/tokyo/img/portfolio/3.jpg') }}"></div>
                </a>
              </div>
            </div>
          </li>
          <li class="detail">
            <div class="inner">
              <div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Selena Gomez" data-category="Detail">
                <a class="popup_info" href="#">
                  <img src="{{ asset('storage/tokyo/img/thumbs/1-1.jpg') }}" alt="" />
                  <div class="abs_image" data-img-url="{{ asset('storage/tokyo/img/portfolio/7.jpg') }}"></div>
                </a>
              </div>
            </div>

            <!-- Portfolio Popup Start -->
            <div class="details_all_wrap">
              <div class="popup_details">
                <div class="main_details">
                  <div class="textbox">
                    <p>We live in a world where we need to move quickly and iterate on our ideas as flexibly
                      as possible. Building mockups strikes the ideal balance between true-life representation
                      of the end product and ease of modification.</p>
                    <p>Mockups are useful both for the creative phase of the project - for instance when
                      you're trying to figure out your user flows or the proper visual hierarchy - and the
                      production phase when they will represent the target product. Making mockups a part of
                      your creative and development process allows you to quickly and easily ideate.</p>
                  </div>
                  <div class="detailbox">
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
                  </div>
                </div>
                <div class="additional_images">
                  <ul>
                    <li>
                      <div class="list_inner">
                        <div class="my_image">
                          <img src="{{ asset('storage/tokyo/img/thumbs/4-2.jpg') }}" alt="" />
                          <div class="main" data-img-url="{{ asset('storage/tokyo/img/portfolio/1.jpg') }}"></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="list_inner">
                        <div class="my_image">
                          <img src="{{ asset('storage/tokyo/img/thumbs/4-2.jpg') }}" alt="" />
                          <div class="main" data-img-url="{{ asset('storage/tokyo/img/portfolio/2.jpg') }}"></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="list_inner">
                        <div class="my_image">
                          <img src="{{ asset('storage/tokyo/img/thumbs/4-2.jpg') }}" alt="" />
                          <div class="main" data-img-url="{{ asset('storage/tokyo/img/portfolio/3.jpg') }}"></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /Portfolio Popup End -->

          </li>
          <li class="detail">
            <div class="inner">
              <div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Ave Simone" data-category="Detail">
                <a class="popup_info" href="#">
                  <img src="{{ asset('storage/tokyo/img/thumbs/1-1.jpg') }}" alt="" />
                  <div class="abs_image" data-img-url="{{ asset('storage/tokyo/img/portfolio/8.jpg') }}"></div>
                </a>
              </div>
            </div>

            <!-- Portfolio Popup Start -->
            <div class="details_all_wrap">
              <div class="popup_details">
                <div class="main_details">
                  <div class="textbox">
                    <p>We live in a world where we need to move quickly and iterate on our ideas as flexibly
                      as possible. Building mockups strikes the ideal balance between true-life representation
                      of the end product and ease of modification.</p>
                    <p>Mockups are useful both for the creative phase of the project - for instance when
                      you're trying to figure out your user flows or the proper visual hierarchy - and the
                      production phase when they will represent the target product. Making mockups a part of
                      your creative and development process allows you to quickly and easily ideate.</p>
                  </div>
                  <div class="detailbox">
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
                  </div>
                </div>
                <div class="additional_images">
                  <ul>
                    <li>
                      <div class="list_inner">
                        <div class="my_image">
                          <img src="{{ asset('storage/tokyo/img/thumbs/4-2.jpg') }}" alt="" />
                          <div class="main" data-img-url="{{ asset('storage/tokyo/img/portfolio/1.jpg') }}"></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="list_inner">
                        <div class="my_image">
                          <img src="{{ asset('storage/tokyo/img/thumbs/4-2.jpg') }}" alt="" />
                          <div class="main" data-img-url="{{ asset('storage/tokyo/img/portfolio/2.jpg') }}"></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="list_inner">
                        <div class="my_image">
                          <img src="{{ asset('storage/tokyo/img/thumbs/4-2.jpg') }}" alt="" />
                          <div class="main" data-img-url="{{ asset('storage/tokyo/img/portfolio/3.jpg') }}"></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /Portfolio Popup End -->

          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- /PORTFOLIO -->
