<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\products;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;


class ProductAdminController extends Controller
{
    public function productadmin(){
        $products=products::with('categories')->take(4)->get();
        $products = products::with('categories')->paginate(4);
        $categories = categories::all();
        
        return view ('productadmin', compact('products','categories'));
    }
    public function productadd(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|string|max:255',
            'price'=>'required|numeric',
            'category_id'=>'required|integer|exists:categories,id',
            'img'=>'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('img'),$imageName);
            $validatedData['img']=$imageName;
        }
        $products=products::create($validatedData);

        $products=products::take(4)->get();
        $products = products::paginate(4);
        $categories = categories::all();
        return view ('productadmin', compact('products','categories'));
        
    }
    public function productupdateform( $id){
        $products=products::with('categories')->take(4)->get();
        $products = products::with('categories')->paginate(4);
        $product=products::find($id);
        $categories = categories::all();
        
        return view ('update_productadmin', compact('products','categories','product'));
    }
    public function update(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'description' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        
        $product = products::find($request->id);
    
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }
    
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
    
        // Handle the image upload if a new image is provided
        if ($request->hasFile('img')) {
            try {
                $imagePath = $request->file('img')->store('public/img');
                $product->img = basename($imagePath);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Image upload failed: ' . $e->getMessage());
            }
        }
    
        $product->category_id = $request->category_id;
        $product->save();
    
        return redirect()->back()->with('success', 'Product updated successfully');
    }
    
    public function productdelete($id) {
        $product = products::find($id);
        if ($product) {
            $imgpath = public_path('img/' . $product->img);
            if (file_exists($imgpath)) {
                unlink($imgpath);
            }
            $product->delete();
        }
        return redirect()->route('productadmin')->with('success', 'Product deleted successfully.');
    }
}
?>