@extends('admin.layouts.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Pharmacy List</h4>
<div class="card">
                <h5 class="card-header">All Pharmacies</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>Id</th>
                        <th>pharmacy Name</th>
                        <th>Products</th>
                        <th>Actions</th>
                      </tr>

                      <td>1</td>
                        <td>Oshudpotro</td>
                        <td>10</td>
                        <td>100</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-warning">Delete</a>
                        </td>
                    

                    </tbody>
                  </table>
                </div>
              </div>
</div>

@endsection