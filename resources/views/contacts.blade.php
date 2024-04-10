@extends('template')
@section('content')

    <div class="container my-5">
        <h1 class="pt-5">This is contacts.</h1>
        <a class="btn btn-primary" href="{{route('contacts.show',30)}}">Details</a>
        <a class="btn btn-warning" href="{{route('contacts.edit', 13)}}">Edit</a>
    </div>    

@endsection