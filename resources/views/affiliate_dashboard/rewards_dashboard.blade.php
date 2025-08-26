<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiliate Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1f2937;
            color: #d1d5db;
        }
    </style>
</head>
<body>

    <!-- Main Container -->
    <div class="min-h-screen flex flex-col bg-gray-900">

        <!-- Top Navigation Bar -->
        <nav class="bg-gray-800 shadow-sm">
            <div class="container mx-auto px-4 py-3 flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <img src="https://placehold.co/40x40/4b5563/d1d5db?text=S" alt="Logo" class="rounded-full">
                    <span class="text-xl font-bold text-gray-200">Your Brand</span>
                </div>

                <!-- Nav Links -->
                <div class="hidden md:flex space-x-6 text-gray-400 font-medium">
                    <a href="#" class="hover:text-gray-200 transition-colors duration-200">Home</a>
                    <a href="#" class="hover:text-gray-200 transition-colors duration-200">Referrals</a>
                    <a href="#" class="hover:text-gray-200 transition-colors duration-200">Commissions</a>
                    <a href="#" class="hover:text-gray-200 transition-colors duration-200">Payouts</a>
                    <a href="#" class="hover:text-gray-200 transition-colors duration-200">Reports</a>
                </div>

                <!-- User Profile -->
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white font-semibold">A</div>
<span class="hidden md:block text-gray-200 font-medium">
    {{ auth()->user()->email }}
</span>
                    <i class="fa-solid fa-chevron-down text-gray-400 text-sm"></i>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="flex-1 container mx-auto p-4 md:p-8 space-y-8">

            <!-- Metrics Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
             <!-- Metric Card for Total Referral Coins -->
<div class="bg-gray-800 p-6 rounded-xl shadow-md flex items-center space-x-4">
    <!-- Coin Icon with a subtle gold background -->
    <div class="p-4 rounded-full bg-amber-500/20 text-amber-400">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM9.5 9.5a.5.5 0 011 0v.5a.5.5 0 01-1 0v-.5zM12 8a.5.5 0 011 0v4a.5.5 0 01-1 0V8zM12 16.5a4.5 4.5 0 110-9 4.5 4.5 0 010 9z" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
    
    <div class="flex-1">
        <p class="text-sm font-medium text-gray-400">TOTAL REFERRAL COINS</p>
        <!-- Coin value with a golden color -->
        <p class="text-2xl font-semibold text-amber-400">{{ $totalCoins }}</p>
    </div>
</div>

                <!-- Metric Card 2 -->
                <div class="bg-gray-800 p-6 rounded-xl shadow-md flex items-center space-x-4">
                    <div class="p-4 bg-gray-700 rounded-full text-gray-400">
                        <i class="fa-solid fa-dollar-sign text-2xl"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-400">TOTAL UNPAID</p>
                        <p class="text-2xl font-semibold text-gray-200">$0</p>
                    </div>
                </div>
                <!-- Metric Card 3 -->
                <div class="bg-gray-800 p-6 rounded-xl shadow-md flex items-center space-x-4">
                    <div class="p-4 bg-gray-700 rounded-full text-gray-400">
                        <i class="fa-solid fa-money-bill-transfer text-2xl"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-400">TOTAL PAID</p>
                        <p class="text-2xl font-semibold text-gray-200">$0</p>
                    </div>
                </div>
            </div>

            <!-- Payout Method Section -->
      <!-- Golden Themed Referred Users Section -->
<div class="bg-gray-800 p-8 rounded-2xl shadow-2xl flex flex-col space-y-6 border border-gray-700">
    <div class="flex items-center space-x-4">
        <!-- Golden Users Icon -->
        <div class="p-6 bg-amber-500/10 rounded-full text-amber-400 shrink-0">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20v-2a4 4 0 00-4-4H7a4 4 0 00-4 4v2m3-8a4 4 0 11-8 0 4 4 0 018 0zm10 0a4 4 0 11-8 0 4 4 0 018 0zm-10 0a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
        </div>
        <div class="flex-1">
            <h3 class="text-2xl font-bold text-amber-400">Your Referred Users</h3>
            <p class="mt-2 text-gray-300">These users registered using your unique referral code.</p>
        </div>
    </div>

    <!-- Users Table -->
    <div class="overflow-x-auto rounded-lg border border-gray-700">
        <table class="w-full text-left text-gray-300">
            <thead class="bg-gray-700 text-gray-400">
                <tr>
                    <th class="py-4 px-6 font-semibold">Name</th>
                    <th class="py-4 px-6 font-semibold">Email</th>
                    <th class="py-4 px-6 font-semibold">Joined At</th>
                </tr>
            </thead>
            <tbody>
                @forelse($referrals as $ref)
                    <tr class="border-b border-gray-700 hover:bg-gray-700 transition-colors duration-200">
                        <td class="py-4 px-6">{{ $ref->user->name }}</td>
                        <td class="py-4 px-6">{{ $ref->user->email }}</td>
                        <td class="py-4 px-6">{{ $ref->user->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="py-6 text-center text-gray-500 italic">
                            No users registered with your referral yet.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


        </main>
    </div>

</body>
</html>
