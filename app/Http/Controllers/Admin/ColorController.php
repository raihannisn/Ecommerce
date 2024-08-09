<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ColorModel;
use Illuminate\Http\Request;
use Auth;

class ColorController extends Controller
{
    public function list()
    {
        $data['getRecord'] = ColorModel::getRecord();
        $data['header_title'] = 'Color List';
        return view('admin.color.list', $data);
    }

    public function add()
    { 
        $data['header_title'] = 'Add New Color';
        return view('admin.color.add', $data);
    }

    public function insert(Request $request)
    {
        $color = new ColorModel();
        $color->name = trim($request->name);
        $color->code = trim($request->code);
        $color->status = trim($request->status);
        $color->created_by = Auth::user()->id;
        $color->save();
        
        return redirect('admin/color/list')->with('success', 'Color added successfully');
    }

    public function edit($id)
    {
        $data['getRecord'] = ColorModel::getSingle($id);
        $data['header_title'] = 'Edit Color';
        return view('admin.color.edit', $data);
    }

    public function update(Request $request, $id)
    {   
        $color = ColorModel::getSingle($id);
        $color->name = trim($request->name);
        $color->code = trim($request->code);
        $color->created_by = Auth::user()->id;
        $color->save();
        
        return redirect('admin/color/list')->with('success', 'Color updated successfully');
    }

    public function delete($id)
    {
        $category = ColorModel::getSingle($id);
        $category->delete();
        return redirect('admin/color/list')->with('success', 'Color deleted successfully');
    }
}
