<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Brand;
use Image;
use File;

class BrandController extends Controller
{
  public function index()
  {
    $brands = Brand::orderBy('id', 'desc')->get();
    return view('backend.pages.brands.index', compact('brands'));
  }
  public function create()
  {
    return view('backend.pages.brands.create');
  }
  public function edit($id)
  {
    $brand = Brand::find($id);
    return view('backend.pages.brands.edit', compact('brand'));
  }
  public function store(Request $request)
  {
    $this->validate($request, [
      'name'  => 'required',
      'image'  => 'nullable|image',
    ],
    [
      'name.required'  => 'Please provide a Brand name',
      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
    ]);

    $brand = new Brand();
    $brand->name = $request->name;
    $brand->description = $request->description;
    //insert images also
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $img = time() . '.'. $image->getClientOriginalExtension();
      $location = public_path('images/brands/' .$img);
      Image::make($image)->save($location);
      $brand->image = $img;
    }
    $brand->save();

    session()->flash('success', 'A new Brand has added successfully !!');
    return redirect()->route('admin.brand.index');

  }
  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'name'  => 'required',
      'image'  => 'nullable|image',
    ],
    [
      'name.required'  => 'Please provide a brand name',
      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
    ]);

    $brand = Brand::find($id);
    $brand->name = $request->name;
    $brand->description = $request->description;
    //insert images also
    if ($request->hasFile('image')) {
      //delete the old img from file
      if (File::exists('images/brands/'.$brand->image)) {
        File::delete(('images/brands/'.$brand->image));
      }
      $image = $request->file('image');
      $img = time() . '.'. $image->getClientOriginalExtension();
      $location = public_path('images/brands/' .$img);
      Image::make($image)->save($location);
      $brand->image = $img;
    }
    $brand->save();

    session()->flash('success', 'Brand has beeen updated successfully !!');
    return redirect()->route('admin.brand.index');

  }
  public function delete($id)
  {
    $brand = Brand::find($id);
    if (!is_null($brand)) {
      //delete brand image
      if (File::exists('images/brands/'.$brand->image)) {
        File::delete(('images/brands/'.$brand->image));
      }
      $brand->delete();
    }
    session()->flash('success', 'Brand has deleted successfully !!');
    return back();
  }
}
