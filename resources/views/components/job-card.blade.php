@props(['job'])

<x-panel>
    <div class = "self-start text-sm text-blue-300">{{$job->employer->name}}</div>
    
    <div class = "py-8">
        <h3 class="group-hover:text-purple-600 text-xl font-bold transmission-colors duration-1000">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class = "text-sm mt-4">{{$job->type}}- {{$job->salary}}</p>
    </div>

    <div class = "flex justify-between items-center mt-auto">   
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small"/>
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" :width="42" />
    </div>
</x-panel>