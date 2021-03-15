@extends('master')


@section('page-styles')

@endsection

@section('page-title')
Statuses
@endsection

@section('page-content')
<a href="statuses/create" class="btn btn-primary float-left mr-2">New</a>

<table class="table table-bordered">
    <tr>
        <th>Name</th>
    </tr>
@foreach ($status as $item)
<tr>
<td>{{ $item->name }}</td>
<td>
    <a href="statuses/{{ $item->id }}/edit" class="btn btn-primary float-left mr-2">Edit</a>

</td>
</tr>
@endforeach

</table>
@endsection








@section('page-scripts')

@endsection
