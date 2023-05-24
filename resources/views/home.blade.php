@extends('layout')

@section('content')

<div id ="logo-img">
    <a href="{{ route('home') }}">
        <img
          src="{{asset('assets/img/contacts-logo.jpg')}}" width="700" height="400" />
      </a>
    </div>


@endsection
