<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Comment extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table      = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'post_id',
        'user_id',
        'message',
    ];

    public function post(){
        return $this->belongsTo('App\Models\Post');
    }
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}