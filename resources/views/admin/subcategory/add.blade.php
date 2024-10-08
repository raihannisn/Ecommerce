@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create New @extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create New Sub Category</h1>
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
                                    <label>Category Name <span style="color:red">*</span></label>
                                    <select class="form-control" name="category_id">
                                        <option value="">Select</option>
                                        @foreach($getCategory as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Sub Category Name <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" name="name" required value="{{ old('name') }}" placeholder="Sub Category Name">
                                </div>
                                <div class="form-group">
                                    <label>Slug <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" name="slug" required value="{{ old('slug') }}" placeholder="Slug Example. URL">
                                    <div style="color:red;">{{ $errors->first('slug') }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Status <span style="color:red">*</span></label>
                                    <select name="status" class="form-control" required>
                                        <option {{ old('status') == 0 ? 'selected' : '' }} value="0">Active</option>
                                        <option {{ old('status') == 1 ? 'selected' : '' }} value="1">Inactive</option>
                                    </select>
                                </div>
                                
                                <hr>

                                <div class="form-group">
                                    <label>Meta Title <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" name="meta_title" required value="{{ old('meta_title') }}" placeholder="Category Name">
                                </div>

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" name="meta_description" placeholder="Meta Description">{{ old('meta_description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Meta Keywords</label>
                                    <input type="text" class="form-control" name="meta_keywords" value="{{ old('meta_keywords') }}" placeholder="Meta Keywords">
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-danger float-right" onclick="window.location='{{ url('admin/category/list') }}'">Back</button>
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
</h1>
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
                                    <label>Category Name <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" name="name" required value="{{ old('name') }}" placeholder="Category Name">
                                </div>
                                <div class="form-group">
                                    <label>Slug <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" name="slug" required value="{{ old('slug') }}" placeholder="Slug Example. URL">
                                    <div style="color:red;">{{ $errors->first('slug') }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Status <span style="color:red">*</span></label>
                                    <select name="status" class="form-control" required>
                                        <option {{ old('status') == 0 ? 'selected' : '' }} value="0">Active</option>
                                        <option {{ old('status') == 1 ? 'selected' : '' }} value="1">Inactive</option>
                                    </select>
                                </div>
                                
                                <hr>

                                <div class="form-group">
                                    <label>Meta Title <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" name="meta_title" required value="{{ old('meta_title') }}" placeholder="Category Name">
                                </div>

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" name="meta_description" placeholder="Meta Description">{{ old('meta_description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Meta Keywords</label>
                                    <input type="text" class="form-control" name="meta_keywords" value="{{ old('meta_keywords') }}" placeholder="Meta Keywords">
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-danger float-right" onclick="window.location='{{ url('admin/category/list') }}'">Back</button>
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
