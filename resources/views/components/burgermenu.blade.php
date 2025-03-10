<div x-data="{ open: false }" class="relative">
    <!-- Toggle Button -->
    <button @click="open = !open" class="text-green-500 cursor-pointer md:hidden relative">
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu mt-4">
            <line x1="4" x2="20" y1="12" y2="12"/>
            <line x1="4" x2="20" y1="6" y2="6"/>
            <line x1="4" x2="20" y1="18" y2="18"/>
        </svg>

        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x mt-4">
            <path d="M18 6 6 18"/><path d="m6 6 12 12"/>
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <nav x-show="open" @click.outside="open = false" class="absolute top-full -left-30 w-40  h-60 bg-white border border-gray-100 shadow-md rounded-lg p-4 z-50 transition-all duration-300 ease-in-out">
        <ul class="flex flex-col items-center gap-15">
            <li><a href="{{ route('dashboard') }}" class="hover:text-green-500 uppercase">Home</a></li>
            <li><a href="{{ route('plants') }}" class="hover:text-green-500 uppercase">Plants</a></li>
            <li><a href="{{ route('guide') }}" class="hover:text-green-500 uppercase">Guide</a></li>
        </ul>
    </nav>
</div>