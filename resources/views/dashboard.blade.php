<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue-600 leading-tight">
            Welcome to MyGym, {{ Auth::user()->name }} 💪
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-6 rounded-xl shadow">
                <p class="text-lg italic font-medium">"Success isn’t always about greatness. It’s about consistency. Consistent hard work gains success. Greatness will come." — Dwayne Johnson</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 shadow rounded-xl text-center">
                    <h3 class="text-3xl font-bold text-blue-600">12</h3>
                    <p class="text-gray-600">Workouts This Month</p>
                </div>
                <div class="bg-white p-6 shadow rounded-xl text-center">
                    <h3 class="text-3xl font-bold text-blue-600">3,450</h3>
                    <p class="text-gray-600">Calories Burned</p>
                </div>
                <div class="bg-white p-6 shadow rounded-xl text-center">
                    <h3 class="text-3xl font-bold text-blue-600">8.5 hrs</h3>
                    <p class="text-gray-600">Total Training Time</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <a href="#"
                   class="bg-white p-6 shadow rounded-xl hover:shadow-md transition block">
                    <h3 class="text-lg font-semibold text-blue-600 mb-2">📅 Workout Schedule</h3>
                    <p class="text-gray-600 text-sm">View your upcoming training sessions.</p>
                </a>

                <a href="#"
                   class="bg-white p-6 shadow rounded-xl hover:shadow-md transition block">
                    <h3 class="text-lg font-semibold text-blue-600 mb-2">📈 Progress Tracker</h3>
                    <p class="text-gray-600 text-sm">See charts and milestones you've hit.</p>
                </a>

                <a href="#"
                   class="bg-white p-6 shadow rounded-xl hover:shadow-md transition block">
                    <h3 class="text-lg font-semibold text-blue-600 mb-2">👨‍🏫 Contact Trainer</h3>
                    <p class="text-gray-600 text-sm">Message or schedule a 1-on-1 session.</p>
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
