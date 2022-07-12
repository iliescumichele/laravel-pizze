<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Ingredient extends Model
{
    
    public function pizzas(){
        return $this->belongsToMany( 'App\Pizza' );
    }


    public static function genSlug($nome){
        $slug = Str::slug($nome,'-');
        $slug_base = $slug;
        $post_presente = Pizza::where('slug',$slug)->first();
        $c = 1;

        while($post_presente){
            $slug = $slug_base . '-' . $c;
            $c++;
            $post_presente = Pizza::where('slug',$slug)->first();
        }

        return $slug;
    }
}
