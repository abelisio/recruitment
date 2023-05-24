@extends('layout')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <h2>Create Person</h2>
    </div>
</div>
<div id="message">
    @if (session()->has('message'))
         <span class="alert alert-success">   {{session()->get('message')}} </span>
     @endif
    </div>

<div class="card-body">
    <div class="row">
        <div class="col-lg-12 mt-1 mr-1">
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('persons.index') }}"> Back</a>
            </div>
        </div>
    </div>


<form action="{{ route('persons.store')}}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-group col-md-6" placeholder="your Name">
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>E-mail:</strong>
                <input type="text"  name="email" class="form-group col-md-6" placeholder="your E-mail"></textarea>
            </div>
        </div>

    </div>

    <button type="submit" class="btn btn-success">Create</button>
</form>
</div>
</div>
</div>
@endsection
