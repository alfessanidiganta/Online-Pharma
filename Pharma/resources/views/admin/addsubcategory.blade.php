@extends('admin.layouts.template')
@section('content')

<!-- Basic Layout -->
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Sub Category</h4>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Add New Sub-Category</h5>
                      <small class="text-muted float-end">Info.</small>
                    </div>
                    <div class="card-body">
                      <form action="{{route('storesubcategory')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Sub-Category Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="subcategory_name"name="subcategory_name" placeholder="............." />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Sub-Category Description</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              placeholder="............."
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Select category</label>
                          <div class="col-sm-10">
                          <select class="form-select" id="category" name="category" aria-label="Default select example">
                          <option selected>Category list</option>
                          <option value="1">OTC Medicine</option>
                          <option value="2">Healthcare Products</option>
                          <option value="3">Prescribed Medicine</option>
                          
                        </select>
                          </div>
                        </div>
                        
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Sub-Category</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</div>
@endsection