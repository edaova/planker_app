<x-layouts.app>

    @if(auth()->check()) 
        @include('components.navbar')
    @endif

        <div class="p-2 container mx-auto md:mb-40">
            <h1 class="text-5xl uppercase text-center font-serif mr-20">Planker</h1>
            <h2 class="text-xl uppercase text-center font-serif ml-65 text-green-600">/ plant care reminder /</h2>
        </div>

        <section class="flex justify-center items-center my-10 md:my-40 w-full h-auto gap-4 p-6">
            <div class="grid grid-cols-3 gap-4 w-full max-w-5xl items-center">
                <img src="{{ asset('storage/photo1.jpg') }}" 
                    class="aspect-square object-cover rounded-3xl w-full h-auto">
                <img src="{{ asset('storage/photo2.avif') }}" 
                    class="aspect-square object-cover rounded-3xl w-full h-auto">
            <p class="text-sbalance text-right w-full p-4 text-xs md:text-lg uppercase font-mono content-center">
                Are you tired of unintentionally killing your plants due to insufficient watering or ignorance of how to care for your plants?
            </p>
        </div>
    </section>

        <section class="flex justify-center items-center my-10 md:my-40 w-full h-auto gap-4 p-6">
            <div class="grid grid-cols-3 gap-4 w-full max-w-5xl items-center">
                <p class="text-balance w-full gap-4 text-sm md:text-lg uppercase font-mono">
                    Planker will help you to remind when to water and you will also find here some useful informations on how to properly care for them 🪴.
                </p>
                <img src="{{ asset('storage/photo3.jpg') }}" 
                    class="aspect-square object-cover rounded-3xl w-full h-auto">
                <img src="{{ asset('storage/photo4.jpg') }}" 
                    class="aspect-square object-cover rounded-3xl w-full h-auto">
            </div>
        </section>

        <section class="p-2 container mx-auto flex justify-center gap-4 h-1/3 lg:gap-50">
                <h1 class="text-4xl uppercase text-center font-serif content-center">Are you interested?</h1>
                <p class="p-2 text-balance text-sm text-center md:text-lg uppercase font-mono content-center"><a href="{{route('auth')}}" class="no-underline hover:underline text-green-600">Log in</a> to unlock the features.</p>
        </section>

    <footer class="flex justify-center bg-green-600 text-white text-xs md:text-lg p-2">This app wade made as a project for Web development course by Eliška Daová.</footer>
</x-layouts.app>
