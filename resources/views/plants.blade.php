<x-layouts.app>
    <h1 class="flex items-center justify-center uppercase font-serif text-3xl mb-15">Plants</h1>

    <div class="max-w-6xl mx-auto p-10 grid grid-cols-2 gap-4 md:grid-cols-4 md:gap-8">
        @foreach ($plants as $plant)
            <x-plant-card :plant="$plant" />
        @endforeach
    </div>
</x-layouts.app>