@extends('layouts.default')

@section('content')
<main class="py-8">
    <div class="relative overflow-x-auto flex justify-center">
        <table class="w-1/2 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($archives as $archive)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $archive->title }}</th>
                    <th scope="row" class="px-6 py-4 font-medium text-blue-500 underline whitespace-nowrap dark:text-white">
                        <a href="{{ route('archive.show', $archive->id) }}">Visit</a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@stop