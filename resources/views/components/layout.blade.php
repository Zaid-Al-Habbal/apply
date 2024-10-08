<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/apply-logo.svg') }}" alt="" width="100">
                </a>
            </div>
            
            @auth
            <div class="space-x-6 font-bold flex">
                <a href="/jobs/create">Post a Job</a>
                
                <a href="/profile">Your Profile</a>
                <div class = "text-red">
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')

                        <button style = "color:red">Log Out</button>
                    </form>
                </div>
                </div>
            @endauth

            @guest
                <div class="space-x-6 text-purple-300">
                    <a href="/register">If you want to post a Job Sign Up Now!</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>