<section class="bg-gray-50">
  <div class="mx-auto max-w-screen-xl py-8 px-10 sm:py-16 lg:px-6">
    <div class="space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0 lg:grid-cols-3">
      @forelse ($services as $service)
        <div>
          <div
            class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-blue-100 font-bold text-blue-600 lg:h-12 lg:w-12">
            {{ $loop->iteration }}
          </div>
          <a href={{ route('orders.create') }}><h3 class="mb-2 text-xl font-bold">{{ $service->name }}</h3></a>
          <h4 class="mb-2 text-xs font-bold">{{ $service->price }} &#8381;</h4>
          <p class="text-gray-500">{!! $service->description !!}</p>
        </div>
      @empty
        <x-site.no-items />
      @endforelse
    </div>
  </div>
</section>
