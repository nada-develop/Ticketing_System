@extends('master')


@section('page-styles')

@endsection

@section('page-title')
Edit Employees
@endsection

@section('page-content')

@section('page-content')
    {{-- <div>
        <h1>New Employee</h1>
        <form action="/employees" method="POST">
            @csrf
            <label>Name : </label>
            <input type="text"  name="ename" >
            <label>Mobile Number : </label>
            <input type="text"  name="ephone">
            <label>Home Number  : </label>
            <input type="text"  name="ehome">
            <label>Email : </label>
            <input type="text"  name="eemail">
            <label>Address : </label>
            <input type="text"  name="eaddress">
            <label>Hiring Date : </label>
            <input type="date"  name="hiring_date">
            <label>City : </label>
            <input type="text"  name="city">
            <label>Department : </label>
            <input type="text"  name="department">
            <label>User Id : </label>
            <input type="text"  name="user_id ">

            <button type="submit">Save</button>
        </form>
    </div> --}}
    @extends('master')


@section('page-styles')

@endsection

@section('page-title')
New Employees
@endsection

@section('page-content')

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <form action="/employees/create"  method="POST">
                            @csrf

                            <div class="form-group mb-4">
                                <input type="text" class="form-control"  name="ename"  placeholder="Full Name *">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" name="ephone"  placeholder="Mobile Number *">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  name="ehome"  placeholder="Home Number *">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  name="eemail"  placeholder="Email Address *">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Address</span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea" name="eaddress"></textarea>
                              </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  name="hiring_date"  placeholder="Hiring Date *">
                            </div>
                            <div class="form-group">
                            <select   name="city" class="form-control form-small">
                                <option selected> City Name</option>
                                @foreach($city as $item)
                                <option value="{{ $item->id }}" >{{ $item->city_name }}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                            <select   name="department" class="form-control form-small">
                                <option selected> Department Name</option>
                                @foreach($department as $item)
                                <option value="{{ $item->id }}">{{ $item->name }} </option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                            {{-- <select   name="user_id" class="form-control form-small">
                                <option selected> User Name</option>
                                @foreach($user as $item)
                                <option value="{{ $item->id }}">{{ $item->name }} </option>
                                @endforeach
                            </select> --}}

                                <input type="text" class="form-control"  name="user_id"  placeholder="UserName *">


                        </div>
                            <small id="emailHelp" class="form-text text-muted">*Required Fields</small>
                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
        </div>
    </div>
</div>

@endsection





@section('page-scripts')

@endsection

@endsection





@section('page-scripts')

@endsection
