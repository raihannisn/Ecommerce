@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Product</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.layouts._message')
                    <div class="card card-primary">
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title<span style="color:red">*</span></label>
                                            <input type="text" class="form-control" name="title" required value="{{ old('title', $product->title) }}" placeholder="Title">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>SKU<span style="color:red">*</span></label>
                                            <input type="text" class="form-control" name="sku" required value="{{ old('sku', $product->sku) }}" placeholder="SKU">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Category<span style="color:red">*</span></label>
                                            <select class="form-control" required id="ChangeCategory" name="category_id">
                                                <option value="">Selecet</option>
                                                @foreach($getCategory as $category)
                                                <option {{ ($product->category_id == $category->id) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sub Category<span style="color:red">*</span></label>
                                            <select class="form-control" required id="getSubCategory" name="sub_category_id">
                                                <option value="">Selecet</option>
                                                @foreach($getSubCategory as $subcategory)
                                                <option {{ ($product->sub_category_id == $subcategory->id) ? 'selected' : '' }} value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Brand<span style="color:red">*</span></label>
                                            <select class="form-control" name="brand_id">
                                                <option value="">Selecet</option>
                                                @foreach($getBrand as $brand)
                                                <option {{ ($product->brand_id == $brand->id) ? 'selected' : '' }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Color<span style="color:red">*</span></label>
                                            @foreach($getColor as $color)
                                                @php
                                                    $checked = '';
                                                @endphp
                                                @foreach($product->getColor as $pcolor)
                                                    @if($pcolor->color_id == $color->id)
                                                        @php
                                                            $checked = 'checked';
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            <div>
                                                <label for=""><input {{ $checked }} type="checkbox"name="color_id[]" value="{{ $color->id }}">{{ $color->name }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Price ($)<span style="color:red">*</span></label>
                                            <input type="text" class="form-control" name="price" required value="{{ $product->price }}" placeholder="Price">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Old Price ($)<span style="color:red">*</span></label>
                                            <input type="text" class="form-control" name="old_price" required value="{{ $product->old_price }}" placeholder="Old Price">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Size<span style="color:red">*</span></label>
                                            <div>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price ($)</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="AppendSize">
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control" name="size[100][name]" placeholder="Name">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="size[100][price]" placeholder="Price">
                                                            </td>
                                                            <td style="width: 200px">
                                                                <button type="button" class="btn btn-primary btn-sm AddSize">Add</button>
                                                            </td>
                                                        </tr>                                                        
                                                    </tbody>
                                                </table>
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Short Description<span style="color:red">*</span></label>
                                            <textarea class="form-control" name="short_description" placeholder="Short Description">{{ $product->short_description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description<span style="color:red">*</span></label>
                                            <textarea class="form-control editor" name="description" placeholder="Description" cols="30" rows="10" >{{ $product->description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Additional Information<span style="color:red">*</span></label>
                                            <textarea class="form-control editor" name="additional_information" placeholder="Additional Information">{{ $product->additional_information }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Shipping & Returns<span style="color:red">*</span></label>
                                            <textarea class="form-control editor" name="shipping_returns" placeholder="Shipping & Returns">{{ $product->shipping_returns }}</textarea>
                                        </div>
                                    </div>
                                </div>
<hr />
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Status <span style="color:red">*</span></label>
                                            <select name="status" class="form-control" required>
                                                <option {{ ($product->status == 0) ? 'selected' : '' }} value="0">Active</option>
                                                <option {{ ($product->status == 1) ? 'selected' : '' }} value="1">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-danger float-right" onclick="window.location='{{ url('admin/product/list') }}'">Back</button>
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

<script src="https://cdn.tiny.cloud/1/7cr8mi6pkwozhks1tz7xbirr06zp0e7bixxfj03cxied9d0a/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">

tinymce.init({
            selector: '.editor',
            height: 350,
            menubar: false,
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
                ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });

var i = 101;
    $('body').delegate('.AddSize', 'click', function(e) {
        var html = '<tr id="DeleteSize'+i+'">\n\
                        <td>\n\
                            <input type="text" class="form-control" name="size['+i+'][name]" placeholder="Name">\n\
                        </td>\n\
                        <td>\n\
                            <input type="text" class="form-control" name="size['+i+'][size]" placeholder="Price">\n\
                        </td>\n\
                        <td>\n\
                            <button type="button" id="'+i+'" class="btn btn-danger btn-sm DeleteSize">Delete</button>\n\
                        </td>\n\
                    </tr>';
        i++;
        $('#AppendSize').append(html);

    });

    $('body').delegate('.DeleteSize', 'click', function(e) {
        var id = $(this).attr('id');
        $('#DeleteSize'+id).remove();
    });

    $('body').delegate('#ChangeCategory', 'change', function(e) {
        var id = $(this).val();

        $.ajax({
            type: "post",
            url: "{{ url('admin/get_sub_category') }}",
            data: {
                "id" : id,
                "_token": "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function(data) {
                $('#getSubCategory').html(data.html);
            },
            error: function(data) {
                
            }     
        });

    });
 </script>
@endsection
