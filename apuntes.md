# Subir archivos a la red con Laravel y almacenar sus datos en MySQL
**GitHub**: https://github.com/petrix12/file.git

## Creación del proyecto:
1. Crear proyecto: 
    + $ laravel new file
3. Ir a phpMyAdmin y crear base de datos con el nombre **file**.
4. Establecer los siguientes valores en el archivo de variables de entorno .env:
    ```txt
    APP_NAME="File Soluciones++"
    ≡
    APP_URL=http://127.0.0.1:8000
    ≡
    ```
    **Nota**: en local deberemos levantar nuestro proyecto con el servidor de php artisan:
    + $ php artisan serve
5. Instalar Laravel Breeze:
   + $ composer require laravel/breeze --dev
   + $ php artisan breeze:install
   + $ npm install
   + $ npm run dev
   + $ php artisan migrate

## Personalización del proyecto:
1. Personalizar vista **welcome** en **resources\views\welcome.blade.php**:
    ```php
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Files | Soluciones++</title>
            <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            <!-- Styles -->
            <style>
                /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            </style>

            <style>
                body {
                    font-family: 'Nunito', sans-serif;
                }
            </style>
        </head>
        <body class="antialiased">
            <div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Almacenamiento</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar sesión</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarse</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <div class="container">
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-8">
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEifwlLRSm6XkHMSD_3ZS18OhzoF5pY7dpKVuPt5ViCvAxBDbqvKnSzQYMl39y83DMwBNpFrqWDU6Jz5VAF7gmL3gOCojWmfCOjWGiRx6y5iVSBP9dXAGCsHpgcjwPDZC_fBTO0uFuGJ0ylgE8koEv8C0DxxInz0-ilHyHKw6i3AOKSPOhsjJoP15BWOQQ=s954" alt="Logo Soluciones++" height="50">
                    </div>
                    
                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div class="grid grid-cols-1">
                            <div class="p-6">
                                <div class="flex items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="# {{-- Crear vista instructivo --}}" class="underline text-gray-900 dark:text-white">Instructivo</a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm embed-container">
                                        <iframe src="instructivo.html" width="100%" height="400"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
    ```
2. Seleccionar un favicon para la aplicación y almacenarlo en **public\favicon.ico**.
3. Crear documento HTML **public\instructivo.html**:
    ```html
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Instructivo | Soluciones++</title>
    </head>
    <body>
        ESTE DOCUMENTO SE REESCRIBIRÁ COMPLETAMENTE MÁS ADELANTE
    </body>
    </html>  
    ```
    **Nota**: si estas elaborando tu instructivo en formato Markdown puedes convertirlo a HTML en:
    + https://dillinger.io
4. Cambiar logo de la aplicación en **resources\views\components\application-logo.blade.php**:
    ```php
    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi6G3DYPhX_zU3sA_hSYxJ4DN_FW9jZOtVTnMPyGx4Po-hzAu2CiyY-LWhMIgNwud0uVrwVn0tBcEZvHqTtIDeIQA9zkYQguDXgB48jhNcpzgh-WIo6ZW9UW_PYGCrn4R2XInHdF1YxSP2kk1ldHlCTr_fDhzXpLnwNbhYJ5JMCcFfUFvW7x_NKJBPY6g=s314" alt="Logo Soluciones++">
    ```
5. Agregar CDN CSS de Bootstrap al **head** de la plantilla **resources\views\layouts\app.blade.php**:
    ```php
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    ```
8. En caso de que querer personalizar las vistas relacionadas con la autenticación de usuarios, estas se encuentran ubicadas en **resources\views\auth**.

## Subir proyecto a GitHub:
1. Ir a la página de GitHub e iniciar sesión:
    + https://github.com
2. Crear un nuevo repositorio y darle el nombre de **file**.
3. Abrir una terminal en la raíz de nuestro proyecto **file** en local y ejecutar:
    + $ git init
    + $ git add .
    + $ git commit -m "Primer commit"
    + $ git branch -M main
    + $ git remote add origin https://github.com/petrix12/file.git
    + $ git push -u origin main

## Deploy en Heroku:
1. Crear en la raíz del proyecto el archivo **Procfile** (sin extensión) para elegir un servidor apache en Heroku y también indicarle la ubicación del archivo **index.php**:
    ```txt
    web: vendor/bin/heroku-php-apache2 public/
    ```
