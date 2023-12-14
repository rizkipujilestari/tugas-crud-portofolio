@extends('layouts.main')

@section('container-main')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 p-2">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">{!! \Session::get('success') !!}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">{{$errors->first()}}</div>
                    @endif
                </div>

                <div class="col-9">
                    <h5 class="card-title fw-semibold mb-4">List Product</h5>
                </div>
                <div class="col-3">
                    <a href="{{ url('/products/create') }}" class="btn btn-primary">Add New Product</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Production</th>
                            <th>Option</th>
                        </tr>
                        @if (count($products) > 0)
                            @foreach($products as $col)
                            <tr>
                                <td>{{ $col->id }}</td>
                                <td>{{ $col->product_name }}</td>
                                <td>{{ $col->price }}</td>
                                <td>{{ $col->stock }}</td>
                                <td>{{ $col->production }}</td>
                                <td>
                                    <a href="/products/detail/{{ $col->id }}" class="p-1"><i class="ti ti-list-details"></i></a>
                                    <a href="/products/edit/{{ $col->id }}" class="p-1"><i class="ti ti-pencil"></i></a>
                                    <a href="/products/delete/{{ $col->id }}" class="p-1 text-danger"><i class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">No Record</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>  
    </div>
@endsection