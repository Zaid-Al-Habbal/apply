<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class = "bg-black text-white">
    <div class = "px-10">
        <nav class = 'flex justify-between items-center py-4 border-b border-white/10'>
            <div>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/apply-logo.svg')}}" alt="">
                </a>
            </div>
            <div class = "space-x-6 font-bold">
                <a href="">Companies</a>
            </div>
            @auth   
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post a Job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')

                        <button>Log Out</button>
                    </form>
                </div>
            @endauth
            </div>
            @guest
                <div class="space-x-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">Log In</a>
                </div>
            @endguest
        </nav>

        <main class = "mt-10 mx-w-[986px] mx-auto">
            {{$slot}}
        </main>
    </div>
</body>
</html>