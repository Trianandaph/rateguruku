<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'RateGuruku.id') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <h1 class="text-2xl font-bold text-indigo-600">🎓 RateGuruku.id</h1>
                    </div>
                </div>
                
                <!-- Navigation Links -->
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium">
                            Login
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-indigo-600 text-white hover:bg-indigo-700 px-4 py-2 rounded-md text-sm font-medium">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-b from-indigo-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
            <div class="text-center">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                    Platform Review Guru <span class="text-indigo-600">Anonim</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Suara siswa untuk pendidikan yang lebih baik. Berikan review jujur dan anonim untuk guru-guru Anda.
                </p>
                <div class="flex justify-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="bg-indigo-600 text-white hover:bg-indigo-700 px-8 py-3 rounded-lg text-lg font-medium transition">
                            Mulai Review
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="bg-indigo-600 text-white hover:bg-indigo-700 px-8 py-3 rounded-lg text-lg font-medium transition">
                            Daftar Sekarang
                        </a>
                        <a href="{{ route('login') }}" class="bg-white text-indigo-600 border-2 border-indigo-600 hover:bg-indigo-50 px-8 py-3 rounded-lg text-lg font-medium transition">
                            Login
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-6">
                <div class="text-4xl mb-4">🔒</div>
                <h3 class="text-xl font-semibold mb-2">100% Anonim</h3>
                <p class="text-gray-600">Identitas Anda dijamin aman dan tidak akan diketahui siapa pun</p>
            </div>
            <div class="text-center p-6">
                <div class="text-4xl mb-4">📊</div>
                <h3 class="text-xl font-semibold mb-2">Review Jujur</h3>
                <p class="text-gray-600">Berikan penilaian yang objektif untuk membantu siswa lain</p>
            </div>
            <div class="text-center p-6">
                <div class="text-4xl mb-4">🎯</div>
                <h3 class="text-xl font-semibold mb-2">Mudah Digunakan</h3>
                <p class="text-gray-600">Interface sederhana dan mudah dipahami untuk semua kalangan</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-50 border-t border-gray-200 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center text-gray-600">
                <p>&copy; {{ date('Y') }} RateGuruku.id. Platform Review Guru Anonim.</p>
                <p class="mt-2 text-sm">Membantu menciptakan pendidikan yang lebih baik melalui transparansi dan feedback konstruktif.</p>
            </div>
        </div>
    </footer>
</body>
</html>
