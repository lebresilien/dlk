@extends('layout.app')

@section('body')

    @include('layout.partials.banner', ['type' => 'other', 'title' =>  __('services') ]) 

    @include('layout.partials.service')
    
@endsection