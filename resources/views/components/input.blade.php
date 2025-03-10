<div class="flex flex-col gap-2">
    <label for="{{ $attributes['name'] }}" class="text-sm uppercase">
        {{ $attributes['label'] }}
    </label>

    <input 
        type="{{ $attributes['type'] }}" 
        name="{{ $attributes['name'] }}" 
        required 
        class="rounded-lg border w-90 p-2 mb-4 focus:outline-none 
        border-neutral-200 focus:ring focus:ring-opacity-50">
</div>