<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;
use Image;
use File;

class CategoriesController extends Controller
{
  public function index()
  {
    $categories = Category::orderBy('id', 'desc')->get();
    return view('backend.pages.categories.index', compact('categories'));
  }
  public function create()
  {
    $main_categories = Category::orderBy('name', 'asc')->where('parent_id', NULL)->get();
    return view('backend.pages.categories.create', compact('main_categories'));
  }
  public function edit($id)
  {
    $category = Category::find($id);
    $main_categories = Category::orderBy('name', 'asc')->where('parent_id', NULL)->get();
    return view('backend.pages.categories.edit', compact('main_categories', 'category'));
  }
  public function store(Request $request)
  {
    $this->validate($request, [
      'name'  => 'required',
      'image'  => 'nullable|image',
    ],
    [
      'name.required'  => 'Please provide a category name',
      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
    ]);

    $category = new Category();
    $category->name = $request->name;
    $category->description = $request->description;
    $category->parent_id = $request->parent_id;
    //insert images also
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $img = time() . '.'. $image->getClientOriginalExtension();
      $location = public_path('images/categories/' .$img);
      Image::make($image)->save($location);
      $category->image = $img;
    }
    $category->save();

    session()->flash('success', 'A new category has added successfully !!');
    return redirect()->route('admin.category.index');

  }
  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'name'  => 'required',
      'image'  => 'nullable|image',
    ],
    [
      'name.required'  => 'Please provide a category name',
      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
    ]);

    $category = Category::find($id);
    $category->name = $request->name;
    $category->description = $request->description;
    $category->parent_id = $request->parent_id;
    //insert images also
    if ($request->hasFile('image')) {
      //delete the old img from file
      if (File::exists('images/categories/'.$category->image)) {
        File::delete(('images/categories/'.$category->image));
      }
      $image = $request->file('image');
      $img = time() . '.'. $image->getClientOriginalExtension();
      $location = public_path('images/categories/' .$img);
      Image::make($image)->save($location);
      $category->image = $img;
    }
    $category->save();

    session()->flash('success', 'Category has beeen updated successfully !!');
    return redirect()->route('admin.category.index');

  }
  public function delete($id)
  {
    $category = Category::find($id);
    if (!is_null($category)) {
      //if parent then delete all the sub category
        if ($category->parent_id == NULL) {
          // delete sub
            $sub_categories = Category::orderBy('name', 'asc')->where('parent_id', $category->id)->get();
            foreach ($sub_categories as $subcat) {
              if (File::exists('images/categories/'.$subcat->image)) {
                File::delete(('images/categories/'.$subcat->image));
              }
              $subcat->delete();
            }
        }
      //delete category image
      if (File::exists('images/categories/'.$category->image)) {
        File::delete(('images/categories/'.$category->image));
      }
      $category->delete();
    }
    session()->flash('success', 'Category has deleted successfully !!');
    return back();
  }
}
