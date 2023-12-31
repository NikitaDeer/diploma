<section class="bg-gray-50">
  <div class="mx-auto max-w-screen-xl py-8 px-10 sm:py-16 lg:px-6">
    <div class="space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0 lg:grid-cols-3">
      @forelse ($services as $service)
      <a class="flex flex-col justify-between" href="{{ route('orders.show', ['order' => $service->id]) }}">
        <div
          class="mb-4 flex h-10 w-15 items-center justify-center rounded-full bg-blue-100 font-bold text-blue-600 lg:h-12 lg:w-20 gap-1">
          <span> {{ $service->price }} </span>
          <span> &#8381;</span>
        </div>
        <h3 class="mb-2 text-xl font-bold flex-grow">{{ $service->name }}</h3>
        <p class="text-gray-500 flex-grow">{!! $service->description !!}</p>
      </a>
      @empty
      <x-site.no-items />
      @endforelse
    </div>
  </div>
</section>
