@extends('master')


@section('page-styles')

@endsection

@section('page-title')
Edit categories
@endsection

@section('page-content')

  <div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <form action="/categories/{{ $category->id }}"  method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" id="lFullName" name="catname" value="{{$category->name}}" placeholder="Category Name">
                            </div>
                            <small id="emailHelp" class="form-text text-muted">*Required Fields</small>
                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        </div>
@endsection





@section('page-scripts')

@endsection
