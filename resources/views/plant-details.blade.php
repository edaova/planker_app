<x-layouts.app>
    <div x-data="{ 
        selectedIndex: localStorage.getItem('selectedIndex') ? parseInt(localStorage.getItem('selectedIndex')) : 0,  
        plants: {{ $subPlants->isNotEmpty() ? $subPlants->toJson() : collect([$plant])->toJson() }},
        selectedPlantId: null,
        selectedPlantName: '',

        init() {
            if (this.plants.length > 0) {
                this.selectedIndex = this.selectedIndex < this.plants.length ? this.selectedIndex : 0; 
                this.selectedPlantId = this.plants[this.selectedIndex]?.id ?? null;
                this.selectedPlantName = this.plants[this.selectedIndex]?.name ?? 'Unknown Plant';
            }
        }
    }" class="max-w-6xl mx-auto overflow-hidden mt-10"
            x-init="$watch('selectedIndex', value => localStorage.setItem('selectedIndex', value))">
        
        <div class="p-8 md:flex gap-2">
            
            <!-- Left Column - Image Carousel -->
            <div class="relative overflow-hidden">
                <div class="w-full relative absolute top-0 left-1/2 transform -translate-x-1/2">
                    <img :src="'/storage/' + plants[selectedIndex]?.image" 
                        class="w-full h-120 object-cover rounded-lg shadow-md transition-all duration-300">
            
                    <button @click="selectedIndex = (selectedIndex - 1 + plants.length) % plants.length; 
                                    selectedPlantId = plants[selectedIndex]?.id; 
                                    selectedPlantName = plants[selectedIndex]?.name" 
                            class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 rounded-full shadow-md hover:bg-gray-900">
                        <
                    </button>
            
                    <button @click="selectedIndex = (selectedIndex + 1) % plants.length; 
                                    selectedPlantId = plants[selectedIndex]?.id; 
                                    selectedPlantName = plants[selectedIndex]?.name" 
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 rounded-full shadow-md hover:bg-gray-900">
                        >
                    </button>
                </div>
            </div>

            <!-- Right Column - Information -->
            <div class="w-full">
                <h1 class="text-4xl font-bold uppercase" x-text="plants[selectedIndex]?.name"></h1>
                <p class="text-gray-600 text-lg mt-2" x-text="plants[selectedIndex]?.description"></p>
                
                <!-- Formulář pro přidání rostliny -->
                @if(session('success'))
                    <span class="text-green-500 p-3 mt-4">
                        {{ session('success') }}
                    </span>
                @endif

                @if(session('error'))
                    <span class="text-red-500 p-3 mt-4">
                        {{ session('error') }}
                    </span>
                @endif

                <form method="POST" action="{{ route('user.plants.store') }}">
                    @csrf
                    <input type="hidden" name="plant_id" x-bind:value="selectedPlantId">
                    <input type="hidden" name="plant_name" x-bind:value="selectedPlantName">
                    
                    <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-700 transition mt-4">
                        + Add Plant
                    </button>
                </form>

                <div class="mt-6 space-y-4">
                    <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg shadow-sm">
                        <p class="text-gray-700 font-semibold">💧 Watering</p>
                        <p class="text-gray-600 text-sm">{{ $plant->watering_frequency }}</p>
                    </div>
                    <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg shadow-sm">
                        <p class="text-gray-700 font-semibold">☀️ Sunlight</p>
                        <p class="text-gray-600 text-sm">{{ $plant->sunlight }}</p>
                    </div>
                    <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg shadow-sm">
                        <p class="text-gray-700 font-semibold">🌡️ Temperature</p>
                        <p class="text-gray-600 text-sm">{{ $plant->temperature }}</p>
                    </div>
                    <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg shadow-sm">
                        <p class="text-gray-700 font-semibold">💦 Humidity</p>
                        <p class="text-gray-600 text-sm">{{ $plant->humidity }}%</p>
                    </div>
                    <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg shadow-sm">
                        <p class="text-gray-700 font-semibold">🌿 Fertilizer</p>
                        <p class="text-gray-600 text-sm">{{ $plant->fertilizer }}</p>
                    </div>
                    <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg shadow-sm">
                        <p class="text-gray-700 font-semibold">🐾 Pet Friendly</p>
                        <p class="text-gray-600 text-sm">{{ $plant->pet_friendly ? 'Yes' : 'No' }}</p>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="mt-6">
                    <a href="{{ route('plants') }}">
                        <x-button>← Back to Plants</x-button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>