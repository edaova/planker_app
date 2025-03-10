<div class="max-w-80 h-auto bg-white shadow-lg rounded-lg p-4 border border-gray-300 cursor-pointer"
    @click="selectedCard = { 
        title: '{{ $title }}', 
        src: '{{ asset($src) }}', 
        description: '{{ $description }}', 
        extraInfo: '{{ $extraInfo ?? '' }}' 
    }; showModal = true;">
    <img class="w-full h-40 object-cover rounded-sm" src="{{ asset($src) }}" alt="{{ $title }}">
    <p class="text-center font-semibold mt-2">{{ $title }}</p>
    <p class="text-sm text-gray-500">{{ $description }}</p>
</div>