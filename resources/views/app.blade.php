<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Fira+Code:wght@300..700&display=swap"
        rel="stylesheet">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/18c274e5f3.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.ts','resources/css/app.css', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="relative antialiased font-inter bg-slate-900">
    @inertia
</body>

</html>