# Laravel

## Установка

    laravel new projectName

или через composer, в *пустой* папке проекта projectName, так лучше

    composer create-project laravel/laravel .

или для *старой версии*

    composer create-project laravel/laravel . "6.*"

## Дополнительные настройки

Рекомендуется затем воспользоваться готовыми конфигами, скопировать их в папку
с Laravel

Удаляем лишние зависимости из package.json, устанаваливаем оставшиеся

    npm i

### Устанавливаем новые зависимости

Настраиваем browserslist в package.json

    "browserslist": [
        "defaults",
        "not IE 11"
    ]

Или в файле .browserslistrc

    # Browsers that we support

    defaults
    not IE 11
    maintained node versions

Добавляем зависимости composer (Ide Helper, Debug bar).
Не обязательно, можно установить отдельно.

    composer install

Публикация заготовок и пр.

    php artisan vendor:publish
    php artisan stub:publish
    php artisan storage:link

 Можно раскомментировать в app\Providers\RouteServiceProvider.php стр. 29 для
 использования старых ссылок на контроллер

    // protected $namespace = 'App\\Http\\Controllers';

## Laravel Packages Must Have

### Laravel Breeze [https://laravel.com/docs/10.x/starter-kits#laravel-breeze]

    composer require laravel/breeze --dev
    php artisan breeze:install

    php artisan migrate
    npm install
    npm run dev

### Debug bar

    composer require barryvdh/laravel-debugbar --dev
    php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"

APP_DEBUG=true

### Larastan [https://github.com/nunomaduro/larastan]

    composer require nunomaduro/larastan:^2.0 --dev

### Laravel Pint [https://laravel.com/docs/10.x/pint]

    composer require laravel/pint --dev

Запуск командами на выбор

    ./vendor/bin/pint
    ./vendor/bin/pint app/Models
    ./vendor/bin/pint app/Models/User.php

### spatie/laravel-login-link [https://github.com/spatie/laravel-login-link]

    composer require spatie/laravel-login-link
    php artisan vendor:publish --tag="login-link-config"

    @env('local')
      <div class="space-y-2">
          <x-login-link email="admin@spatie.be" label="Login as admin"/>
          <x-login-link email="user@spatie.be" label="Login as regular user"/>
      </div>
    @endenv

## Faker [https://github.com/fzaninotto/Faker]

    php artisan make:factory PostFactory

## Tailwindcss

    npm install -D tailwindcss postcss postcss-import autoprefixer
    npx tailwindcss init

### В resources/css/app.css добавить

    @tailwind base;
    @tailwind components;
    @tailwind utilities;

При использовании плагина postcss-import импорт можно организовать так:

  @import "tailwindcss/base";
  @import "./custom-base-styles.css";

  @import "tailwindcss/components";
  @import "./custom-components.css";

  @import "tailwindcss/utilities";
  @import "./custom-utilities.css";

### Изменить tailwind.config.js

    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

### Добавить postcss.config.js

    module.exports = {
        plugins: {
          'postcss-import': {},
          'tailwindcss/nesting': {},
          tailwindcss: {},
          autoprefixer: {},
        }
    }

Внимание! tailwindcss и autoprefixer в самом конце!

## Vite

Добавить в шаблон директиву

    @vite(['resources/css/app.css', 'resources/js/app.js'])

вместо ссылок на css и js

### Изменить vite.config.js

    import laravel, { refreshPaths } from 'laravel-vite-plugin';
    import { defineConfig } from 'vite';

    export default defineConfig({
        plugins: [
            laravel({
                input: [
                    'resources/css/app.css',
                    'resources/js/app.js',
                ],
                refresh: [
                    ...refreshPaths,
                    'app/Http/Livewire/**',
                    'app/Filament/**',
                ],
            }),
        ],
        css: {
            devSourcemap: true,
        },
    });

## Русификация (laravel-lang) [https://publisher.laravel-lang.com/]

