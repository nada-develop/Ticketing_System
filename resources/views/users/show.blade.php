@extends('master')


@section('page-styles')

@endsection

@section('page-title')
Show Users
@endsection


@section('page-content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table class="multi-table table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>PASSWORD</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password }}</td>

                            </tr>

                           </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </div>
</div>
@endsection







@section('page-scripts')

@endsection
