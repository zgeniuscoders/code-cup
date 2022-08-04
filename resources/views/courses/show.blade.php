@extends("layouts.layout")

@section('title')
    {{ $course->title }}
@endsection

@section('content')
    <course  :course="{{ $course }}" :watched="{{ $watched }}"/>
@endsection