@extends('master')


@section('page-styles')

@endsection

@section('page-title')
Edit Employees
@endsection

@section('page-content')

<div>
    <form action="/employees/{{ $emp->id }}" method="POST">
        @method('PUT')
        @csrf
        <h1>Edit Employees</h1>
      <label>Name : </label>
      <input type="text"  name="ename" value="{{$emp->name}}">
      <label>Mobile Number : </label>
      <input type="text"  name="ephone" value="{{$emp->mobile_number }}">
      <label>Home Number  : </label>
      <input type="text"  name="ehome" value="{{$emp->home_number }}">
      <label>Email : </label>
      <input type="text"  name="eemail" value="{{$emp->email }}">
      <label>Address : </label>
      <input type="text"  name="eaddress" value="{{$emp->address }}">
      <label>Hiring Date : </label>
      <input type="text"  name="hiring_date" value="{{$emp->hiring_date }}">
      <label>City : </label>
      <input type="text"  name="city" value="{{$emp->city_id }}">
      <label>Department : </label>
      <input type="text"  name="department" value="{{$emp->department_id }}">
      <label>User Id : </label>
      <input type="text"  name="user_id " value="{{$emp->user_id }}">
      <button type="submit">Update</button>
    </form>
  </div>
@endsection





@section('page-scripts')

@endsection
