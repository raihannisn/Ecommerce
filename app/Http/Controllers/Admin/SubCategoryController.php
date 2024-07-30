<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategoryModel;
use App\Models\CategoryModel;
use Auth;

class SubCategoryController extends Controller
{    
    public function list()
    {
        $data['getRecord'] = SubCategoryModel::getRecord();
        $data['header_title'] = 'Sub Category';
        return view('admin.subcategory.list', $data);
    }
}
