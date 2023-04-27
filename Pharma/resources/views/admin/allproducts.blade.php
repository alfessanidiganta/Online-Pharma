@extends('admin.layouts.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Product List</h4>
<div class="card">
                <h5 class="card-header">All Products</h5>
                @if(session()->has('message'))
                <div class ="alert alert-success">
              {{session()->get('message')}}
              </div>
                @endif
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>Id</th>
                        <th>product Name</th>
                        <th>Short Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Actions</th>
                      </tr>
</thead>
                    <tbody class ="table-border-bottom-0">
                      @foreach ($products as $product)
                      <tr>
                      <td>1{{$product->id}}</td>
                        <td>{{$product->prodcut_name}}</td>
                        <td>{{$product->product_short_des}}</td>
                        <td>
                        <img src="{{ asset('upload/' . $product->product_img) }}" width=150px
                                                height=150px alt="Product Image" class="img-fluid">
                          
                        </td>
                        <td>100</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-warning">Delete</a>
                        </td>
                    
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
</div>

@endsection