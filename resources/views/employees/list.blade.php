@extends('master')


@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/dt-global_style.css')}} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/custom_dt_multiple_tables.css')}} ">
@endsection

@section('page-title')
employees
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
                                    <th>Name</th>
                                    <th>Mobile Number</th>
                                    <th>Home Number</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Hiring Date</th>
                                    <th>City</th>
                                    <th>Department</th>
                                    <th>User_ID</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees_list as $employee)
                                <tr>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->mobile_number }}</td>
                                    <td>{{ $employee->home_number }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->address }}</td>
                                    <td>{{ $employee->hiring_date }}</td>
                                    <td>{{ $employee->city->city_name }}</td>
                                    <td>{{ $employee->department->name }}</td>
                                    <td>{{ $employee->user_id }}</td>
                                    <td class="text-center"> <button class="btn btn-outline-primary" ><a href="/employees/{{ $employee->id }}/edit">Edit</a></button> </td>
                                    <td class="text-center"> <button class="btn btn-outline-primary"><a href="/employees/{{ $employee->id }}">View</a></button> </td>
                                   <td> <form action="/employees/{{ $employee->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-primary" type="submit" >Delete</button>
                                    </form>
                                </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Mobile Number</th>
                                    <th>Home Number</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Hiring Date</th>
                                    <th>City</th>
                                    <th>Department</th>
                                    <th class="text-center">User_ID</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>

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
<script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('table.multi-table').DataTable({
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                   "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7,
                drawCallback: function () {
                    $('.t-dot').tooltip({ template: '<div class="tooltip status" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' })
                    $('.dataTables_wrapper table').removeClass('table-striped');
                }
            });
        } );
    </script>
@endsection
