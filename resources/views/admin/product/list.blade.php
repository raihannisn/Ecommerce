@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="content-wrapper">
       <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Product List</h1>
            </div>
            <div class="col-sm-6" style="text-align: right;">
              <a href="{{ url('admin/product/add') }}" class="btn btn-primary">Add New Product</a>
            </div>
          </div>
        </div>
      </section>
  
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

              @include('admin.layouts._message')

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Product List</h3>
                </div>
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Meta Title</th>
                        <th>Meta Description</th>
                        <th>Meta Keywords</th>
                        <th>Created By</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
@endsection

@section('script')
<script src="{{ url('public/assets/dist/js/pages/dashboard3.js') }}"></script>
@endsection