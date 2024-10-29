<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductService;
use Illuminate\Support\Carbon;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Livewire\Backend\ProductImage;
use App\Models\ProductPhoto;
use App\Models\ReviewImage;
use Photo;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::first();

        return view('backend.product.create_product', [
            'product' => $product
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'product_name'      => 'required',
            'stars_rating'     => 'required',
            'review_count'      => 'required',
            'after_price'       => 'required|integer',
            'short_description' => 'required',
            'tags'              => 'required',
            'stock'             => 'required',
            'description'       => 'required',
            'shipping_charge'   => 'required',
            // 'sku'               => 'required|unique:products,sku',
            // 'service'           => 'required|array|present',
            // //new
            // 'price'             => 'required|integer',
            // 'stock_price'       => 'required|integer',
            // 's_price'           => 'required|integer',
            // 'sp_type'           => 'required',
        ]);

    $product = Product::all()->count();
            $new_product =null;
            if($product == 0){
                $new_product = new Product();
            }else{
                $new_product = Product::first();
            }
            $new_product->name      = $request->product_name;
            $new_product->star_rating     = $request->stars_rating;
            $new_product->review_count      = $request->review_count;
            $new_product->before_price       = $request->before_price;
            $new_product->after_price       = $request->after_price;
            $new_product->short_description = $request->short_description;
            $new_product->tags              = $request->tags;
            $new_product->in_stock             = $request->stock;
            $new_product->shipping_charge   = $request->shipping_charge;
            $new_product->description       = $request->description;
            $new_product->additional_info   = $request->additional_info;
            $new_product->save();

            return back()->with('succ', 'Data added successfully');

    }






    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $services   = Service::all();
        $request    = Product::find($id);
        $categories = ProductCategory::all();
        $colors     = Color::get();
        $sizes      = Size::get();
        return view('backend.product.edit_product', compact('request', 'categories', 'services', 'colors', 'sizes'));
    }

    public function update(Request $request, string $id)
    {

        $request->validate([
            'btn'               => 'required',
            'category_id'       => 'required|integer',
            'product_name'      => 'required',
            'sku'               => 'required',
            'short_description' => 'required',
            'description'       => 'required',
            'price'             => 'required|integer',
            'stock_price'       => 'required|integer',
            's_price'           => 'required|integer',
            'sp_type'           => 'required',

        ]);

        $slug = Str::slug($request->product_name);

        // Check if the slug already exists, append numeric value if necessary
        $count = Product::where('slugs', $slug)->count();
        if ($count > 1) {
            $slug = $slug . '-' . ($count + 1);
        }

        DB::beginTransaction();

        try {
            $product = Product::find($id);
            $product->category_id       = $request->category_id;
            $product->name              = $request->product_name;
            $product->sku               = $request->sku;
            $product->slugs             = $slug;
            $product->short_description = $request->short_description;
            $product->description       = $request->description;
            $product->additional_info   = $request->additional_info;
            // $product->video_link        = $request->link;
            $product->status            = $request->btn;
            $product->seo_title         = $request->seo_title;
            $product->seo_description   = $request->seo_description;
            $product->seo_tags          = $request->seo_tags;
            //tags
            $product->featured          = $request->featured == 'on' ? 1 : 0;
            $product->shipping_fee      = $request->shipping_fee == 'on' ? 1 : 0;
            $product->popular           = $request->popular == 'on' ? 1 : 0;
            //new
            $product->price             = $request->price;
            $product->stock_price       = $request->stock_price;
            $product->s_price           = $request->s_price;
            $product->sp_type           = $request->sp_type;

            $product->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }

        return back()->with('succ', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function image()
    {
        $product_images = ProductPhoto::all();
        $review_images = ReviewImage::all();
        return view('backend.product.product_image',[
            'product_images' => $product_images,
            'review_images' => $review_images
        ]);
    }
    public function image_upload(Request $request)
    {

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = 'PRDT-IMG-' . uniqid() . '.' . $extension;
                $file->move(public_path('files/product'), $name);
                ProductPhoto::create([
                    'image' => $name
                ]);
            }
            return back()->with('succ', 'Images uploaded successfully!');
        } else {
            return back()->with('err', 'No images were selected.');
        }
    }
    public function image_delete($id){

        $image = ProductPhoto::find($id);
        $path = public_path('files/product/'.$image->image);
        unlink($path);
        $image->delete();
        return back()->with('succ', 'Image deleted successfully!');
    }
    public function review_image_upload(Request $request)
    {
        if ($request->hasFile('review_images')) {
            foreach ($request->file('review_images') as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = 'PRDT-RVIMG-' . uniqid() . '.' . $extension;
                $file->move(public_path('files/product'), $name);
                ReviewImage::create([
                    'image' => $name
                ]);
            }
            return back()->with('succ', 'Images uploaded successfully!');
        } else {
            return back()->with('err', 'No images were selected.');
        }
    }

}
