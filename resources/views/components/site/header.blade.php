<header>
  <nav class="border-gray-200 bg-white px-4 py-2.5 lg:px-6">
    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between">
      <a href="https://flowbite.com" class="flex items-center">
        {{-- <img src="сюда лого" class="mr-3 h-6 sm:h-9" alt="Lorem Logo" /> --}}
        <span class="self-center whitespace-nowrap text-xl font-semibold">Lorem ipsum!</span>
      </a>
      <div class="flex items-center lg:order-2">
        @guest
          <a href="{{ route('login') }}"
            class="mr-2 rounded-lg px-5 py-2.5 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:outline-none focus:ring-4 focus:ring-gray-300">Log
            in</a>

          <a href="{{ route('register') }}"
            class="mr-2 rounded-lg bg-blue-500 px-5 py-2.5 text-sm font-bold text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-700">Register</a>
        @endguest

        @auth
          <form method="POST"
            class="mr-2 rounded-lg px-5 py-2.5 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:outline-none focus:ring-4 focus:ring-gray-300"
            action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
              onclick="event.preventDefault();
                                        this.closest('form').submit();">
              {{ __('Log Out') }}
            </x-responsive-nav-link>
          </form>
          {{-- <a href="{{ route('logout') }}"
            class="mr-2 rounded-lg px-5 py-2.5 text-sm font-medium text-red-800 hover:bg-gray-50 focus:outline-none focus:ring-4 focus:ring-gray-300">Logout</a> --}}
        @endauth

        <button data-collapse-toggle="mobile-menu-2" type="button"
          class="ml-1 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 lg:hidden"
          aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="hidden w-full items-center justify-between lg:order-1 lg:flex lg:w-auto" id="mobile-menu-2">
        <ul class="mt-4 flex flex-col font-medium lg:mt-0 lg:flex-row lg:space-x-8">
          <li>
            <a href="#"
              class="bg-primary-700 lg:text-primary-700 block rounded py-2 pr-4 pl-3 text-gray-700 lg:bg-transparent lg:p-0"
              aria-current="page">Home</a>
          </li>
          <li>
            <a href="#"
              class="lg:hover:text-primary-700 block border-b border-gray-100 py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 lg:border-0 lg:p-0 lg:hover:bg-transparent">Company</a>
          </li>
          <li>
            <a href="#"
              class="lg:hover:text-primary-700 block border-b border-gray-100 py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 lg:border-0 lg:p-0 lg:hover:bg-transparent">Marketplace</a>
          </li>
          <li>
            <a href="#"
              class="lg:hover:text-primary-700 block border-b border-gray-100 py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 lg:border-0 lg:p-0 lg:hover:bg-transparent">Features</a>
          </li>
          <li>
            <a href="#"
              class="lg:hover:text-primary-700 block border-b border-gray-100 py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 lg:border-0 lg:p-0 lg:hover:bg-transparent">Team</a>
          </li>
          <li>
            <a href="#"
              class="lg:hover:text-primary-700 block border-b border-gray-100 py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 lg:border-0 lg:p-0 lg:hover:bg-transparent">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
