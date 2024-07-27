<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
class ProController extends Controller
{
    
    public function menu(){
        $products = products::all();
        $products = products::paginate(10);
        $categories = categories::all();
        
        return view ('menu', compact('products','categories'));
    }
    public function getproductsbyCategory(request $request){
        $products = products::where('category_id',$request->category_id)->get();
        $categories=categories::all();
        return view('menu',compact('products','categories'));
    }
    public function search(Request $request)
    {
        $categories = categories::all();
        
        $query = $request->input('query');
        $products = products::where('name', 'LIKE', "%$query%")
                            ->orWhere('description', 'LIKE', "%$query%")
                            ->paginate(10);

        return view('menu', compact('products','categories'));
    }
    function detail(Request $request){
        if($request->product_id){
            $sp=products::find($request->product_id);
            $splq=products::where('category_id', $sp->category_id)->where('id','<>',$sp->id)->get();
            return view('detail', compact('sp','splq'));
        }
        return view('detail');
    }
    
}
