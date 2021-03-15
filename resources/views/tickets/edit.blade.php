@extends('master')


@section('page-styles')

@endsection

@section('page-title')
Edit Categories
@endsection

@section('page-content')

    <form action="/customers/{{ $ticket->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label >Tilte</label>
            <input type="text"  name="title" value="{{ $ticket->title }}">
        </div>
        <div>
            <label >Description</label>
            <input type="text"  name="desc" value="{{ $ticket->description }}">
        </div>
        <label >Category</label>
       <select  name="cat_id">
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}" {{ $cat->id ==  $ticket->category_id ? 'selected' : ''}}>{{ $cat->name }} </option>
        @endforeach
       </select>
        <label for=""> Cutomer</label>
       <select  name="cust_id" >
        @foreach($customers as $cust)
            <option value="{{ $cust->id }}" {{ $cust->id ==  $ticket->customer_id ? 'selected' : ''}}>{{ $cust->name }} </option>
        @endforeach
       </select>
        <button type="submit">Save</button>
        <button  href="/tickets">Back </button>

    </form>

@endsection







@section('page-scripts')

@endsection
