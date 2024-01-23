<!-- resources/views/components/menu.blade.php -->

<nav class="bg-gray-800 text-white">
    <div class="container mx-auto flex items-center justify-between p-4">
        <div class="flex items-center space-x-4">
            <a href="#" class="font-bold">Logo</a>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>

        <div class="lg:hidden">
            <!-- Button for mobile menu -->
            <!-- This can be a hamburger icon or any other icon of your choice -->
            <button>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <div class="hidden lg:flex items-center space-x-4">
            <!-- Additional items for larger screens -->
            <a href="#">Services</a>
            <a href="#">Blog</a>
            <a href="#">Portfolio</a>
        </div>
    </div>
</nav>
