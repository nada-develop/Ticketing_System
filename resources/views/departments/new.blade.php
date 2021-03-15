@extends('master')


@section('page-styles')

@endsection

@section('page-title')
New Department
@endsection



@section('page-content')
    <form action="/departments" method="POST">
        <div>
            <h1>Add new Department</h1>
            <hr>

            <label for="dname"><b>Name</b></label>
            <input type="text" placeholder="Enter Department name" name="dname">
            <button type="submit">Save</button>
          </div>
</form>
@endsection




@section('page-scripts')

@endsection

