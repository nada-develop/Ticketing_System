@extends('master')


@section('page-styles')

@endsection

@section('page-title')
show Employee
@endsection

@section('page-content')
    <div class="container">
        <h1 class="display-2 mt-4 mb-4">Customer Profile</h1>
        <ul>
            <li>{{ $employee->name }}</li>
            <li>{{ $employee->mobile_number }}</li>
            <li>{{ $employee->home_number }}</li>
            <li>{{ $employee->email }}</li>
            <li>{{ $employee->address }}</li>
            <li>{{ $employee->hiring_date }}</li>
            <li>{{ $employee->city->city_name }}</li>
            <li>{{ $employee->department->name }}</li>
            <li>{{ $employee->user->name}}</li>
        </ul>
    </div>
@endsection







@section('page-scripts')

@endsection