2. Iniciar sesión en la página de Heroku e ir a Dashboard:
    + https://dashboard.heroku.com/apps
3. Crear un nuevo proyecto en **New** > **Create new app**:
    + Nombre: solucionespp-file
    **Nota**: Escoger un nombre de tu elección.
4. Ir a **Deploy** y dar clic en **GitHub**.
5. Clic en el botón **Connect to GitHub** e ingresar las credenciales.
6. Seleccionar el repositorio **petrix12/file** y presionar el botón **Connect**.
7. Para tener siempre la ultima actualización de **GitHub** de nuestro proyecto presionar el botón **Enable Automatic Deploys**.
8. Presionar el botón **Deploy Branch**.
9. Descargar e instalar Heroku CLI:
    + https://devcenter.heroku.com/articles/heroku-cli
    **Nota**: si no ejecuta desde VSC ejecutar:
    + $ Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy Unrestricted
10. Ir a la terminal del proyecto y ejecutar:
    1. Iniciar sesión en Heroku:
        + $ heroku login
    2. Víncular nuestro proyecto **file** con la aplicación de Heroku **solucionespp-file**:
        + $ git remote add heroku git.heroku.com/solucionespp-file.git
        + $ heroku git:remote -a solucionespp-file
    3. Registrar variables de entorno de la aplicación desde la terminal:
        + $ heroku config:add APP_NAME="File Soluciones++"
        + $ heroku config:add APP_ENV=production
        + $ heroku config:add APP_KEY=base64:+K2OTyzMC5qJ2OceRZtbEkHnuW7hxN8itZwYqW+BVEQ=
        + $ heroku config:add APP_DEBUG=true
        + $ heroku config:add APP_URL=https://solucionespp-file.herokuapp.com/
    4. Crear base de datos Postgre SQL desde la terminal:
        + $ heroku addons:create heroku-postgresql:hobby-dev
        + $ heroku pg:credentials:url
        **Nota**: la salida de la última línea de comando nos servirá para configurar las variables de entorno de la base de datos:
        ```txt
        »   Warning: heroku update available from 7.52.0 to 7.56.1.
        Connection information for default credential.
        Connection info string:
        "dbname=dcf4kqn86o0p64 host=ec2-34-197-105-186.compute-1.amazonaws.com port=5432 user=zsefyveumlxgjx password=b3e5638aef880fcc42f00083b6c0bbffe7b58e4e0002664b5660e7fe7b7c6d56 sslmode=require"
        Connection URL:
        postgres://zsefyveumlxgjx:b3e5638aef880fcc42f00083b6c0bbffe7b58e4e0002664b5660e7fe7b7c6d56@ec2-34-197-105-186.compute-1.amazonaws.com:5432/dcf4kqn86o0p64
        ```       
    5. Registrar variables de entorno de la base de datos desde la terminal:
        + $ heroku config:add DB_CONNECTION=pgsql
        + $ heroku config:add DB_HOST=ec2-34-197-105-186.compute-1.amazonaws.com
        + $ heroku config:add DB_PORT=5432
        + $ heroku config:add DB_DATABASE=dcf4kqn86o0p64
        + $ heroku config:add DB_USERNAME=zsefyveumlxgjx
        + $ heroku config:add DB_PASSWORD=b3e5638aef880fcc42f00083b6c0bbffe7b58e4e0002664b5660e7fe7b7c6d56 sslmode=require
    6. Ejecutar migraciones:
        + $ heroku run bash
        + ~ $ php artisan migrate
            - Do you really wish to run this command? (yes/no) [no]: yes
        + ~ $ exit
    7. Salir de Heroku:
        + $ heroku logout
    8. Desconectar con repositorio Heroku:
        + $ git remote rm heroku
**Nota**: La carga de nuestro proyecto en el servidor de Heroku puede tardar minutos, e incluso horas.

## Integrar SweetAlert
**URL**: https://github.com/realrashid/sweet-alert
1. Ejecutar:
    + $ composer require realrashid/sweet-alert
