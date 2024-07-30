@extends('layouts.default')

@section('content')
<main class="w-3/4 flex mx-auto py-8 lg:px-16 px-4">
    <div>
        <h1 class="font-bold text-2xl mb-4">{{ $archive->title }}</h1>
        {!! $archive->description !!}
    </div>
</main>
@stop