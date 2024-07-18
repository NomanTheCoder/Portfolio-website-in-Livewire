<div class="min-h-screen bg-gray-900 text-white font-sans">

    <nav class="flex justify-between items-center p-6 bg-gray-800">
        <div class="text-2xl font-bold text-green-500">Code With Noman</div>
        <div>
            <a href="#home" class="px-4">Home</a>
            <a href="#services" class="px-4">Services</a>
            <a href="#projects" class="px-4">Projects</a>
            <a href="#about" class="px-4">About</a>
            <a href="#contact" class="px-4">Contact</a>
        </div>
    </nav>

    <section class="text-center py-20">
        
        <div class="flex justify-center mb-8">
            @include('livewire.image')
        </div>
        
        <h1 class="text-5xl font-bold mb-4">Noman Nadeem</h1>
        <p class="text-lg mb-6">A professional Front-end and laravel developer</p>
        <button class="bg-green-500 text-black px-6 py-2 rounded">Download CV</button>
    </section>

 
    <section id="services" class="py-20 bg-cover bg-center" style="background-image: url('/images/dashboard.jpg');">
        <h2 class="text-3xl font-bold text-center mb-12">My Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
                <i class="fab fa-html5 text-9xl mb-2"></i>
                <h3 class="text-xl font-bold mb-2">HTML 5</h3>
                <p>High-quality markup with HTML5 standards</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
                <i class="fab fa-css3-alt text-9xl mb-2"></i>
                <h3 class="text-xl font-bold mb-2">CSS 3</h3>
                <p>Beautiful and responsive styles with CSS3</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
                <img src="{{ asset('images/alpine.jpeg') }}" alt="Alpine.js Icon" class="w-32 h-37 mx-auto mb-2">
                <h3 class="text-xl font-bold mb-2">Alpine Js</h3>
                <p>Modern web apps with Alpine.js</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
                <i class="fas fa-bolt text-9xl mb-2"></i>
                <h3 class="text-xl font-bold mb-2">Livewire</h3>
                <p>Modern web apps with Livewire</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
                <i class="fas fa-code text-9xl mb-2"></i>
                <h3 class="text-xl font-bold mb-2">Web Development</h3>
                <p>Full-stack web development services</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
                <i class="fas fa-database text-9xl mb-2"></i>
                <h3 class="text-xl font-bold mb-2">MySQL Database</h3>
                <p>Reliable data management with MySQL Database</p>
            </div>
        </div>
    </section>

    <section id="about" class="bg-gray-800 py-20">
        <div class="max-w-4xl mx-auto text-center">
            <div class="flex justify-center mb-8">
                @include('livewire.image')
            </div>
            <h2 class="text-3xl font-bold mb-4">About Me</h2>
            <p class="mb-6">Hello! I'm a developer specializing in front-end and app development with React and React Native. I create efficient, clean, and maintainable solutions with a user-centered design approach. My services include full-stack web development, UI/UX design, and mobile app development. Always eager to learn and adapt, I'm here to help you build outstanding digital products.</p>
            <div class="flex justify-center space-x-4">
                <div>
                    <h3 class="text-2xl font-bold">40+</h3>
                    <p>Clients</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">50</h3>
                    <p>Templates Sold</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">70+</h3>
                    <p>Projects</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">8</h3>
                    <p>Years of Experience</p>
                </div>
            </div>
            <div class="mt-8">
                <button class="bg-green-500 text-black px-6 py-2 rounded">Hire Me</button>
                <button class="bg-transparent border border-white px-6 py-2 rounded ml-4">Contact</button>
            </div>
        </div>
    </section>


    <section id="projects" class="py-20 bg-cover bg-center" style="background-image: url('/images/dashboard.jpg');">
        <h2 class="text-3xl font-bold text-center mb-12">My Work</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
          
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <img src="path-to-your-project-image.jpg" alt="Project" class="rounded-lg mb-4">
                <h3 class="text-xl font-bold">Project Title</h3>
                <p>Short description of the project</p>
            </div>
       
        </div>
    </section>

  
    <section id="contact" class="bg-gray-800 py-20">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Have a project on Mind?</h2>
            <p class="mb-8">Share your idea with me, and let's create something amazing together.</p>
            <button class="bg-green-500 text-black px-6 py-2 rounded">Hire Me</button>
            <button class="bg-transparent border border-white px-6 py-2 rounded ml-4">Contact</button>
        </div>
    </section>
</div>
