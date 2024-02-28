<a href="{{$href}}" class="
    @if(isset($main) && $main)
    @php /* Style for the big link (homepage) */@endphp
        text-2xl
        p-2
    @else
    @php /* Style for the small every other link */@endphp
        text-base
        sm:text-lg
        p-1
    @endif
    sm:p-2
    rounded-full bg-[#020513] flex-1
    no-underline text-white">{{$slot}}
</a>