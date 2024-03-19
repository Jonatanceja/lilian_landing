<div class="py-10 md:py-20 bg-neutral-100">
    <div class="container mx-auto max-w-6xl px-5 md:px-0 space-y-5 md:space-y-7">
        <x-subtitle>Resuelve tus dudas</x-subtitle>
        <x-h1 class="pb-10">Preguntas frecuentes</x-h1>
        @foreach ($page->faq as $item)
        <div class="">
            <div x-data="{ open: false }">
                <button class="flex items-center justify-between w-full p-4 mb-4 text-left font-medium rounded-lg hover:bg-neutral-300 bg-neutral-200 focus:outline-none"
                @click="open = !open">
                    <h5 class="text-zinc-800 text-lg tracking-wide">{{ $item->question }}</h5>
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                </button>
                <div x-show="open" class="mt-4 text-gray-700 px-4" style="display: none;">
                    <x-small>{!! $item->answer !!}</x-small>
                </div>
            </div>          
        </div>            
        @endforeach
    </div>
</div>