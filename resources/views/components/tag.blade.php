@props(['tag', 'size' => 'base'])
@php
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl ";
    if($size === 'small'){
        $classes .= "px-2 py-1 text-2xs";
    }
    else{
        $classes .= "px-5 py-1 text-sm";
    }
@endphp
<a href="/tag/{{strtolower($tag->name)}}" class = "{{$classes}}">{{$tag->name}}</a>
