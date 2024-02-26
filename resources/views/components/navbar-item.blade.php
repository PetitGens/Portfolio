<a href="{{$href}}" class="
    @isset($size)
        {{$size}}
    @else
        text-lg
    @endisset
    rounded-full bg-[#020513] p-2 flex-1
    no-underline text-white">{{$slot}}
</a>