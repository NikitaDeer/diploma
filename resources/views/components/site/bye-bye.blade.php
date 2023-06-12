    <section class="bg-white">
      <div class="mx-auto max-w-screen-xl py-8 px-10 sm:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
          <h2 class="mb-4 text-4xl font-extrabold leading-tight text-gray-900">Мы Вам позвоним!
          </h2>
          <p class="mb-6 font-light text-gray-500 md:text-lg">После того как вы оставите номер телефона, мы обязательно
            позвоним.</p>

          {{-- кнопка позвоните мне --}}
          <a href="{{ route('orders.create') }}"
            class="mr-2 mb-2 rounded-lg bg-blue-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-700">Консультация</a>
        </div>
      </div>
    </section>
