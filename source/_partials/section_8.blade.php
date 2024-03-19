<section class="py-10 md:py-20 bg-neutral-100">
    <div class="container mx-auto max-w-6xl px-5 md:px-0 space-y-5 md:space-y-7">
        <x-subtitle>Lo que aprenderás</x-subtitle>
        <x-h1>Programa</x-h1>
        
            @php
            $count = 1;
            @endphp
            @foreach ($page->programa as $item)
            <div class="grid grid-cols-1 md:grid-cols-5 gap-7 md:gap-10 border-b border-zinc-500 py-7 md:py-10">
                <div class="col-span-2 flex space-x-3 md:space-x-5">
                    <div class="mr-1 text-2xl md:text-3xl text-orange-500 font-bold flex numbers">{{ str_pad($count++, 1, '0') }}/</div>
                    <x-h4>{{ $item->title }}</x-h4>
                </div>
                <div class="col-span-3 -mt-5 md:-mt-0">
                    <x-small >{!! $item->description !!}</x-small>
                </div>
            </div>
            @endforeach
            <div class="flex justify-center md:pt-6"><x-buttonPrincipal>Accede al Curso</x-buttonPrincipal></div>
    </div>
</section>