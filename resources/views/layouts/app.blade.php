<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title', 'Saveurs d\'Ébène - Dashboard')</title>
    <!-- TAILWIND CSS -->
    @vite('resources/css/app.css')
</head>
<body class="" style="background-color: var(--backgroundB-1);">
    <div class="flex h-screen overflow-hidden">
        <!-- SIDEBAR -->
        @include('components.sidebar')

        <!-- MAIN CONTAINER -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- NAVBAR -->
            @include('components.navbar')

            <!-- CONTENT -->
            {{-- <main class="flex-1 overflow-y-auto">
                @yield('content')
            </main> --}}
        </div> 
    </div>

</body>
</html>