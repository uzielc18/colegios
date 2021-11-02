@extends('layouts.master')
@section('page_title', 'My Dashboard')

@section('content')
    <h2>{{__('app.bienvenido')}} {{ Auth::user()->name }}. {{__('app.bienvenido')}}</h2>
    @endsection