Официальная справка [https://laravel.com/docs/9.x/localization#main-content]

  composer require laravel-lang/publisher laravel-lang/lang laravel-lang/attributes laravel-lang/http-statuses --dev
  php artisan lang:add ru

В файле config/app.php изменить
  'locale' => 'ru',
  'faker_locale' => 'ru_RU',

Извлечение перевода __('I love programming.')

После обновления
  php artisan lang:update

## Laravel Ide Helper [https://github.com/barryvdh/laravel-ide-helper]

    composer require --dev barryvdh/laravel-ide-helper

### Laravel Ide Helper старая версия для laravel 6

    composer require --dev barryvdh/laravel-ide-helper 2.8

#### в VS Code

*Save any .php file to generate facade helper files*
*Save any modal file to generate model helper files*

Check out this Laracasts video
[https://laracasts.com/series/how-to-be-awesome-in-phpstorm/episodes/15]
for a quick introduction/explanation!

    php artisan ide-helper:generate - PHPDoc generation for Laravel Facades
    php artisan ide-helper:models - PHPDocs for models
    php artisan ide-helper:meta - PhpStorm Meta file

You can configure your composer.json to do this each time you update your
dependencies:

    "scripts": {
        "post-update-cmd": [
            "Illuminate\\Foundation\\ComposerScripts::postUpdate",
            "@php artisan ide-helper:generate"
        ]
    },

## Routs

    GET         /photos/create         create   photos.create
    GET         /photos                index    photos.index
    POST        /photos                store    photos.store
    GET         /photos/{photo}        show     photos.show
    GET         /photos/{photo}/edit   edit     photos.edit
    PUT/PATCH   /photos/{photo}        update   photos.update

## Livewire [https://laravel-livewire.com/docs/2.x/quickstart]

    composer require livewire/livewire

Включите JavaScript (на каждой странице, которая будет использовать Livewire).

    ...
        @livewireStyles
    </head>
    <body>
        ...

        @livewireScripts
    </body>
    </html>

Выполните следующую команду для создания нового компонента Livewire counter.

    php artisan make:livewire counter

Вы можете вставить <livewire:counter /> в любом месте

## Breadcrumbs [https://github.com/diglactic/laravel-breadcrumbs]

    composer require diglactic/laravel-breadcrumbs
    php artisan vendor:publish --tag=breadcrumbs-views

Create a file called routes/breadcrumbs.php that looks like this:

    <?php // routes/breadcrumbs.php

    // Note: Laravel will automatically resolve `Breadcrumbs::` without
    // this import. This is nice for IDE syntax and refactoring.
    use Diglactic\Breadcrumbs\Breadcrumbs;

    // This import is also not required, and you could replace `BreadcrumbTrail $trail`
    // with `$trail`. This is nice for IDE type checking and completion.
    use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

    // Home
    Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
    });

    // Home > Blog
    Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog'));
    });

    // Home > Blog > [Category]
    Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
    });

Вывод таким образом
resources/views/home.blade.php
    {{ Breadcrumbs::render('home') }}
resources/views/categories/show.blade.php
    {{ Breadcrumbs::render('category', $category) }}

## Wire Elements Modal [https://github.com/wire-elements/modal]

    composer require wire-elements/modal

Add the Livewire directive @livewire('livewire-ui-modal') directive to your template.
Livewire Elements Modal requires Alpine.js

You can run php artisan make:livewire EditUser to make the initial Livewire component.
Open your component class and make sure it extends the ModalComponent class:

    <?php

    namespace App\Http\Livewire;

    use LivewireUI\Modal\ModalComponent;

    class EditUser extends ModalComponent
    {
        public function render()
        {
          return view('livewire.edit-user');
        }
    }

To open a modal you will need to emit an event.

<!-- Outside of any Livewire component -->
    <button onclick="Livewire.emit('openModal', 'edit-user')">Edit User</button>

<!-- Inside existing Livewire component -->
    <button wire:click="$emit('openModal', 'edit-user')">Edit User</button>

<!-- Taking namespace into account for component Admin/Actions/EditUser -->
    <button wire:click="$emit('openModal', 'admin.actions.edit-user')">Edit User</button>

## Laravel Shopping Cart [https://github.com/hardevine/LaravelShoppingcart]

    composer require hardevine/shoppingcart

Open your config/app.php file.
Add a new line to the providers array:

    Gloudemans\Shoppingcart\ShoppingcartServiceProvider::class

And optionally add a new line to the aliases array:

    'Cart' => Gloudemans\Shoppingcart\Facades\Cart::class,

Опубликовать конфигурацию и миграцию

    php artisan vendor:publish --provider="Gloudemans\Shoppingcart\ShoppingcartServiceProvider" --tag="config"
    php artisan vendor:publish --provider="Gloudemans\Shoppingcart\ShoppingcartServiceProvider" --tag="migrations"

    php artisan migrate

Now you're ready to start using the shoppingcart in your application.

## Livewire Flash

[https://github.com/mattlibera/livewire-flash]

## Vue 2 и bootstrap

    composer require laravel/ui
    php artisan ui bootstrap --auth
    php artisan ui vue

    npm install
    npm run dev  (повторно при ошибке)

при очередной ошибке придется выполнить

    npm update vue-loader

### Vuex

    npm install vuex --save

            $store
state       state
action      dispatch
mutations   commit
getters     getters

## Interia.js [https://inertiajs.com/] Vue 3

    composer require inertiajs/inertia-laravel

Next, setup the root template app.blade.php

    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        <script src="{{ mix('/js/app.js') }}" defer></script>
        @inertiaHead
      </head>
      <body>
        @inertia
      </body>
    </html>

Next, setup the Inertia middleware

    php artisan inertia:middleware

Once generated, register the HandleInertiaRequests middleware in your
App\Http\Kernel, as the last item in your web middleware group.

    'web' => [
        // ...
        \App\Http\Middleware\HandleInertiaRequests::class,
    ],

затем создаем контроллер

    return inertia()

и route

следующий шаг

    npm install @inertiajs/inertia @inertiajs/inertia-vue3
    npm install vue

Next, update your main JavaScript file to boot your Inertia app. All we're doing
here is initializing the client-side framework with the base Inertia component.

    import { createInertiaApp } from '@inertiajs/inertia-vue3';
    import { createApp, h } from 'vue';
    import Layout from './Shared/Layout.vue';

    createInertiaApp({
      resolve: (name) => {
        const page = require(`./Pages/${name}`).default;
        page.layout = page.layout || Layout;

        return page;
      },
      setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
          .use(plugin)
          .mixin({ methods: { route: window.route } })
          .mount(el);
      },
    });

