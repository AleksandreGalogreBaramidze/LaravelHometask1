@extends("layouts.app")

@section('title',$title)

@section('content')

    @include('components.backButton')
    <h1>Welcome</h1>
    {{ $title }}

@endsection