@aware([
'page',
'title',
'content',
'content2'
])

<section class="bg-white">
  <div class="mx-auto max-w-screen-xl py-8 px-10 lg:py-16 lg:px-6">
    <div class="max-w-screen-lg text-gray-500 sm:text-lg">
      <h2 class="mb-4 text-4xl font-bold text-gray-900">{{ $title }}</h2>
      <p class="mb-4 font-light">{!! $content !!}</p>
      <p class="mb-4 font-medium">{!! $content2 !!}</p>
    </div>
  </div>
</section>