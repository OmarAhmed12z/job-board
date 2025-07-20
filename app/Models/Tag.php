<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Tag extends Model
{
      use HasFactory;
      use HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';  //UUID  - Universal Unique Identifier
    public $incrementing = false;
     protected $table = 'Tags';
     protected $fillable = ['title']; // fields that can be updated

     protected $guarded = ['id']; //fields that cannot be updated (read only)

     public function posts(){
        return $this->belongsToMany(Post::class);
     }
}
