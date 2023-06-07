<x-guest-layout>
  <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
      <x-input-label for="name" :value="__('Имя')" />
      <x-text-input id="name" class="mt-1 block w-full" type="text" name="name" :value="old('name')" required
        autofocus autocomplete="name" />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div class="mt-4">
      <x-input-label for="surname" :value="__('Фамилия')" />
      <x-text-input id="surname" class="mt-1 block w-full" type="text" name="surname" :value="old('surname')" required
        autofocus autocomplete="surname" />
      <x-input-error :messages="$errors->get('surname')" class="mt-2" />
    </div>

    <div class="mt-4">
      <x-input-label for="patronymic" :value="__('Отчество')" />
      <x-text-input id="patronymic" class="mt-1 block w-full" type="text" name="patronymic" :value="old('patronymic')"
        required autofocus autocomplete="patronymic" />
      <x-input-error :messages="$errors->get('patronymic')" class="mt-2" />
    </div>

    <!-- Phone number -->
    <div class="mt-4">
      <x-input-label for="phone" :value="__('Номер телефона')" />
      <x-text-input id="phone" class="mt-1 block w-full" type="text" name="phone" :value="old('phone')" required
        autocomplete="username" />
      <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
      <x-input-label for="email" :value="__('Электронная почта')" />
      <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required
        autocomplete="username" />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
      <x-input-label for="password" :value="__('Пароль')" />

      <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required
        autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
      <x-input-label for="password_confirmation" :value="__('Подтвердите пароль')" />

      <x-text-input id="password_confirmation" class="mt-1 block w-full" type="password" name="password_confirmation"
        required autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="mt-4 flex items-center justify-end">
      <a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
        href="{{ route('login') }}">
        {{ __('Уже есть аккаунт?') }}
      </a>

      <x-primary-button class="ml-4">
        {{ __('Зарегистрироваться') }}
      </x-primary-button>
    </div>
  </form>
</x-guest-layout>
