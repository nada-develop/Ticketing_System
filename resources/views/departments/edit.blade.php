@extends('master')


@section('page-styles')

@endsection

@section('page-title')
Edit Departments
@endsection


@section('page-content')

<div>
    <form action="/departments/{{ $department->id }}" method="POST">
        @method('PUT')
        @csrf
      <label>Edit Department</label>
      <input type="text"  name="dname" value="{{$department->name}}">
      <button type="submit">Update</button>
    </form>
  </div>
@endsection


@section('page-scripts')

@endsection
