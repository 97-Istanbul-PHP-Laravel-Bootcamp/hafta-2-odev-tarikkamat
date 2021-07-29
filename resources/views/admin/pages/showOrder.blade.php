@extends('layout.admin')
@section('title','#154 Order')
@section('page_title','#154 Order')
@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">#154 Order</h3>
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
                  <label class="form-control-label" for="exampleFormControlInput1">Total ($)</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" value="126,70" disabled>
                </div>
              </form>
            </div>
          </div>
        </div>


        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Products</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>Name</th>
                  <th>Amout</th>
                  <th>Price</th>
                  <th>Tax (10%)</th>
                  <th>Total ($)</th>
                </tr>
              </thead>
              <tbody class="list">
                <tr>
                  <td>Watch</td>
                  <td>2</td>
                  <td>20</td>
                  <td>4</td>
                  <td>44</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>


        <!-- Card footer -->
        <div class="card-footer py-4">
          <a class="btn btn-default" href="{{ url('admin/orders') }}">Discard</a>
          <button type="button" class="btn btn-primary">Done</button>
        </div>
      </div>
    </div>
  </div>


@endsection