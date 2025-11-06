@extends('layouts.master')
@section('title', 'Home')

@section('content')

        @include('layouts.partial.hero')
        @include('layouts.partial.service')
        @include('layouts.partial.apropos')
        @include('layouts.partial.fourniture') 
        @include('layouts.partial.blog')

@endsection