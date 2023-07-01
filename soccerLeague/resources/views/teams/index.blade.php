@extends('layouts.soccerLayout')
@section('title', 'Teams')
@section('content')

<div class="flex justify-between items-center mb-4">
	<h1 class="text-2xl font-bold mb-4">Teams</h1>
	<a href="{{ route('teams.create') }}" class="inline-block rounded border-2 border-gray-700 px-6 pt-2 pb-[6px] text-xs font-medium uppercase leading-normal text-gray-700 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10" data-te-ripple-init data-te-ripple-color="light">New Team</a>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
			@foreach($teams as $team)
            <tr class=" bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
				{{ $team->name }}
                </th>
                <td class="px-6 py-4">
				{{ $team->description }}
                </td>
                
                <!-- ICONS-->
                <td class="px-4 py-4 flex justify-center  ">
                    <a href="{{ route('teams.show', $team->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fa-sharp fa-solid fa-eye" title="show"></i></a>
                    <a href="{{ route('teams.edit', $team->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fa-sharp fa-solid fa-pen" title="edit"></i></a>
					
                    <form action="{{ route('teams.destroy', $team->id) }}" method="POST" class="inline" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 dark:text-blue-500 hover:underline"><i class="fa-solid fa-trash-can" title="delete"></i></button>
                    </form>
               
				</td>
            </tr>
            
           
			@endforeach
        </tbody>
    </table>
</div>
@endsection