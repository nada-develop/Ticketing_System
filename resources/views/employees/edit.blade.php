@extends('master')


@section('page-styles')

@endsection

@section('page-title')
Edit Employees
@endsection

@section('page-content')

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <form action="/employees/{{ $emp->id }}"  method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-4">
                                <input type="text" class="form-control"  name="ename" value="{{$emp->name}}" placeholder="Full Name *">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" name="ephone" value="{{$emp->mobile_number }}" placeholder="Mobile Number *">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  name="ehome"  value="{{$emp->home_number }}" placeholder="Home Number *">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  name="eemail"  value="{{$emp->email }}" placeholder="Email Address *">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Address</span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea" name="eaddress">{{ $emp->address }}</textarea>
                              </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  name="hiring_date"  value="{{$emp->hiring_date }}" placeholder="Hiring Date *">
                            </div>
                            <div class="form-group">
                            <select   name="city" class="form-control form-small">
                                @foreach($city as $item)
                                <option value="{{ $item->id }}"  {{ $item->id ==  $emp->city_id ? 'selected' : ''}}>{{ $item->city_name }} </option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                            <select   name="department" class="form-control form-small">
                                @foreach($department as $item)
                                <option value="{{ $item->id }}"  {{ $item->id ==  $emp->department_id ? 'selected' : ''}}>{{ $item->name }} </option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                            <select   name="user_id" class="form-control form-small">
                                @foreach($user as $item)
                                <option value="{{ $item->id }}"  {{ $item->id ==  $emp->user_id ? 'selected' : ''}}>{{ $item->name }} </option>
                                @endforeach
                            </select>

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
