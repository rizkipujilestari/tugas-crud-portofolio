@extends('layouts.main')

@section('container-main')
    <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Add New Product</h5>
          <div class="card">
            <div class="card-body">
                <form action="{{ url('/products/store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Stock</label>
                        <input type="text" class="form-control" id="stock" name="price" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Production</label>
                        <input type="text" class="form-control" id="production" name="production" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                    </div>

                    <div class="col-lg-3 offset-9">
                        <input type="submit" class="btn btn-primary m-3" value="Submit" id="save" />
                        <a href="{{ url('/products') }}" class="btn btn-dark"> Cancel </a>
                    </div>
                </form>
            </div>
          </div>
          
        </div>
      </div>
@endsection