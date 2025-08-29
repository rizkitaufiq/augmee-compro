@extends('layouts.app')

@section('content')
    <section>
        @include('homepage.hero')
        @include('homepage.services')
        @include('homepage.core-value')
        @include('homepage.portfolio')
    </section>
@endsection
