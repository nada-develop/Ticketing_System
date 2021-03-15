@extends('master')


@section('page-styles')

@endsection

@section('page-title')
    show ticket
@endsection


@section('page-content')
<h1>Ticket details: {{ $ticket->comments->last() != null ? $ticket->comments->last()->status->name : "New Ticket" }}  </h1>
<table border="2" style="text-align: center" align="center">
    <tr>
        <th>Customer</th>
        <th>Title</th>
        <th>Description</th>
        <th>Category</th>
    </tr>
    <tr>
        <td>{{ $ticket->customer->name }}</li>
        <td>{{ $ticket->title }}</td>
        <td>{{ $ticket->description }}</td>
        <td>{{ $ticket->category->name }}</td>
    </tr>
    </table>

    <h1>Comments: </h1>
    <form action="/tickets/{{ $ticket->id }}" method="post">
        @csrf
        <input name="comment" id="comment" placeholder="Type your comment here">
        <select name="status" id="status">
            @foreach($statuses as $status)
                <option value="{{ $status->id }}">{{ $status->name }}</option>
            @endforeach
        </select>
        <button type="submit">ADD</button>
    </form>

    <table border="2" style="text-align: center" align="center">
        <tr>
            <th>Comment</th>
            <th>User</th>
            <th>Time</th>
            <th>Status</th>
        </tr>
        @foreach($ticket->comments->sortByDesc('created_at') as $comment)
        <tr>
            <td>{{ $comment->comment }}</td>
            <td>{{ $comment->user->name }}</td>
            <td>{{ $comment->created_at }}</td>
            <td>{{ $comment->status->name }}</td>
        </tr>
        @endforeach
    </table>

    <a href="/tickets">Back to Tickets</a>
@endsection



@section('page-scripts')

@endsection