2. Agregar los servicios de **SweetAlert**  en la sección **providers** del archivo de configuración **config\app.php**:
    ```php
    'providers' => [
        /*
        * Package Service Providers...
        */
        RealRashid\SweetAlert\SweetAlertServiceProvider::class,

         /*
         * Application Service Providers...
         */
    ],
    ```
3. Agregar el facade de **SweetAlert**  en la sección **aliases** del archivo de configuración **config\app.php**:
    ```php
    'aliases' => [
        ≡
        'Alert' => RealRashid\SweetAlert\Facades\Alert::class,
    ],
    ```
4. Importar el facade de **SweetAlert** en la cabecera del controlador **app\Http\Controllers\FilesController.php**:
    ```php
    use RealRashid\SweetAlert\Facades\Alert;
    ```
5. Insertar el siguiente código en la sección **Page Content** de la plantilla **resources\views\layouts\app.blade.php**:
    ```php
    <!-- Page Content -->
    <main>
        {{ $slot }}
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    </main>
    ```
    **Nota**: si falla, reemplazar por:
    ```php
    <!-- Page Content -->
    <main>
        {{ $slot }}
        @include('sweetalert::alert')
    </main>
    ```
9. Realizar commit Integración SweetAlert:
    + $ git add .
    + $ git commit -m "Integración SweetAlert"
    + $ git push -u origin main

## Crear MVC (Modelo - Vista - Controlador) File:
1. Crear modelo **File** junto a su migración:
    + $ php artisan make:model File -m
2. Agregar campos **name** y **code_name** y la clave foránea **user_id** a la migración de la tabla **files** (database\migrations\2021_08_19_213814_create_files_table.php):
    ```php
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name');                 // Nombre del archivo
            $table->text('code_name');              // Nombre del archivo encriptado
            $table->unsignedBigInteger('user_id');  // Relación con los usuarios (clave foránea)
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }
    ```
3. Indicar campos de asignación masiva en el modelo **File** (app\Models\File.php):
    ```php
    ≡
    protected $fillable = [
        'name',
        'code_name',
        'user_id'
    ];
    ≡
    ```
4. Crear controlador que administre el modelo **File** con todos los métodos para hacer un CRUD:
    + $ php artisan make:controller FilesController -r
    **Nota**: Solamente trabajaremos con los métodos **index**, **create** y **store**.
5. Ejecutar migración: 
    + $ php artisan migrate
6. Importar el controlador **FilesController** en el archivo de rutas **routes\web.php**:
    ```php
    use App\Http\Controllers\FilesController;
    ```
7. Agregar las rutas para el CRUD File en **routes\web.php**:
    ```php
    Route::get('files', [FilesController::class, 'index'])->name('user.files.index');
    Route::post('upload', [FilesController::class, 'store'])->name('user.files.store');
    Route::get('files/{file}', [FilesController::class, 'show'])->name('user.files.show');
    Route::delete('delete/{file}', [FilesController::class, 'destroy'])->name('user.files.destroy');
    ```
8. Crear menú **Mis archivos** en la plantilla de navegación **resources\views\layouts\navigation.blade.php**:
    ```php
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    ≡
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    </div>

                    <!-- Mis archivos Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('user.files.index')" :active="request()->routeIs('user.files.index')">
                            Mis archivos
                        </x-nav-link>
                    </div>
                </div>
                ≡
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('user.files.index')" :active="request()->routeIs('user.files.index')">
                    Mis archivos
                </x-responsive-nav-link>
            </div>
            ≡
        </div>
    </nav>
    ```
9.  Modificar la vista **dashboard** (resources\views\dashboard.blade.php):
    ```php
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="card">
                        {{-- <div class="card-header">{{ __('Subir archivos') }}</div> --}}
                        <p class="text-xl m-2 text-gray-600">Subir archivos</p>
                        <form action="{{ route('user.files.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="files[]" multiple class="form-control" required>
                            <button type="submit" class="my-4 btn btn-secondary float-right">
                                Subir
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    ```
10. Crear enlace simbólico de public a storage:
    + $ php artisan storage:link
11. Importar el modelo **File** y los facades **Auth** y **Storage** en el controlador **app\Http\Controllers\FilesController.php**:
    ```php
    use App\Models\File;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Str;
    ```
12. Programar el método **index** del controlador **app\Http\Controllers\FilesController.php**:
    ```php
    public function index()
    {
        $files = File::whereUserId(Auth::id())->latest()->get();
        return view('index', compact('files'));
    }
    ```
