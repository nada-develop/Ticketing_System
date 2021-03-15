@extends('master')


@section('page-styles')

@endsection

@section('page-title')
New ticket
@endsection

@section('page-content')

<form action="/tickets" method="POST">
    @csrf
    <div>
        <label >Title</label>
        <input type="text"  name="title" >
    </div>
    <div>
        <label >Description</label>
        <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
    </div>
   <select name="cat_id">
       <option selected>Select Category</option>
    @foreach($categories as $cat)
        <option value="{{ $cat->id }}"> {{ $cat->name }}</option>
    @endforeach
   </select>

   <select name="cust_id">
    <option selected>Select Customer</option>
    @foreach($customers as $cust)
        <option value="{{ $cust->id }}">{{ $cust->name }}</option>
    @endforeach
   </select>

    <button type="submit">Save</button>
</form>



@endsection







@section('page-scripts')

@endsection
