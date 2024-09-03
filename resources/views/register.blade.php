@extends('layout.app')

@section('content')
    <div class="body row-span-7 bg-slate-950 grid grid-cols-1 justify-items-center  [background-position:50% 0%] bg-no-repeat" style="background-image: url(../assets/pngwing.com.png)">
        {{-- <img src="" alt="" class="size-[50% 50%]  md:block hidden"> --}}
        <div class="form size-full grid grid-cols-1 grid-rows-3 p-5">
            <form
                class="row-span-2 self-center justify-self-center grid gap-1 grid-cols-1 p-3 rounded-md login-form md:w-1/4 w-3/4"
                action="{{ route('register.sign-up') }}" method="POST">
                @csrf
                <h2 class="text-slate-50 text-3xl text-center">Register</h2>
                <label for="" class="mt-5 text-slate-50 block">
                    <span class="font-md block">Username</span>
                    <input type="text"
                        class="w-full mt-1 bg-white border p-3 border-slate-400 h-10 placeholder-slate-400 rounded-md
                focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-300 text-black"
                        value="" name="username" placeholder="Enter username">
                </label>
                <label for="" class="mt-5 text-slate-50 block">
                    <span class="font-md block">Password</span>
                    <input type="password"
                        class="w-full mt-1 bg-white border p-3 border-slate-400 h-10 placeholder-slate-400 rounded-md
                focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-300 text-black"
                        name="password" placeholder="Enter password">
                </label>
                <label for="" class="mt-5 text-slate-50 block">
                    <span class="font-md block">Confirm Password</span>
                    <input type="password"
                        class="w-full mt-1 bg-white border p-3 border-slate-400 h-10 placeholder-slate-400 rounded-md
                focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-300 text-black"
                        name="con_password" placeholder="Enter confirm password">
                </label>

                <button type="submit"
                    class="bg-sky-500 md:w-28 w-[75%] h-8 rounded-md col-span-1 text-slate-50 mt-5 justify-self-center">Submit</button>
                @if (Request::url() === 'http://127.0.0.1:8000/login')
                    <p class="text-slate-50 mt-4 text-center">You don't an have account? <a href=""
                            class="text-green-400">Register!</a></p>
                @else
                <p class="text-slate-50 mt-4 text-center">Already an have account? <a href="{{route('login')}}"
                    class="text-green-400 underline underline-offset-2">Sign in!</a></p>
                @endif

            </form>
            <article class="md:text-8xl text-4xl grid content-start text-center text-slate-50 row-span-1">
                <p class="mt-5">Just Do It</p>
            </article>
        </div>
    </div>
@endsection
