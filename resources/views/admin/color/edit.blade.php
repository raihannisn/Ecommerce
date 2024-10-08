@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Color</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Color Name <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" name="name" required value="{{ old('name', $getRecord->name ) }}" placeholder="Color Name">
                                </div>
                                <div class="form-group">
                                    <label>Color Code <span style="color:red">*</span></label>
                                    <input type="color" class="form-control" name="name" required value="{{ old('code', $getRecord->code ) }}" placeholder="Code Color">
                                </div>
                                <div class="form-group">
                                    <label>Status <span style="color:red">*</span></label>
                                    <select name="status" class="form-control" required>
                                        <option {{ old('status', $getRecord->status) == 0 ? 'selected' : '' }} value="0">Active</option>
                                        <option {{ old('status', $getRecord->status) == 1 ? 'selected' : '' }} value="1">Inactive</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-danger float-right" onclick="window.location='{{ url('admin/color/list') }}'">Back</button>
                            </div>
                        </form>
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
