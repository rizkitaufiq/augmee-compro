@extends('layouts.app')

@section('content')
    <section>
        @include('homepage.hero')
        @include('homepage.services')
        @include('homepage.core-value')
        @include('homepage.portfolio')
        @include('homepage.browse')
    </section>
@endsection
