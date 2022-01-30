<!DOCTYPE>
<html lang="en" dir="{{ app()->currentLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? 'Home' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Scripts -->
    <script>
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                    document.documentElement.classList.add('dark')
                } else {
                    document.documentElement.classList.remove('dark')
                }
            }
        );

        function updateTheme() {
            if (!('theme' in localStorage)) {
                if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark')
                }
            }

            switch (localStorage.theme) {
                case 'light':
                    document.documentElement.classList.remove('dark');
                    document.documentElement.setAttribute('color-theme', 'light');
                    break;

                case 'dark':
                    document.documentElement.classList.add('dark');
                    document.documentElement.setAttribute('color-theme', 'dark');
                    break;
            }
        }

        updateTheme();
    </script>
</head>

<body class="bg-white font-roboto text-slate-300 text-base font-medium tracking-wide dark:bg-slate-900 dark:text-slate-400">
    <header class="flex justify-between items-center max-w-7xl mx-auto py-8 px-5">
        <x-logo />

        <x-nav />
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>

    </footer>

    <!-- App.js -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
