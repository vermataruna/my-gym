<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyGym</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">

    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">🏋️‍♂️ MyGym</h1>
            <nav>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-blue-600 font-semibold hover:underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600 font-semibold">Login</a>
                    @endauth
                @endif
            </nav>
        </div>
    </header>

    <section class="bg-gradient-to-r from-blue-50 to-blue-100 py-20">
        <div class="max-w-5xl mx-auto text-center px-4">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-4">Achieve Your Fitness Goals with <span class="text-blue-600">MyGym</span></h2>
            <p class="text-lg text-gray-600 mb-8">Join our exclusive fitness platform built for members only. Your transformation starts here.</p>
            @if (Route::has('login') && !Auth::check())
                <a href="{{ route('login') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                    Login
                </a>
            @endif
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">Why Choose MyGym?</h3>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="p-6 bg-gray-50 rounded-xl shadow">
                    <h4 class="text-xl font-semibold mb-2">🏃 Personalized Plans</h4>
                    <p class="text-gray-600">Tailored workouts based on your fitness goals and progress.</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl shadow">
                    <h4 class="text-xl font-semibold mb-2">👨‍🏫 Expert Guidance</h4>
                    <p class="text-gray-600">Work with certified coaches who track and adjust your plan in real time.</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl shadow">
                    <h4 class="text-xl font-semibold mb-2">📱 24/7 Access</h4>
                    <p class="text-gray-600">Log in anytime from any device and keep up your training on the go.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue-600 py-16 text-center text-white">
        <h3 class="text-3xl font-bold mb-4">Already a Member?</h3>
        <p class="mb-6 text-lg">Log in now and continue your fitness journey with MyGym.</p>
        @if (Route::has('login') && !Auth::check())
            <a href="{{ route('login') }}"
               class="inline-block bg-white text-blue-600 hover:text-blue-700 font-semibold px-6 py-3 rounded-lg transition">
                Login
            </a>
        @endif
    </section>

    <footer class="bg-gray-100 py-6 text-center text-gray-500 text-sm">
        &copy; {{ date('Y') }} MyGym. All rights reserved.
    </footer>

</body>
</html>
