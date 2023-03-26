@extends('layouts.soccerLayout')
@section('title', 'Show')
@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold mb-4">Match details</h1>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg"> <!--capa gris-->
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"><!--capa blanca-->
        <div class="max-w-2xl mx-auto flex justify-center"> <!--contiene info e imagen-->
                <div class="w-full md:w-1/2 p-4 h-36">
                    <img class="w-full" src="{{ asset('storage/images/showview.png') }}" alt="logo">
                </div>
                <div class="w-full md:w-1/2 p-2 h-full ">
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="name">Locals </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="name" name="name" value="{{ $matches->localTeam->name }}" readonly><br>
                    </div>
                    <div >
                        <label class="block text-gray-700 font-bold mb-2" for="name">Visitors</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="name" name="name" value="{{ $matches->visitingTeam->name }}" readonly>
                    </div>
                    <div >
                        <label class="block text-gray-700 font-bold mb-2" for="name">Match Date</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="name" name="name" value="{{ $matches->match_date }}" readonly>
                    </div>
                    <div >
                        <label class="block text-gray-700 font-bold mb-2" for="name">Goals from locals</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="name" name="name" value="{{ $matches->local_goals }}" readonly>
                    </div>
                    <div >
                        <label class="block text-gray-700 font-bold mb-2" for="name">Goals from visitors</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="name" name="name" value="{{ $matches->visiting_goals }}" readonly>
                    </div>
                </div>
        </div>
            <div class="flex  flex-row-reverse">
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('teams.index') }}">Back</a>
            </div>
    </div>
</div>
@endsection