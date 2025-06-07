<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Alvora') }}</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('img/icon-alvora.png') }}" type="image/png">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            @keyframes gradientAnimation {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }
            
            body {
                background: linear-gradient(135deg, #007AFF, #a0cfff, #0056b3, #80b4ff);
                background-size: 300% 300%;
                animation: gradientAnimation 15s ease infinite;
            }
            
            .form-input {
                border-radius: 0.5rem;
                border: 1px solid #e2e8f0;
                transition: all 0.3s ease;
            }
            
            .form-input:focus {
                border-color: #007AFF;
                box-shadow: 0 0 0 3px rgba(0, 122, 255, 0.2);
            }
            
            .btn-primary {
                background-color: #007AFF;
                border-color: #007AFF;
                transition: all 0.3s ease;
            }
            
            .btn-primary:hover {
                background-color: #0056b3;
                border-color: #0056b3;
            }
            
            .auth-card {
                backdrop-filter: blur(10px);
                background-color: rgba(255, 255, 255, 0.9);
                border-radius: 1rem;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                padding: 2rem;
            }
            
            .btn-primary {
                background-color: #007AFF !important;
                border-color: #007AFF !important;
            }
            
            .btn-primary:hover {
                background-color: #0056b3 !important;
                border-color: #0056b3 !important;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div class="mb-4">
                <a href="/">
                    <img src="{{ asset('img/icon-alvora.png') }}" alt="Alvora" class="h-20 w-auto">
                    <h1 class="text-3xl font-bold text-white text-center mt-2">alvora</h1>
                </a>
            </div>

            <div class="w-full sm:max-w-md auth-card">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
