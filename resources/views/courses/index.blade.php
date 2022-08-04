@extends('layouts.layout')

@section('title')
    Cours
@endsection

@section('content')
    <main class="mt-8">
        @include("partials.courses")

        {{-- {{ $courses->Links() }} --}}
    </main>
@endsection