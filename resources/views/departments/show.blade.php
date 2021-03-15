@extends('master')


@section('page-styles')

@endsection

@section('page-title')
show Department
@endsection


@section('page-content')

    <h1>{{$department->id}}</h1>
    <h1>{{$department->name}}</h1>

@endsection




@section('page-scripts')

@endsection
