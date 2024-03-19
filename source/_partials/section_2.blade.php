<section class="px-5 md:px-0 py-10 md:pb-20 -mt-0 md:-mt-14" id="section_2">
    <div class="container mx-auto max-w-6xl space-y-10 md:space-y-20">
        <div class="bg-orange-300 p-10 text-center"><h2 class="text-2xl md:text-5xl text-zinc-800">Puedes encontrar mis diseños en marcas como</h2></div>
        <div class="flex flex-wrap">
            @foreach ($page->logos as $logo)
                <img class="w-1/2 md:w-1/5 p-5" src="{{ $logo->image }}" alt="{{ $logo->title }}" alt="{{ $logo->title }}">
            @endforeach
        </div>
    </div>
</section>