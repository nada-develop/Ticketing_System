@extends('master')


@section('page-styles')

@endsection

@section('page-title')
Edit Statuses
@endsection

@section('page-content')
<form action="/statuses/{{ $status->id }}" method="POST">
    @csrf
    @method("PUT")
<label>Status Name</label>
<input type="text" name="name" value="{{ $status->name }}" >
<button type="submit"> Save</button>


</form>
@endsection






@section('page-scripts')

@endsection
