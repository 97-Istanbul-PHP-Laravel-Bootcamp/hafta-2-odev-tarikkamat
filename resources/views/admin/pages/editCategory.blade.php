@extends('layout.admin')
@section('title','Edit Category')
@section('page_title','Edit Category')
@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Edit Category</h3>
        </div>
        <div class="card-wrapper">
          <!-- Form controls -->
          <div class="card">
            <!-- Card body -->
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlInput1">Name</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" value="Hats">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlSelect1">Parent Category</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Men's</option>
                    <option>Women's</option>
                    <option>None</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <a class="btn btn-default" href="{{ url('admin/categories') }}">Discard</a>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>


@endsection