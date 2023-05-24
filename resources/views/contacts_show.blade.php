@extends('layout')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <h2>Contact:</h2>
    </div>
</div>

<form action="{{route('persons.destroy', ['person' => $person->id])}}" method="post">
@csrf
<input type="hidden" name="_method" value="DELETE">

<table class="table table-danger ">
    <thead>
        <tr>

        </tr>
    </thead>
    <tr>
        <th scope="row">{{ $person->name}}</th>

    </tr>
</tbody>
</table>
<button class="btn btn-danger type="submit">Delete</button>
<div class="card-body">
    <div class="row">
        <div class="col-lg-12 mt-1 mr-1">
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('persons.index') }}"> Back</a>
            </div>
        </div>
    </div>
</form>
@endsection
