@extends('layout')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <h2>Contact Management Web application</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mt-1 mr-1">
                <div class="float-right">
<a class="btn btn-success" href="{{ route('contacts.create') }}">Create New Contact</a>
                </div>
            </div>
        </div>
<h2>Contact</h2>

<div class="row mt-2">
    <div class="col-lg-12">
    <table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th width="280px">Action</th>
    </tr>
@foreach ($contacts as $contact )

<tr>
        <td>{{ $contact->name }}</td>
        <td>
            <form action="" method="">
        <a class="btn btn-secondary" href="{{route('contacts.edit',['contact'=>$contact->id]) }}">Edit contact</a>
        <a class="btn btn-info" href="{{route('contacts.show', ['contact' => $contact->id])}}">Show contact</a> </li>
        @csrf
            </form>
    </td>
</tr>
@endforeach
</table>
</div>
</div>
    </div>
@endsection






