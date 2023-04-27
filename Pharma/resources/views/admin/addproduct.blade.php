@extends('admin.layouts.template')
@section('content')

<!-- Basic Layout -->
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Products</h4>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Add New Product</h5>
                      <small class="text-muted float-end">Info.</small>
                    </div>
                    <div class="card-body">
                      <form action="{{route('storeproduct')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="product_name"name="product_name" placeholder="............." />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Product short Description</label>
                          <div class="col-sm-10">
                          <textarea class= "form-control" name="product_short_des" id="product_short_des" cols="30" rows="10"></textarea>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Product long Description</label>
                          <div class="col-sm-10">
                            <textarea class= "form-control" name="product_long_des" id="product_long_des" cols="30" rows="10"></textarea>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Product Price</label>
                          <div class="col-sm-10">
                            <input
                              type="number"
                              class="form-control"
                              id="price"
                              name="price"
                              placeholder="............."
                            />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Product Quantity</label>
                          <div class="col-sm-10">
                            <input
                              type="number"
                              class="form-control"
                              id="quantity"
                              name="quantity"
                              placeholder="............."
                            />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Select category</label>
                          <div class="col-sm-10">
                          <select class="form-select" id="product_category_id" name="product_category_id" aria-label="Default select example">
                          <option selected>Category list</option>
                          <option value="1">Healthcare Products</option>
                          <option value="2">OTC Medicines</option>
                          <option value="3">Prescribed Medicine</option>
                        </select>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Select sub-category</label>
                          <div class="col-sm-10">
                          <select class="form-select" id="category" name="category" aria-label="Default select example">
                          <option selected>Sub Category list</option>
                          <option value="1">fever</option>
                          <option value="2">Cough</option>
                          <option value="3">Gastrointestinal</option>
                          <option value="4">Infection</option>
                        </select>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Select Pharmacies</label>
                          <div class="col-sm-10">
                          <select class="form-select" id="category" name="category" aria-label="Default select example">
                          <option selected>Pharmacy list</option>
                          <option value="1">Adarsho Pharmacy</option>
                          <option value="2">Haque Pharmacy </option>
                          <option value="3">Siraj Pharmacy</option>
                          <option value="4">Crescent Pharmacy</option>
                          <option value="5">R R Pharmaco</option>
                        </select>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Product Image</label>
                          <div class="col-sm-10">
                          <input class="form-control" type="file" id="product_img" name="product_img"/>
                          </div>
                        </div>
                        
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</div>
@endsection