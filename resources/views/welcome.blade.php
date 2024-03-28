<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title> 
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> <!-- Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"> <!-- Estilos personalizados -->
    <style>
        /* Agrega tus estilos personalizados aquí si es necesario */
    </style>
    @livewireStyles 
</head>

<body class="antialiased bg-gray-100 dark:bg-dots-lighter dark:text-white">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center"> <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900"></svg> </div>
            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <h2 class="mt-6 text-xl font-semibold">Listado de Pedidos</h2> 
                            @livewire('order-list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @livewireScripts
</body>

</html>