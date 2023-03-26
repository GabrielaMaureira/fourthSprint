@extends('layouts.soccerLayout')
@section('title', 'Create team')
@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold mb-4">Create New Team</h1>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <form  action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">Name:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="name" name="name" required><br>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="description">Description:</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" required></textarea><br>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="image">Image:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" id="image" name="image"><br>
            </div>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Create</button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('teams.index') }}">Back</a>
        </form>
</div>

@endsection 

