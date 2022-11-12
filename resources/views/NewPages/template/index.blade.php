@extends('layouts.dashboard')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/template_index.css') }}">
@endsection
@section('body')
    @livewire('template.index')
@endsection
