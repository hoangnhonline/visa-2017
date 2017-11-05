<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'product';

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
    protected $fillable = [                            
                            'name',
                            'alias',
                            'slug', 
                            'description',
                            'parent_id', 
                            'cate_id', 
                            'file_url', 
                            'content',                                        
                            'status', 
                            'meta_id',                       
                            'is_hot',                           
                            'display_order',
                            'created_user',
                            'updated_user'                            
                        ];

    public static function getList($params = []){
        $query = self::where('status', 1);
        if( isset($params['parent_id']) && $params['parent_id'] ){
            $query->where('parent_id', $params['parent_id']);
        }
        if( isset($params['cate_id']) && $params['cate_id'] ){
            $query->where('cate_id', $params['cate_id']);
        }
        if( isset($params['is_hot']) && $params['is_hot'] ){
            $query->where('is_hot', $params['is_hot']);
        }        
        $query->orderBy('product.is_hot', 'desc')->orderBy('product.id', 'desc');
        if(isset($params['limit']) && $params['limit']){
            return $query->limit($params['limit'])->get();
        }
        if(isset($params['pagination']) && $params['pagination']){
            return $query->paginate($params['pagination']);
        }                
    }
    public static function productTag( $id )
    {
        $arr = [];
        $rs = TagObjects::where( ['type' => 1, 'object_id' => $id] )->lists('tag_id');
        if( $rs ){
            $arr = $rs->toArray();
        }
        return $arr;
    }    
   
    public static function getListTag($id){
        $query = TagObjects::where(['object_id' => $id, 'tag_objects.type' => 1])
            ->join('tag', 'tag.id', '=', 'tag_objects.tag_id')            
            ->get();
        return $query;
    }   
    public function cateParent()
    {
        return $this->belongsTo('App\Models\CateParent', 'parent_id');
    }
    public function cate()
    {
        return $this->belongsTo('App\Models\Cate', 'cate_id');
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
