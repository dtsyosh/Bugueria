@extends('layouts.master')

@section('content')
    <h1>{{ $ingrediente -> nome }}</h1>
    {!! dd($ingrediente) !!}

@endsection