@extends('layouts.soccerLayout')
@section('title', 'Home')
@section('content')

<div class="relative overflow-hidden bg-cover bg-no-repeat" style="background-image: url('{{ asset('storage/images/bg-home3png.png') }}'); height: 500px">
        
                <div class="flex h-full items-center justify-center">
                    <div class="px-6 text-center text-white md:px-12">
                        <h1 class="mb-6 text-5xl font-bold">SOCCER MANAGEMENT</h1>
                        <h3 class="mb-8 text-3xl font-bold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta eum dignissimos ipsam perferendis incidunt suscipit eos deleniti porro quidem exercitationem.</h3>
                                    <a href="{{ route('teams.index') }}" class="inline-block rounded border-2 border-neutral-50 px-6 pt-2 pb-[6px] text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init data-te-ripple-color="light">TEAMS</a>

                                        <a href="{{ route('matches.index') }}" class="inline-block rounded border-2 border-neutral-50 px-6 pt-2 pb-[6px] text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init data-te-ripple-color="light">MATCHES</a>          
                    </div>  
                </div>
            </div>
</div>


@endsection                   