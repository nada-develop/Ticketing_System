@extends('master')


@section('page-styles')

@endsection

@section('page-title')
Departments
@endsection


@section('page-content')



    @foreach ($departments_list as $department)
    <h1>{{$department->id}}</h1>
    <h1>{{$department->name}}</h1>
    @endforeach


@endsection





@section('page-scripts')

@endsection
