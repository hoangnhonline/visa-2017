<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Articles extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 
                            'slug', 
                            'alias', 
                            'cate_id', 
                            'is_hot', 
                            'project_id', 
                            'type', 
                            'status', 
                            'display_order', 
                            'description', 
                            'image_url', 
                            'content', 
                            'meta_id', 
                            'created_user', 
                            'updated_user'];
    public static function getListTag($id){
        $query = TagObjects::where(['object_id' => $id, 'tag_objects.type' => 2])
            ->join('tag', 'tag.id', '=', 'tag_objects.tag_id')            
            ->get();
        return $query;
    }
    public static function getList($params = []){
        $query = self::where('status', 1);
        if( isset($params['cate_id']) && $params['cate_id'] ){
            $query->where('cate_id', $params['cate_id']);
        }
        if( isset($params['is_hot']) && $params['is_hot'] ){
            $query->where('is_hot', $params['is_hot']);
        }
        $query->orderBy('is_hot', 'desc')->orderBy('id', 'desc');
        if(isset($params['limit']) && $params['limit']){
            return $query->limit($params['limit'])->get();
        }
        if(isset($params['pagination']) && $params['pagination']){
            return $query->paginate($params['pagination']);
        }                
    }
    public function cate()
    {
        return $this->hasOne('App\Models\ArticlesCate', 'id', 'cate_id');
    }
    public function createdUser()
    {
        return $this->belongsTo('App\Models\Account', 'created_user');
    }
     public function updatedUser()
    {
        return $this->belongsTo('App\Models\Account', 'updated_user');
    }
}
