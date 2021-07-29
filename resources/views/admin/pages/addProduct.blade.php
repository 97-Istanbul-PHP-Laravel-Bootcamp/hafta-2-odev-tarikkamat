@extends('layout.admin')
@section('title','Add Product')
@section('page_title','Add Product')
@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Add Product</h3>
        </div>
        <div class="card-wrapper">
          <!-- Form controls -->
          <div class="card">
            <!-- Card body -->
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlInput1">Name</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Tissot PRC 200">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlTextarea1">Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"> </textarea>
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlSelect1">Category</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>A</option>
                    <option>B</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlSelect1">Stock</label>
                  <input class="form-control" type="number" value="" id="example-number-input">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlInput1">Stock Code</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="TSPC004">
                </div>
                <div class="form-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                    <label class="custom-file-label" for="customFileLang"></label>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Card footer -->
        <div class="card-footer py-4">
          <a class="btn btn-default" href="{{ url('admin/products') }}">Discard</a>
          <button type="button" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </div>


@endsection