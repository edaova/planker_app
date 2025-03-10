<header class="flex justify-between px-4">
    <div class="h-18 flex items-center">
        <img src="{{asset('storage/logo_planker.png')}}" alt="logo" class="max-w-[120px] max-h[190px] flex items-center justify-center"> 
        <h3 class="mr-6 uppercase">Planker</h3>
    </div>  
    
    
    @auth
    <nav class="hidden flex items-center md:flex">
        <ul class="md:flex lg:space-x-48 md:space-x-20">
            <li class="hover:text-green-500 uppercase">
                <a href="{{route('dashboard')}}">Home</a>
            </li>
            <li class="hover:text-green-500 uppercase">
                <a href="{{route('plants')}}">Plants</a>
            </li>
            <li class="hover:text-green-500 uppercase">
                <a href="{{route('guide')}}">Guide</a>
            </li>
        </ul>
    </nav>

        <!-- PROFILE -->
        <div class="flex">
            <x-profile />
            <x-burgermenu />
        </div>
    @endauth

</header>