@extends('layouts.app')

@section('content')

    <!-- Header -->
    @include('partials.header')
    
    <!-- Services -->
    @include('partials.services')
    
    @include('partials.portfolio')
    
    <!-- Promotion -->
    @include('partials.promotion')

    <!-- Team -->
    @include('partials.team')

    <!-- Contact -->
    @include('partials.contact')
    
@endsection