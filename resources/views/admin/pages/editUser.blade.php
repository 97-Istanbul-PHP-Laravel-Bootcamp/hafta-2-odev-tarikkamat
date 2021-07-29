@extends('layout.admin')
@section('title','Edit User')
@section('page_title','Edit User')
@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Edit User</h3>
        </div>
        <div class="card-wrapper">
          <!-- Form controls -->
          <div class="card">
            <!-- Card body -->
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlInput1">Name</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" value="Tarık">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlInput1">Surname</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" value="Kamat">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlInput1">Username</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" value="admin">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlInput1">Mail</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" value="demo@demo.com">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlInput1">Password</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" value="">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlInput1">Balence ($)</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" value="126,70" disabled>
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlSelect1">Role</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Admin</option>
                    <option>Sales Manager</option>
                    <option>Customer</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <a class="btn btn-default" href="{{ url('admin/users') }}">Discard</a>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>


@endsection