@extends('master')


@section('page-styles')

@endsection

@section('page-title')
Categories
@endsection


@section('page-content')

    <div class="table-responsive">
        <table class="table mb-4 contextual-table">
            <thead>
                <tr class="">
                    <th class="text-center">ID</th>
                    <th>Name</th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- <tr class="table-default">
                    <td class="text-center">1</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>johndoe@yahoo.com</td>
                </tr>
                <tr class="table-primary">
                    <td class="text-center">2</td>
                    <td>Andy</td>
                    <td>King</td>
                    <td>andyking@gmail.com</td>
                </tr> --}}
                {{-- <tr class="table-secondary">
                    <td class="text-center">3</td>
                    <td>Lisa</td>
                    <td>Doe</td>
                    <td>lisadoe@live.com</td>
                </tr> --}}
                @foreach ($categories_list as $category)
                <tr class="table-success">
                    <td class="text-center">{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td class="text-center"> <button class="btn btn-outline-primary" ><a href="/categories/{{ $category->id }}/edit">Edit</a></button> </td>
                    <td class="text-center"> <button class="btn btn-outline-primary"><a href="/categories/{{ $category->id }}">View</a></button> </td>
                    <td>
                    <form action="/categories/{{ $category->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-primary" type="submit" >Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach

                {{-- <tr class="table-warning">
                    <td class="text-center">5</td>
                    <td>Shaun</td>
                    <td>Park</td>
                    <td>spark@adobe.com</td>
                </tr>
                <tr class="table-danger">
                    <td class="text-center">6</td>
                    <td>Nia</td>
                    <td>Hillyer</td>
                    <td>niahill@gmail.com</td>
                </tr>

                <tr class="table-info">
                    <td class="text-center">7</td>
                    <td>Marry</td>
                    <td>McDonald</td>
                    <td>marryMcD@gmail.com</td>
                </tr>
                <tr class="table-dark">
                    <td class="text-center">8</td>
                    <td>Amy</td>
                    <td>Diaz</td>
                    <td>amydiaz@gmail.com</td>
                </tr> --}}
            </tbody>
        </table>
    </div>


@endsection





@section('page-scripts')

@endsection
