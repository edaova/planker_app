<a href="{{ route('plant.show', $plant->id) }}" class="block">
    <div class="shadow-md rounded-lg overflow-hidden group hover:scale-105 duration-200 cursor-pointer">
        <div class="relative w-full aspect-square bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $plant->image) }}');">
            <div class="absolute bottom-0 w-full bg-neutral-50 opacity-70 p-2 text-center">
                <h3 class="text-green-900 text-lg font-bold uppercase">{{ $plant->name }}</h3>
            </div>
        </div>
    </div>
</a>
