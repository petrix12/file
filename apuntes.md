# Subir archivos a la red con Laravel y almacenar sus datos en MySQL
##### **GitHub**: ***

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
    ##### **Nota**: en local deberemos levantar nuestro proyecto con el servidor de php artisan:
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
    ### Nota: si estas elaborando tu instructivo en formato Markdown puedes convertirlo a HTML en:
    + https://dillinger.io
4. Cambiar logo de la aplicación en **resources\views\components\application-logo.blade.php**:
    ```php
    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi6G3DYPhX_zU3sA_hSYxJ4DN_FW9jZOtVTnMPyGx4Po-hzAu2CiyY-LWhMIgNwud0uVrwVn0tBcEZvHqTtIDeIQA9zkYQguDXgB48jhNcpzgh-WIo6ZW9UW_PYGCrn4R2XInHdF1YxSP2kk1ldHlCTr_fDhzXpLnwNbhYJ5JMCcFfUFvW7x_NKJBPY6g=s314" alt="Logo Soluciones++">
    ```
5. En caso de que querer personalizar las vistas relacionadas con la autenticación de usuarios, estas se encuentran ubicadas en **resources\views\auth**.

## Subir proyecto a GitHub
1. Ir a la página de GitHub e iniciar sesión:
    + https://github.com
2. Crear un nuevo repositorio y darle el nombre de **file**.
3. Abrir una terminal en la raíz de nuestro proyecto **file** en local y ejecutar:
    + $ git init
    + $ git add .
4. dddd



***. Crear modelo File: $ php artisan make:model File -m
***. Crear controlador: $ php artisan make:controller FilesController -r
***. Solamente trabajaremos con los métodos index, create y store del controlador File.
***. Agregar campos name, code_name y user_id a la migración de la tabla files:
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del archivo
            $table->text('code_name'); // Nombre del archivo encriptado
            $table->unsignedBigInteger('user_id');   // Relación con los usuarios
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }
***. Indicamos los campos de asignación masiva en el modelo File
    protected $fillable = [
        'name',
        'code_name',
        'user_id'
    ];
***. Configurar el archivo de variable de entorno .env con una bd.
***. Ejecutar migración: $ php artisan migrate
***. Adecuamos la vista dashboard a nuestro proyecto.
    ***
    ***
***. Agregamos la ruta en routes\web.php
    Route::post('/upload', [FilesController::class, 'store'])->name('user.files.store');
***. Programar el método store del controlador File.
    ***
    ***
***. Crear enlace simbólico de public a storage: $ php artisan storage:link

Alertas
=======
URL: https://github.com/realrashid/sweet-alert
***. Ejecutar: $ composer require realrashid/sweet-alert
***. Agregar a config\app.php en providers
    ***
    'providers' => [
        /*
        * Package Service Providers...
        */
        RealRashid\SweetAlert\SweetAlertServiceProvider::class,
        ***
    ],
    ***
***. Agregar a config\app.php en aliases
    'Alert' => RealRashid\SweetAlert\Facades\Alert::class,
***. Agregar a la cabecera del controlador File:
    use RealRashid\SweetAlert\Facades\Alert;
***. Insertar en la sección content de resources\views\layouts\app.blade.php
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    Nota: si falla, reemplazar por: @include('sweetalert::alert')

Listar archivos
===============
***. Crear otro menú de navegación en resources\views\navigation-menu.blade.php
    ***
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-jet-nav-link href="{{ route('user.files.index') }}" :active="request()->routeIs('user.files.index')">
            {{ __('Mis archivos') }}
        </x-jet-nav-link>
    </div>
    ***
***. Agregar ruta en routes\web.php
    Route::get('/files', [Controller::class, 'index'])->name('user.files.index');
***. Crear vista para el método index del controlador File: resources\views\index.blade.php
    ***
    ***
***. Programar el método index del controlador File.
    ***
    ***
***. Seleccionar un modelo de tabla de bootstrap y para el diseño del la vista index.
    URL: https://getbootstrap.com/
***. Insertar CDN de estilos Bootstrap en resources\views\layouts\app.blade.php
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

Limitar el acceso a los archivos
================================
***. Agregar ruta a routes\web.php
    Route::get('/files/{file}', [FilesController::class, 'store'])->name('user.files.show');
***. Programar el método show del controlador File.
    ***
    ***
OJO: Solventar problema:
Forbidden
You don't have permission to access this resource.

Apache/2.4.46 (Win64) OpenSSL/1.1.1h PHP/7.4.15 Server at file.test Port 80

Eliminar archivo
================
***. Agregar ruta a routes\web.php
    Route::delete('/delet-file/{file}', [FilesController::class, 'destroy'])->name('user.files.destroy');
***. Programar el método destroy del controlador File.
    ***
    *** 
