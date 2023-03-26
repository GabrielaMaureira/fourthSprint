@extends('layouts.soccerLayout')
@section('title', 'Show')
@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold mb-4">Team details</h1>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="max-w-2xl mx-auto">
            <div class="flex flex-col md:flex-row justify-center items-center">
                @if($team->image)
                    <div class="w-full md:w-1/2 p-4">
                        <img class="w-full" src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}">
                    </div>
                @endif
                <div class="w-full md:w-1/2 p-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">Name:</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="name" name="name" value="{{ $team->name }}" readonly>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="description">Description</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="name" name="name" value="{{ $team->description }}" readonly>
                    </div>
                </div>
            </div>
        </div>
            <div class="flex  flex-row-reverse">
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('teams.index') }}">Back</a>
            </div>
    </div>
</div>
@endsection


