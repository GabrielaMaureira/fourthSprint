@extends('layouts.soccerLayout')
@section('title', 'Matches')
@section('content')

@if (session('success'))
    <div class="mt-4 bg-green-500 border border-green-600 text-white px-4 py-3 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold mb-4">Matches</h1>
    <a href="{{ route('matches.create') }}" class="inline-block rounded border-2 border-gray-700 px-6 py-2 text-xs font-medium uppercase leading-normal text-gray-700 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10" data-te-ripple-init data-te-ripple-color="light">New Match</a>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Locals
                </th>
                <th scope="col" class="px-6 py-3">
                    Visitors
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Goals from locals
                </th>
                <th scope="col" class="px-6 py-3">
                    Goals from visitors
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($matches as $match)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $match->localTeam->name }}</td>
                <td class="px-6 py-4">{{ $match->visitingTeam->name }}</td>
                <td class="px-6 py-4">{{ $match->match_date }}</td>
                <td class="px-6 py-4">{{ $match->local_goals }}</td>
                <td class="px-6 py-4">{{ $match->visiting_goals }}</td>
                <!-- ICONS-->
                <td class="px-6 py-4 flex justify-center -space-x-2">
                    <a href="{{ route('matches.show', $match->id) }}" class="text-blue-600 dark:text-blue-500 hover:underline" title="Show"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('matches.edit', $match->id) }}" class="text-blue-600 dark:text-blue-500 hover:underline" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ route('matches.destroy', $match->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this match?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 dark:text-blue-500 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="mt-4">
        {{ $matches->links() }}
</div>
@endsection
