@extends('layouts.app')

@section('title')
    Seja bem vindo {{ Auth::user()->name }}.
@endsection