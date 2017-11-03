<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cate;
use App\Models\CateParent;
use App\Models\Product;
use App\Models\Articles;
use App\Models\MetaData;
use App\Models\Color;
use App\Models\PriceRange;
use Helper;

class CateController extends Controller
{

    public function __construct(){
        
    }
      
    public function cateParent(Request $request){
        
        $productArr = [];
        $cateList = (object) [];
        
        $slugCateParent = $request->slugCateParent;
        
        if(!$slugCateParent){
            return redirect()->route('home');       
        }

        $parentDetail = CateParent::where('slug', $slugCateParent)->first();

        if($parentDetail){
            $parent_id = $parentDetail->id;
            $cateList = Cate::getList(['parent_id' => $parent_id, 'limit' => 10]);
            
            if($cateList){
                foreach($cateList as $cate){
                    $productArr[$cate->id] = Product::getList( ['cate_id' => $cate->id, 'limit' => 10] );
                }
            }       
            if( $parentDetail->meta_id > 0){
               $seo = MetaData::find( $parentDetail->meta_id )->toArray();
            }else{
                $seo['title'] = $seo['description'] = $seo['keywords'] = $parentDetail->name;
            }  
            
            $hotProductList = Product::getList(['is_hot' => 1, 'parent_id' => $parent_id, 'limit' => 10]);
            return view('frontend.cate.parent', compact('parent_id', 'parentDetail', 'cateList', 'productArr', 'seo', 'hotProductList'));

        }else{
            return redirect()->route('home');       
        }
        
    }
    public function cateChild(Request $request){
       
        $slugCateChild = $request->slugCateChild;
        
        if(!$slugCateChild){
            return redirect()->route('home');
        }
        $cateDetail = Cate::where('slug', $slugCateChild)->first();

        if($cateDetail){
            $cate_id = $cateDetail->id;
            
            $settingArr = Helper::setting();
            
            $productList = Product::getList( ['cate_id' => $cate_id, 'pagination' => $settingArr['product_per_page']] );
            
            if( $cateDetail->meta_id > 0){
               $seo = MetaData::find( $cateDetail->meta_id )->toArray();
            }else{
                $seo['title'] = $seo['description'] = $seo['keywords'] = $cateDetail->name;
            }  
            $page = $request->page ? $request->page : 1;    
            $kmHot = Articles::getList(['is_hot' => 1, 'cate_id' => 2, 'limit' => 5]);   
            $colorList = Color::all(); 
            $priceList = PriceRange::all();
            return view('frontend.cate.child', compact('parent_id', 'cateDetail', 'productList', 'seo', 'page', 'kmHot', 'colorList', 'priceList'));
            
        }else{
            return redirect()->route('home');   
        }
    }      
    
}
