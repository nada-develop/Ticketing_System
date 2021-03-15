@extends('master')


@section('page-styles')

@endsection

@section('page-title')
employees
@endsection


@section('page-content')
    <div>
        <h1>employees List</h1>
        <a href="/employees/create">New employee</a>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Home Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Hiring Date</th>
                <th>City</th>
                <th>Department</th>
                <th>Actions</th>

            </tr>
            @foreach($employees_list as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->mobile_number }}</td>
                <td>{{ $employee->home_number }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->hiring_date }}</td>
                <td>{{ $employee->city->city_name }}</td>
                <td>{{ $employee->department->name }}</td>
                <td>{{ $employee->user_id }}</td>
                <td>
                    <a href="/employees/{{ $employee->id }}">View</a>
                    <a href="/employees/{{ $employee->id }}/edit">Edit</a>
                    <form action="/employees/{{ $employee->id }}" method="POST">
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection





@section('page-scripts')

@endsection
