<div>
    <div style="background-image: url('/images/bg.jpg'); background-size: cover; background-position: center; min-height: 100vh;" class="flex justify-center items-center">
        <div class="w-full max-w-md p-8 rounded-lg shadow-lg backdrop-filter backdrop-blur-lg bg-white bg-opacity-10 border border-blue-500">
            <div class="flex justify-center mb-6">
                <div class="w-16 h-16 rounded-full bg-blue-400 flex items-center justify-center">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m4-4v8m0 0h-4m4 0v8m0-8h4"></path></svg>
                </div>
            </div>
    
            <h2 class="text-2xl font-semibold text-center mb-6 text-white">Login</h2>
    
        
            @if (session()->has('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif
    
            <form wire:submit.prevent="login" class="space-y-4">
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
                
                <div class="flex items-center justify-between">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-blue-600" wire:model="remember">
                        <span class="ml-2 text-white">Remember me</span>
                    </label>
                   
                </div>
                
             <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition duration-300">Login</button>
          
            </form>
    
            <div class="text-center mt-4 text-white">
                or <a href="{{'/register'}}" class="text-blue-300 hover:underline">Get Registered</a>
            </div>
        </div>
    </div>
    
</div>
