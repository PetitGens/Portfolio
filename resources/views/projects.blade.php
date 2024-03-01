<x-layout title="Projets">
    <!--<div class="flex flex-col items-center sm:flex-row sm:flex-wrap justify-evenly">-->
    <div class="grid grid-cols-[1fr] sm:grid-cols-4">
        @foreach ($projects as $project)
            <div class="flex justify-center align-middle">
                <x-project-card :project="$project"/>
            </div>
        @endforeach
    </div>
</x-layout>