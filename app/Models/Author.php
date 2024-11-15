<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "author";

    protected $fillable = [
        "name",
        "email",
        "password",
    ];

    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
