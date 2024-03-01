<a 
    class="border-2 border-white rounded-3xl w-72 h-72 m-5 text-white"
    href="#"
>
    <div class="p-2 flex flex-col items-center h-full w-full">
        <h1 class="text-lg">{{$project->pro_name}}</h1>
        
        <div class="max-w-[268px] h-[103px] overflow-hidden">
            <img 
                class="block w-full h-full object-contain"
                src="/images/projects/{{$project->pro_name}}/thumbnail.png"
                alt="Image {{$project->pro_name}}"
            >
        </div>
    
        <p class="flex-1 text-base  text-center">{{$project->pro_summary}}</p>

        <div class="border-[1px] border-white w-full m-2"></div>

        <div class="grid grid-cols-8 grid-rows-2">
            @foreach ($project->getSkills() as $skill)
                @php $skillName = str_replace(' ', '_', $skill->ski_name) @endphp
                <div class="flex justify-center align-middle">
                    <img
                        class="w-6 h-6 m-1"
                        src="/images/skills/{{ $skillName }}/logo.png"
                        alt="Logo {{$skill->ski_name}}"
                    >
                </div>
            @endforeach
        </div>
    </div>
</a>
