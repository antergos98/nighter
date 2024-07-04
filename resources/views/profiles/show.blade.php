@extends('layouts.app')


@section('content')
    <h1>Profile of {{ $user->username }}</h1>
    {{ $user->profile->age }} years old
@endsection
