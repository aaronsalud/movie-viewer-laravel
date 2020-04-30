<div x-data="{ isOpen: false}">
    <div class="mt-12">
        <button @click="isOpen = true" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
            <svg class="w-6 fill-current" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none" />
                <path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" /></svg>
            <span class="ml-2">Play Trailer</span>
        </button>
    </div>
    <x-modal>
        <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
            <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="{{ $trailer }}" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </x-modal>
</div>