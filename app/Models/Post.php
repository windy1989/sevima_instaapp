<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
  
class Post extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table      = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'title',
        'image',
        'description',
        'like'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function like(){
        return $this->hasMany('App\Models\Like');
    }

    public function comment(){
        return $this->hasMany('App\Models\Comment');
    }

    public function attachment() 
    {
        if(Storage::exists($this->image)) {
            $image = asset(Storage::url($this->image));
        } else {
            $image = asset('app-assets/images/error.jpg');
        }

        return $image;
    }
}