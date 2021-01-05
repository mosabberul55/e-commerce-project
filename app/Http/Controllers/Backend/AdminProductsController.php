<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\models\Product;
use App\models\ProductImage;
use Image;


class AdminProductsController extends Controller
{
  public function product_index()
  {
    $products = Product::orderBy('id', 'desc')->get();
    return view('backend.pages.product.index', compact('products'));
  }
  public function product_create()
  {
    return view('backend.pages.product.create');
  }
  public function product_store(Request $request)
  {
    $request->validate([
            'title'         => 'required|max:150',
            'description'     => 'required',
            'price'             => 'required|numeric',
            'quantity'             => 'required|numeric',
            'brand_id'             => 'required',
            'category_id'             => 'required',
        ]);

    $product = new Product;
    $product->title = $request->title;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->quantity = $request->quantity;

    $product->slug = Str::slug($request->title);
    $product->category_id = $request->category_id;
    $product->brand_id = $request->brand_id;
    $product->admin_id = 1;
    $product->save();

    // ProductImage model image insert
    // if ($request->hasFile('product_image')) {
    //   $image = $request->file('product_image');
    //   $img = time() . '.'. $image->getClientOriginalExtension();
    //   $location = public_path('images/products/' .$img);
    //   Image::make($image)->save($location);
    //
    //   $product_image = new ProductImage;
    //   $product_image->product_id = $product->id;
    //   $product_image->image = $img;
    //   $product_image->save();
    // }

    if (count($request->product_image) > 0) {
            foreach ($request->product_image as $image) {

                //insert that image
                //$image = $request->file('product_image');
                $img = time() . '.'. $image->getClientOriginalExtension();
                $location = public_path('images/products/' .$img);
                Image::make($image)->save($location);

                $product_image = new ProductImage;
                $product_image->product_id = $product->id;
                $product_image->image = $img;
                $product_image->save();

            }
        }

    return redirect()->route('admin.product.index');
  }
  public function product_edit($id)
  {
    $product = Product::find($id);
    return view('backend.pages.product.edit', compact('product'));
  }
  public function product_update(Request $request, $id)
  {
    $request->validate([
            'title'         => 'required|max:150',
            'description'     => 'required',
            'price'             => 'required|numeric',
            'quantity'             => 'required|numeric',
            'brand_id'             => 'required',
            'category_id'             => 'required',
        ]);

    $product = Product::find($id);
    $product->title = $request->title;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->category_id = $request->category_id;
    $product->brand_id = $request->brand_id;
    $product->save();
    return redirect()->route('admin.product.index');
  }
  public function product_delete($id)
  {
    $product = Product::find($id);
    if (!is_null($product)) {
      $product->delete();
    }
    session()->flash('success', 'Product has deleted successfully !!');
    return back();
  }
}