13. Crear vista para el método **index** (resources\views\index.blade.php) del controlador **app\Http\Controllers\FilesController.php**:
    ```php
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mis archivos
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="card">
                        <h1 class="col-md-8 text-xl text-gray-600 m-2"><strong>Lista de archivos</strong></h1>
                        @if ($files->count())
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre del archivo</th>
                                        <th scope="col">Ruta</th>
                                        <th scope="col">Ver</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($files as $file)
                                    <tr>
                                        <th scope="row">{{ $file->id }}</th>
                                        <td>{{ $file->name }}</td>
                                        <td>{{ public_path() }}s</td>
                                        <td>
                                            <a href="{{ route('user.files.show',$file->code_name) }}" class="btn btn-sm btn-outline-secondary" target="_blank">Ver</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('user.files.destroy',$file->code_name) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p class="m-2">{{ auth()->user()->name }} no tienes archivos almacenados</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    ```
    **Nota**: Puedes seleccionar un modelo de tabla de bootstrap para el diseño del la vista index en:
    URL: https://getbootstrap.com
14. Programar el método **store** del controlador **app\Http\Controllers\FilesController.php**:
    ```php
    public function store(Request $request)
    {
        $max_size = (int)ini_get('upload_max_filesize') * 10240;
        $files = $request->file('files');
        $user_id = Auth::id();

        if($request->hasFile('files')){
            foreach($files as $file){
                //$fileName = Str::slug($file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
                $fileName = encrypt($file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
                if(Storage::putFileAs('/public/' . $user_id . '/' , $file, $fileName)){
                    File::create([
                        'name' => $file->getClientOriginalName(),
                        'code_name' => $fileName,
                        'user_id' => $user_id
                    ]);
                }
            }
            Alert::success('¡Éxito!', 'Se ha subido el archivo');
            return back();
        }else{
            Alert::error('¡Error!', 'Debes subir uno o más archivos');
            return back();
        }
    }
    ```
15. Programar el método **show** del controlador **app\Http\Controllers\FilesController.php**:
    ```php
    public function show($id)
    {
        $file = File::whereCodeName($id)->firstOrFail();
        $user_id = Auth::id();
        if($file->user_id == $user_id){
            //return redirect(storage_path().'/app/public/'.$user_id.'/'.$file->code_name);
            return response()->file(storage_path().'/app/public/'.$user_id.'/'.$file->code_name);
        } else {
            Alert::error('¡Error!', 'No tiene permisos para ver este archivo');
            return back();

            // También se puede colocar
            // abort(403);
        }
    }
    ```
16. Programar el método **destroy** del controlador **app\Http\Controllers\FilesController.php**:
    ```php
    public function destroy(Request $request, $id)
    {
        $file = File::whereCodeName($id)->firstOrFail();
        
        // Borra el archivo del storage o almacenamiento
        $archivo = storage_path().'/app/public/'.Auth::id().'/'.$file->code_name;
        unlink($archivo);

        // Borra el registro de la bd
        $file->delete();

        Alert::info('Atención!', 'Se ha eliminado el archivo');
        return back();
    }
    ```
17. Realizar commit MVC File:
    + $ git add .
    + $ git commit -m "MVC File"
    + $ git push -u origin main

## Actualizar instructivo:
1. Copiar todo el contenido de este archivo Markdown (**apuntes.md**).
2. Ir a https://dillinger.io y convertir nuestro archivo de **Markdown** a **HTML**.
3. Exportar como **Styled HTML** y guardar este archivo como **public\instructivo.html** reemplazando así al existente.

## Actualizar proyecto en Heroku:
1. Realizar commit final:
    + $ git add .
    + $ git commit -m "Proyecto terminado V1"
    + $ git push -u origin main
2. Abrir nueva terminal para trabajar en heroku
    1. $ heroku login
    2. $ git remote add heroku git.heroku.com/solucionespp-file.git
    3. $ heroku git:remote -a solucionespp-file
    4. $ heroku run bash
    5. ~ $ php artisan storage:link
    6. ~ $ php artisan migrate
          - Do you really wish to run this command? (yes/no) [no]: yes
    7. ~ $ exit
    8. $ heroku logout