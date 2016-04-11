<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model 
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'created_at',
    ];

    public function rules()
    {
        return [
            'title' => 'required|min:9',
        ];
    }

}
