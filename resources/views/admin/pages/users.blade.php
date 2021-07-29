@extends('layout.admin')
@section('title','Users')
@section('page_title','Users')
@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Users</h3> 
          <a href="{{ url('admin/user/add') }}" class="btn btn-primary btn-sm">Add User</a>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th width = "10%">Id</th>
                <th width = "20%">Username</th>
                <th width = "20%">Name Surname</th>
                <th width = "20%">Role</th>
                <th width = "20%">Status</th>
                <th width = "10%"></th>
              </tr>
            </thead>
            <tbody class="list">
              <tr>
                <td>1</td>  
                <td>admin</td>  
                <td>Tarık KAMAT</td>
                <td>Admin</td>  
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-primary"></i>
                    <span class="status">on</span>
                  </span>
                </td>
                <td>
                    <a href="{{ url('admin/user/edit') }}" class="btn btn-icon btn-primary btn-inner--icon"><i class="ni ni-settings-gear-65"></i></a>
                    <button class="btn btn-icon btn-danger" type="button">
                        <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                    </button>
                </td>
              </tr>
              <tr>
                <td>2</td>  
                <td>mustafacetindag</td>  
                <td>Muhammed Mustafa Çetindağ</td>
                <td>Customer</td>  
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-warning"></i>
                    <span class="status">off</span>
                  </span>
                </td>
                <td>
                    <a href="{{ url('admin/user/edit') }}" class="btn btn-icon btn-primary btn-inner--icon"><i class="ni ni-settings-gear-65"></i></a>
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