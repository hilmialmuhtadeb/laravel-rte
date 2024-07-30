@extends('layouts.default')

@section('content')
<main class="lg:px-16 px-4">
    <div class="my-8">
        <form action="{{ route('archive.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="w-full mb-6 md:mb-0">
                <label class="block font-semibold mb-2" for="title">Title</label>
                <input name="title" class="appearance-none block w-full text-gray-700 border border-gray-300 focus:outline-blue-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="title" />
            </div>
            <div class="w-full mb-6 md:mb-0">
                <label class="block font-semibold mb-2" for="tinymce">Description</label>
                <x-forms.tinymce-editor/>
            </div>
            <div class="flex justify-end my-8">
                <button type="submit" class="px-8 py-2 rounded border border-gray-300 hover:border-black transition duration-200 ease-in-out font-semibold">Submit</button>
            </div>
        </form>
    </div>
</main>
@stop