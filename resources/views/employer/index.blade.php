<x-layout>
    <div class="bg-black shadow-md rounded-lg p-8 max-w-m">
        <div class="flex flex-col items-center">
            <img class="w-40 h-40 rounded-full shadow-lg" src="{{asset("storage/".$logo)}}" alt="Profile Photo">
            <h1 class = "mt-6 font-bold text-2xl text-blue-300">{{$name}}</h1>
        </div>
        <section class = "mt-12">
            <x-section-heading>Our Jobs</x-section-heading>
            <div class = "mt-10 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>