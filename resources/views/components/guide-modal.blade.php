<div x-show="showModal" class="fixed inset-0 flex items-center justify-center backdrop-blur-xs z-50" x-cloak>
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full relative">
        <button @click="showModal = false" class="absolute top-2 right-2 bg-red-500 text-white px-3 py-1 rounded-full">
            ✕
        </button>
        <h2 class="text-xl font-bold text-green-700 mb-2" x-text="selectedCard.title"></h2>
        <img class="w-full h-40 object-cover my-2 rounded-sm" :src="selectedCard.src" :alt="selectedCard.title">
        <p class="text-gray-500 text-sm" x-text="selectedCard.description"></p>
        <p class="text-gray-700 text-sm mt-2 font-semibold" x-text="selectedCard.extraInfo"></p>
    </div>
</div>