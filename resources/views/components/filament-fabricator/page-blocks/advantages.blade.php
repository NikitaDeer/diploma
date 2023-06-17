@aware([
'page',
'title',
'content',
'cards'
])

<section class="bg-gray-50">
  <div class="mx-auto max-w-screen-xl py-8 px-10 sm:py-16 lg:px-6">

    <div class="mb-8 max-w-screen-md lg:mb-16">
      <h2 class="mb-4 text-4xl font-extrabold text-gray-900">{{ $title }}</h2>
      <p class="text-gray-500 sm:text-xl">{!! $content !!}</p>
    </div>

    <div class="space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0 lg:grid-cols-3">
      @foreach ($cards as $card)
      <div>
        <div
          class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-blue-100 font-bold text-blue-600 lg:h-12 lg:w-12">
          {{ $loop->iteration }}
        </div>
        <h3 class="mb-2 text-xl font-bold">{{ $card['second_title'] }}</h3>
        <p class="text-gray-500">{!! $card['description'] !!}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>
