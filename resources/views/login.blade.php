@extends('layout.app')

@section('content')
<div class="body row-span-7 bg-slate-950 grid md:grid-cols-2 grid-cols-1 justify-items-center items-center">
    <img src="../assets/sapatos.png" alt="" class="size-3/4 md:block hidden">
    <div class="form size-full grid grid-cols-1 grid-rows-4 p-5">
        <form class="row-span-2 self-center justify-self-center gap-1 grid grid-cols-1 p-3 rounded-md login-form md:w-1/2 w-3/4" action="{{route('log')}}" method="POST">
            @csrf
            <h2 class="text-slate-50 text-3xl text-center">Login</h2>
            <label for="" class="mt-5 text-slate-50 block">
                <span class="font-md block">Username</span>
                <input type="text" class="w-full mt-1 bg-white border p-3 border-slate-400 h-10 placeholder-slate-400 rounded-md
                focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-300 text-black" value="" name="username" placeholder="Enter username">
            </label>
            <label for="" class="mt-5 text-slate-50 block">
                <span class="font-md block">Password</span>
                <input type="password" class="w-full mt-1 bg-white border p-3 border-slate-400 h-10 placeholder-slate-400 rounded-md
                focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-300 text-black" name="password" placeholder="Enter password">
            </label>
            <button type="submit" class="bg-sky-500 md:w-28 w-[75%] h-8 rounded-md col-span-1 text-slate-50 mt-5 justify-self-center">Submit</button>
           
            <p class="text-slate-50 mt-4 text-center">You don't an have account? <a href="{{route('register.form')}}" class="text-green-400 underline underline-offset-2">Register!</a></p>
        </form>
        <article class="md:text-8xl text-4xl grid content-start text-center text-slate-50 row-span-2">
        <p class="mt-5">Build your own path</p>
        </article>
    </div>
</div>
@endsection
