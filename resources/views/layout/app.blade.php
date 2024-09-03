<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Clarence page</title>
</head>

<body class="h-screen grid grid-cols-1 grid-rows-8 bg-cover font-sans">
    {{-- header --}}
    <div class="header row-span-1 bg-slate-950 grid grid-cols-6">
        <h1
            class="md:text-7xl text-5xl text-slate-50 font-bold self-center md:col-start-1 col-start-2 justify-self-center m-5">
            N<span class="font-thin">eke</span></h1>
        <span class="md:hidden grid text-slate-50 text-3xl col-start-6 justify-end m-5">&#9776;</span>
        <div
            class="nav md:grid hidden grid-cols-3 col-start-4 col-span-3 justify-items-center items-center text-slate-50 text-1xl">
            <a href="">Home</a>
            <a href="">Shop</a>
            <a href="">Us</a>
        </div>
    </div>
   
   @yield('content')

   <script>
   </script>
</body>
</html>