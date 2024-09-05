@props(['job'])
<x-panel>
    <div>
        <x-employer-logo></x-employer-logo>
    </div>

    <div class = "flex-1 flex flex-col">
        <a href="" class = "self-start text-sm text-purple-600">{{$job->employer->name}}</a>
        
        <h3 class = "group-hover:text-purple-600 font-bold text-xl mt-3 transmission-colors duration-1000">{{$job->title}}</h3>
        <p class = "text-sm text-gray-400 mt-auto">{{$job->type}}- {{$job->salary}}</p>
    </div>
    
    <div>
        @foreach ($job->tags as $tag)
                <x-tag :$tag size="small"/>
        @endforeach
    </div>
</x-panel>