<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cate;
use App\Models\CateParent;
use App\Models\Product;
use App\Models\MetaData;
use App\Models\ArticlesCate;
use App\Models\Articles;
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
            $cateList = Cate::getList($parent_id);
            
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
            $cateArr = [];
       
            $cateDetail = ArticlesCate::where('slug' , $slugCateParent)->first();
            if(!$cateDetail){
                return redirect()->route('home');
            }
            $title = trim($cateDetail->meta_title) ? $cateDetail->meta_title : $cateDetail->name;
            $settingArr = Helper::setting();
            $articlesArr = Articles::where('cate_id', $cateDetail->id)->where('status', 1)->orderBy('is_hot', 'desc')->orderBy('id', 'desc')->paginate($settingArr['articles_per_page']);

            $hotArr = Articles::where( ['cate_id' => $cateDetail->id, 'is_hot' => 1] )->orderBy('id', 'desc')->limit(5)->get();
            $seo['title'] = $cateDetail->meta_title ? $cateDetail->meta_title : $cateDetail->title;
            $seo['description'] = $cateDetail->meta_description ? $cateDetail->meta_description : $cateDetail->title;
            $seo['keywords'] = $cateDetail->meta_keywords ? $cateDetail->meta_keywords : $cateDetail->title;
            $socialImage = $cateDetail->image_url; 
                 
            return view('frontend.news.index', compact('title', 'hotArr', 'articlesArr', 'cateDetail', 'seo', 'socialImage'));                
        }
        
    }
    public function cateChild(Request $request){
       
        $slug =  $request->slugCateChild;
        $slugCate = $request->slugCateParent;
        
        if(!$slug || !$slugCate){
            return redirect()->route('home');
        }        
        $cateDetail = Cate::where('slug', $slugCate)->first();
        $cate_id = $cateDetail->id;
        $detail = Product::where('slug', $slug)->where('cate_id', $cate_id)->first();
        if($cateDetail && $detail){
            
            $settingArr = Helper::setting();

            if( $detail->meta_id > 0){
               $seo = MetaData::find( $detail->meta_id )->toArray();
            }else{
                $seo['title'] = $seo['description'] = $seo['keywords'] = $detail->name;
            }  
            $productList = Product::where('cate_id', $cate_id)->orderBy('is_hot', 'desc')->orderBy('display_order')->get();
            $articlesList = Articles::where('product_cate_id', $cate_id)->orderBy('display_order')->get();
            return view('frontend.detail.index', compact('cate_id', 'cateDetail', 'detail', 'seo', 'page', 'productList', 'articlesList'));
            
        }else{
            return redirect()->route('home');   
        }
    }      
    
}
