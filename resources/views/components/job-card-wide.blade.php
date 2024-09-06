@props(['job'])
<x-panel>
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class = "flex-1 flex flex-col">
        <a href="" class = "self-start text-sm text-blue-300">{{$job->employer->name}}</a>
        
        <h3 class="group-hover:text-purple-600 font-bold text-xl mt-3 transmission-colors duration-1000">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class = "text-sm text-gray-400 mt-auto">{{$job->type}}- {{$job->salary}}</p>
    </div>
    
    <div>
        @foreach ($job->tags as $tag)
                <x-tag :$tag size="small"/>
        @endforeach
    </div>
</x-panel>