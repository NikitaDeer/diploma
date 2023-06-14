<section class="bg-white">
  {{-- @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
  </div>
  @endif --}}

  {{-- todo поменять сообщение об успехе --}}
  @if (session('success'))
  <div id="notification" class="fixed top-0 left-0 z-50 flex h-screen w-screen items-center justify-center"
    style="background-color: rgba(0, 0, 0, .5);">
    <div class="rounded bg-white py-16 px-32 shadow-lg">
      <p class="text-black">{{ session('success') }}</p>
    </div>
  </div>

  <script>
    setTimeout(function() {
        const notification = document.getElementById('notification');
        let opacity = 1;
        const timer = setInterval(function() {
          if (opacity <= 0.1) {
            clearInterval(timer);
            notification.style.display = 'none';
          }
          notification.style.opacity = opacity;
          notification.style.filter = 'alpha(opacity=' + opacity * 100 + ")";
          opacity -= opacity * 0.1;
        }, 50);
      }, 1000);
  </script>
  @endif


  <div class="mx-auto grid max-w-screen-xl px-10 py-8 lg:grid-cols-12 lg:gap-8 lg:py-16 lg:px-6 xl:gap-0">
    <div class="mr-auto place-self-center lg:col-span-7">
      @if ($page)
      <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl">
        {{ $page->FirstTitle }}
      </h1>
      <p class="mb-6 max-w-2xl font-light text-gray-500 md:text-lg lg:mb-8 lg:text-xl">
        {!! $page->content !!}
      </p>
      @else
      <x-site.no-content />
      @endif
      {{-- кнопка позвоните мне. письмо на электронку врача --}}
      @guest
      <a href="#"
        class="mr-3 inline-flex items-center justify-center rounded-lg bg-blue-500 py-3 px-5 text-center text-base font-medium text-white hover:bg-blue-700 focus:ring-4 focus:ring-blue-700">
        Позвоните мне!
      </a>
      @endguest

      @auth
      <a href="{{ route('orders.create') }}"
        class="mr-3 inline-flex items-center justify-center rounded-lg bg-blue-500 py-3 px-5 text-center text-base font-medium text-white hover:bg-blue-700 focus:ring-4 focus:ring-blue-700">
        Оставить заявку
      </a>
      @endauth

      @can('view', auth()->user())
      <a href="/admin">Перейти в админ панель</a>
      @endcan

    </div>
    <div class="hidden lg:col-span-5 lg:mt-0 lg:flex">
      @if ($page)
      <img class="rounded-full" src="{{ asset($page->main_photo_path) }}" alt="Тут Доктор">
      @else
      <x-site.no-content />
      @endif
    </div>
  </div>
</section>