<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//SoftDeletesによって、SQLがDELETE文からデータが物理削除（完全削除）から論理削除（データ保持）

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function getPaginateByLimit(int $limit_count = 2){
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
        
    }
    
    protected $fillable = [
        'title',
        'body',
        ];
}

