@extends('master')


@section('page-styles')

@endsection

@section('page-title')
Edit Employees
@endsection

@section('page-content')

@section('page-content')
    <div>
        <h1>New Employee</h1>
        <form action="/employees" method="POST">
            @csrf
            <label>Name : </label>
            <input type="text"  name="ename" >
            <label>Mobile Number : </label>
            <input type="text"  name="ephone">
            <label>Home Number  : </label>
            <input type="text"  name="ehome">
            <label>Email : </label>
            <input type="text"  name="eemail">
            <label>Address : </label>
            <input type="text"  name="eaddress">
            <label>Hiring Date : </label>
            <input type="date"  name="hiring_date">
            <label>City : </label>
            <input type="text"  name="city">
            <label>Department : </label>
            <input type="text"  name="department">
            <label>User Id : </label>
            <input type="text"  name="user_id ">

            <button type="submit">Save</button>
        </form>
    </div>
@endsection





@section('page-scripts')

@endsection
