@extends('master')


@section('page-styles')

@endsection

@section('page-title')
show Categories
@endsection


@section('page-content')

<div class="table-responsive">
    <table class="table mb-4 contextual-table">
        <thead>
            <tr class="">
                <th class="text-center">ID</th>
                    <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-success">
                <td class="text-center">{{$category->id}}</td>
                <td>{{$category->name}}</td>
            </tr>
        </tbody>
    </table>
</div>


@endsection





@section('page-scripts')

@endsection
