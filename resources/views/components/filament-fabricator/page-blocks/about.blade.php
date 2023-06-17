@aware([
'page',
'title',
'photo1',
'photo2',
'content',
'content2'
])

<section class="bg-white">
  <div class="mx-auto max-w-screen-xl items-center gap-16 py-8 px-10 lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
    <div class="font-light text-gray-500 sm:text-lg">
      <h2 class="mb-4 text-4xl font-extrabold text-gray-900">{{ $title }}</h2>
      <p class="mb-4">{!! $content !!}</p>
      <p>{!! $content2 !!}</p>
    </div>
    <div class="mt-8 grid grid-cols-2 gap-4">
      <x-curator-glider class="w-full rounded-lg" :media="$photo1" loading="lazy" />
      <x-curator-glider class="mt-4 w-full rounded-lg lg:mt-10" :media="$photo2" loading="lazy" />
    </div>
</section>