<section class="bg-white">
  <div class="mx-auto grid max-w-screen-xl py-8 px-4 lg:grid-cols-12 lg:gap-8 lg:py-16 xl:gap-0">
    <div class="mr-auto place-self-center lg:col-span-7">
      <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl">
        {{ $page->FirstTitle }}
      </h1>
      <p class="mb-6 max-w-2xl font-light text-gray-500 md:text-lg lg:mb-8 lg:text-xl">
        {!! $page->content !!}
      </p>

      {{-- кнопка позвоните мне. письмо на электронку врача --}}
      @guest
        <a href="#"
          class="mr-3 inline-flex items-center justify-center rounded-lg bg-blue-500 py-3 px-5 text-center text-base font-medium text-white hover:bg-blue-700 focus:ring-4 focus:ring-blue-700">
          Позвоните мне!
        </a>
      @endguest

      @auth
        <a href="{{ route('application') }}"
          class="mr-3 inline-flex items-center justify-center rounded-lg bg-blue-500 py-3 px-5 text-center text-base font-medium text-white hover:bg-blue-700 focus:ring-4 focus:ring-blue-700">
          Оставить заявку
        </a>
      @endauth

      @can('view', auth()->user())
        <a href="/admin">Перейти в админ панель</a>
      @endcan

    </div>
    <div class="hidden lg:col-span-5 lg:mt-0 lg:flex">
      <img class="rounded-full" src="storage/{{ $page->main_photo_path }}" alt="Тут Доктор">
    </div>
  </div>
</section>