### Ziggy – Use your Laravel routes in JavaScript [https://github.com/tighten/ziggy]

Add the @routes Blade directive to your main layout (before your application's
JavaScript), and the route() helper function will now be available globally!

### CORS не работает, все равно ошибка (если через browserSync)

Create Cors middleware

    php artisan make:middleware Cors

Middleware created successfully.

app/Http/Middleware/Cors.php

    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }

app/Http/Kernel.php $routedMiddleware array add

    'cors' => \App\Http\Middleware\Cors::class,

Route/api.php

    Route::group(['middleware' => 'cors'], function () {

        Route::get('/v1/employees/{id?}', 'Employees@index');
        Route::post('/v1/employees', 'Employees@store');
        Route::post('/v1/employees/{id}', 'Employees@update');
        Route::delete('/v1/employees/{id}', 'Employees@destroy');

    });

## JWT Authentication [https://jwt-auth.readthedocs.io/en/develop/quick-start/]

    composer require tymon/jwt-auth:"dev-develop"
    php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
    php artisan jwt:secret

Update your User model
Configure Auth guard [config/auth.php]
Create the AuthController
Add some basic authentication routes in [routes/api.php]:

    Route::group([

        'middleware' => 'api',
        'prefix' => 'auth'

    ], function ($router) {

        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');

    });

## Тесты

Добавить .env.testing, где указать

    APP_ENV=testing

и путь к базе данных sqlite

    DB_CONNECTION=sqlite
    DB_DATABASE=database/database_tests.sqlite

Подготовить базу для тестирования (фабрики должны быть сделаны!)

    php artisan migrate --seed --env=testing

В файлах тестов использовать

    use DatabaseTransactions;

Для использования постоянно чистой базы -

    use RefreshDatabase; // в классе теста
    $this->seed();       // в каждой функции

## Bootstrap вместо Tailwindcss

    composer require laravel/ui
    php artisan ui bootstrap

    php artisan ui bootstrap --auth

Обратите внимание, что мы используем параметр auth, который помимо установки
Bootstrap и базового каркаса авторизации также добавит генераторы страниц
для входа и регистрации.

## Пагинация

[https://laravel.com/docs/8.x/pagination#customizing-the-pagination-view]

    php artisan vendor:publish --tag=laravel-pagination

Эта команда поместит представления в resources/views/vendor/pagination
каталог вашего приложения. tailwind.blade.php в этом каталоге соответствует
представлению разбиения на страницы по умолчанию. Вы можете отредактировать этот
файл, чтобы изменить HTML-код разбиения на страницы.

Если вы хотите назначить другой файл в качестве представления разбиения
на страницы по умолчанию, вы можете вызвать пагинатор defaultView
и defaultSimpleView методы в boot методе вашего App\Providers\AppServiceProvider
класса:

    public function boot()
    {
        Paginator::defaultView('view-name');

        Paginator::defaultSimpleView('view-name');
    }

## Voyager

    composer require tcg/voyager
    php artisan voyager:install

или

     php artisan voyager:install --with-dummy

*email: <admin@admin.com>*
*password: password*

If you wish to create a new admin user you can pass the --create flag, like so:

    php artisan voyager:admin your@email.com --create

### Advanced

This section is meant for users who are installing Voyager on an already
existing Laravel installation or for users who want to perform a manual install.

You can do that by running the following commands:

    php artisan vendor:publish --provider="TCG\Voyager\VoyagerServiceProvider"
    php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"

Next, call

    php artisan migrate

to migrate all Voyager table.
If you want to change migrations, for example to use a different table for
users, don't migrate. Instead copy Voyagers migrations to database/migrations,
make your changes, turn off the config option database.autoload_migrations and
then migrate.
Now, open your User-Model (usually app/User.php) and make the class
extend \TCG\Voyager\Models\User instead of Authenticatable.

    class User extends \TCG\Voyager\Models\User
    {
        // ...
    }

The next step is to add Voyagers routes to your routes/web.php file:

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });

Now run

    php artisan db:seed --class=VoyagerDatabaseSeeder

to seed some necessary data to your database, and

    php artisan storage:link

to create the storage symlink to your public folder.

After that, run

    composer dump-autoload

to finish your installation!
