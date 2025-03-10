<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-7">
    @foreach(auth()->user()->plants as $plant)
        <div class="bg-white p-4 rounded-xl shadow-lg relative">

            <form action="{{ route('user.plants.destroy', $plant->id) }}" method="POST" 
                onsubmit="return confirm('Are you sure you want to remove this plant?');"
                class="absolute top-2 right-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-7 h-7 flex items-center justify-center bg-red-500 text-white rounded-full shadow-md hover:bg-red-700 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </form>

            <!-- Obrázek rostliny -->
            <img src="{{ asset('storage/' . $plant->image) }}" alt="{{ $plant->name }}" class="aspect-square object-cover rounded-xl">

            <h2 class="text-lg font-semibold mt-3">{{ $plant->name }}</h2>

            <!-- Detaily rostliny -->
            <div class="mt-2 flex flex-col gap-1">
                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 text-sm rounded">☀️ {{ $plant->sunlight }}</span>
                <span class="bg-blue-200 text-blue-800 px-2 py-1 text-sm rounded">💧 {{ $plant->watering_frequency }}</span>
                <span class="bg-green-200 text-green-800 px-2 py-1 text-sm rounded">🐾 {{ $plant->pet_friendly ? 'Yes' : 'No' }}</span>
            </div>
        </div>
    @endforeach
</div>