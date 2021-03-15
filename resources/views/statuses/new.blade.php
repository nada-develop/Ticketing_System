@extends('master')


@section('page-styles')

@endsection

@section('page-title')
New Status
@endsection



@section('page-content')

<form action="/statuses" method="POST">
    @csrf
<label for="Status Name"></label>
<input type="text" name="name" >
<button type="submit"> Save</button>

</form>
@endsection








@section('page-scripts')

@endsection
