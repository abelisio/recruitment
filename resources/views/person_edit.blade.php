@extends('layout')

@section('content')

<div id="message">
@if (session()->has('message'))
     <span class="alert alert-success">   {{session()->get('message')}} </span>
 @endif
</div>

<div class="card mt-5">
    <div class="card-header">
        <h2>Edit Person</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mt-1 mr-1">
                <div class="float-right">
                    <a class="btn btn-primary" href="{{ route('persons.index') }}"> Back</a>
                </div>
            </div>
        </div>
<form action="{{ route('persons.update', ['person' => $person->id] ) }}" method="POST">
    @csrf

    <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{$person->name}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                <input type="text" name="email" value="{{$person->email}}" class="form-control">
            </div>
        </div>
    </div>

    <button class="btn btn-success" type="submit">Update</button>
</form>
</div>
@endsection
