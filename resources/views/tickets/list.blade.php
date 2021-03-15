@extends('master')


@section('page-styles')

@endsection

@section('page-title')
tickets
@endsection

@section('page-content')
<a href="/tickets/create">New</a>
<table>
    <tr>
        <th>Status</th>
        <th>CUSTOMER NAME</th>
        <th>Title</th>
        <th>DESCRIPTION</th>
        <th>CATEGORY</th>
        <th>EMPLOYEE NAME</th>
    </tr>

@foreach ($tickets as $ticket)
    <tr>
        <td>{{ $ticket->comments->last() != null ? $ticket->comments->last()->status->name : "New Ticket" }}</td>
        <td>{{ $ticket->customer->name }}</li>
        <td>{{ $ticket->title }}</td>
        <td>{{ $ticket->description }}</td>
        <td>{{ $ticket->category->name }}</td>
        <td>{{ $ticket->user->name }}</td>
        <td>
            <a href="/tickets/{{ $ticket->id }}">View</a>
            <a href="/tickets/{{ $ticket->id }}/edit">Edit</a>
        </td>
    </tr>
    @endforeach

    </table>


@endsection








@section('page-scripts')

@endsection
