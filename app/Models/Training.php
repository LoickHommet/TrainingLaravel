<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Type;

class Training extends Model
{
    use HasFactory;
    protected $table = 'training';
    protected $fillable = ['name', 'description','price', 'image'];


    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function category(){
        return $this->belongsToMany(Category::class, 'training_category', 'training', 'category');
    }

    public function type(){
        return $this->hasOne(Type::class, 'id', 'type_id');
    }
}
