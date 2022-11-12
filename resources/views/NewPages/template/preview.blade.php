@extends('layouts.create-template-navbar')
@section('head')
    <link href="{{ asset('css/start.css') }}" rel="stylesheet">
@endsection
@section('body')
    @livewire('template.preview')
@endsection
