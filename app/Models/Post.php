<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;



class Post extends Model
{
    use HasFactory;

    use HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';  //UUID  - Universal Unique Identifier
    public $incrementing = false;
    protected $table = 'post';
protected $fillable = ['title', 'body', 'published', 'author']; // fields that can be updated

 protected $guarded = ['id']; //fields that cannot be updated (read only)

 public function comments(){
    return $this->hasMany(comment::class);
 }

 public function tags(){
    return $this->belongsToMany(Tag::class);
 }
}
