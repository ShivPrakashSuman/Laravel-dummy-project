<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
    use HasFactory;
    
    protected $table = 'category';

    protected $primaryKey = 'id';

     /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;


      /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'image',
        'title',
        'description',
        'status',
    ];

    public function scopeSort($query, $orderBy, $orderType){
        $query->orderBy($orderBy, $orderType);
        return $query;
    }
    public function scopeFilter($query, $params){
        if($params && isset($params['search'])){
            $query->where('id', 'like', '%'. $params['search']. '%')
                ->orWhere('title', 'like', '%'. $params['search']. '%');
        }
        return $query;
    }
}
