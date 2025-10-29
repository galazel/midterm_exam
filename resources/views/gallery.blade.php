<x-layout>
    <x-slot:title>
        Gallery
    </x-slot:title>

    <section class="flex flex-col p-10 h-[130vh] justify-center items-center gap-5">
        <h1 class="resume-title">GALLERY</h1>
        <div class="columns-5 gap-4 w-[75vw]">
            @foreach ($images as $image)
                <img class="w-full mb-4 rounded" src={{$image}} alt="">
            @endforeach


        </div>
    </section>
</x-layout>
