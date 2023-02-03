<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
    <wireui:scripts />
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>


<x-input label="Testando imput" placeholder="your name" class="pl-5">
    <x-slot name="append">
        <div class="absolute inset-y-0 right-0 flex items-center p-0.5">
            <x-button
                class="h-full rounded-r-md"
                icon="sort-ascending"
                primary
                flat
                squared
            />
        </div>
    </x-slot>
</x-input>



    @livewireScripts
</body>

</html>
