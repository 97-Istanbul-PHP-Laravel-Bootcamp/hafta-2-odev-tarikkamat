@extends('layout.admin')
@section('title','Products')
@section('page_title','Products')
@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Products</h3>
          <a href="{{ url('admin/product/add') }}" class="btn btn-primary btn-sm">Add Product</a>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th width = "10%">Id</th>
                <th width = "20%">Name</th>
                <th width = "20%">Category</th>
                <th width = "20%">Price ($)</th>
                <th width = "20%">Status</th>
                <th width = "10%"></th>
              </tr>
            </thead>
            <tbody class="list">
              <tr>
                <td>1</td>  
                <td>Watch</td>  
                <td>Men's Accessory</td>
                <td>120,00</td>  
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-primary"></i>
                    <span class="status">on</span>
                  </span>
                </td>
                <td>
                    <a href="{{ url('admin/product/edit') }}" class="btn btn-icon btn-primary"><i class="ni ni-settings-gear-65"></i></a>
                    <button class="btn btn-icon btn-danger" type="button">
                        <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                    </button>
                </td>
              </tr>
              <tr>
                <td>2</td>  
                <td>Ring</td>  
                <td>Women's Accessory</td>
                <td>450,00</td>  
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-primary"></i>
                    <span class="status">on</span>
                  </span>
                </td>
                <td>
                    <a href="{{ url('admin/product/edit') }}" class="btn btn-icon btn-primary"><i class="ni ni-settings-gear-65"></i></a>
                    <button class="btn btn-icon btn-danger" type="button">
                        <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                    </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>


@endsection