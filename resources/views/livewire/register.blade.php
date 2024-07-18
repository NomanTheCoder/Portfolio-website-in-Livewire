<div style="background-image: url('/images/bg.jpg'); background-size: cover; background-position: center;" class="min-h-screen flex justify-center items-center">
    <div class="w-full max-w-md p-8 rounded-lg shadow-lg backdrop-filter backdrop-blur-lg bg-white bg-opacity-10 border border-blue-500">
        <div class="flex justify-center mb-6">
            <div class="w-16 h-16 rounded-full bg-blue-400 flex items-center justify-center">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 16s0 2 3 2 4-4 7-4 7 4 7 4 3-2 3-2v-6c0-1-1-2-2-2H5c-1 0-2 1-2 2v6z"></path></svg>
            </div>
        </div>

        <h2 class="text-2xl font-semibold text-center mb-6 text-white">Register</h2>

        @if (session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('message') }}</span>
            </div>
        @endif

        <form wire:submit.prevent="register" class="space-y-4">
            <div class="relative">
                <label for="name" class="block text-white font-medium mb-1">Name</label>
                <input type="text" id="name" wire:model="name" class="w-full p-3 border border-gray-300 rounded bg-white bg-opacity-50 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            
            <div class="relative">
                <label for="email" class="block text-white font-medium mb-1">Email ID</label>
                <input type="email" id="email" wire:model="email" class="w-full p-3 border border-gray-300 rounded bg-white bg-opacity-50 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            
            <div class="relative">
                <label for="password" class="block text-white font-medium mb-1">Password</label>
                <input type="password" id="password" wire:model="password" class="w-full p-3 border border-gray-300 rounded bg-white bg-opacity-50 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            
            <div class="relative">
                <label for="password_confirmation" class="block text-white font-medium mb-1">Confirm Password</label>
                <input type="password" id="password_confirmation" wire:model="password_confirmation" class="w-full p-3 border border-gray-300 rounded bg-white bg-opacity-50 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            
            <div class="flex items-center justify-between">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-blue-600" wire:model="remember">
                    <span class="ml-2 text-white">Remember me</span>
                </label>
            </div>

            <button type="submit" wire:click='$refresh' class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition duration-300">Register</button>
            <span wire:loading>Saving...</span> 
        </form>

        <div class="text-center mt-4 text-white">
            or <a href="{{ ('/login') }}" class="text-blue-300 hover:underline">Login</a>
        </div>
    </div>
</div>
