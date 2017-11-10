<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ArticlesCate;
use App\Models\Articles;
use App\Models\CateParent;
use App\Models\Cate;
use App\Models\Settings;
use App\Models\Product;
use App\Models\MetaData;

use Helper, File, Session, Auth;
use Mail;

class NewsController extends Controller
{
    public function newsList(Request $request)
    {
        $slug = $request->slug;
        $slug = str_replace("du-lich", 'visa-di', $slug);
        $cateArr = [];
        $cateDetail = Cate::where('slug', $slug)->first();
        
        if(!$cateDetail){
            return redirect()->route('home');
        }
        $title = trim($cateDetail->meta_title) ? $cateDetail->meta_title : $cateDetail->name;
        $settingArr = Helper::setting();
        $articlesList = Articles::where('product_cate_id', $cateDetail->id)->where('cate_id', 1)->where('status', 1)->orderBy('is_hot', 'desc')->orderBy('id', 'desc')->paginate($settingArr['articles_per_page']);
        
        $seo['title'] = $cateDetail->meta_title ? $cateDetail->meta_title : $cateDetail->title;
        $seo['description'] = $cateDetail->meta_description ? $cateDetail->meta_description : $cateDetail->title;
        $seo['keywords'] = $cateDetail->meta_keywords ? $cateDetail->meta_keywords : $cateDetail->title;
        $socialImage = $cateDetail->image_url; 
        $recentList = Articles::where('cate_id', 1)->orderBy('id', 'DESC')->limit(8)->get();    
        return view('frontend.news.index', compact('title', 'articlesList', 'cateDetail', 'seo', 'socialImage', 'recentList'));
    }      

     public function newsDetail(Request $request)
    { 
        $id = $request->id;

        $detail = Articles::find($id);
        
        if( $detail ){           

            $title = trim($detail->meta_title) ? $detail->meta_title : $detail->title;
            $settingArr = Helper::setting();
            $otherList = Articles::where( ['cate_id' => $detail->cate_id] )->where('status', 1)->where('id', '<>', $id)->orderBy('is_hot', 'desc')->orderBy('id', 'desc')->limit($settingArr['article_related'])->get();            
            if( $detail->meta_id > 0){
               $meta = MetaData::find( $detail->meta_id )->toArray();
               $seo['title'] = $meta['title'] != '' ? $meta['title'] : $detail->name;
               $seo['description'] = $meta['description'] != '' ? $meta['description'] : $detail->name;
               $seo['keywords'] = $meta['keywords'] != '' ? $meta['keywords'] : $detail->name;
            }else{
                $seo['title'] = $seo['description'] = $seo['keywords'] = $detail->name;
            } 
            $socialImage = $detail->image_url; 
          
            $tagSelected = Articles::getListTag($id);
            $cateDetail = ArticlesCate::find($detail->cate_id);
            Helper::counter($id, 2);
            $cateDetailProduct = Cate::find($detail->product_cate_id);
            $recentList = Articles::where('cate_id', 1)->orderBy('id', 'DESC')->limit(8)->get();   
            return view('frontend.news.news-detail', compact('title',  'otherList', 'detail', 'otherArr', 'seo', 'socialImage', 'tagSelected', 'cateDetail', 'cateDetailProduct', 'recentList'));
        
        }else{
            return view('erros.404');
        }
    }
}

