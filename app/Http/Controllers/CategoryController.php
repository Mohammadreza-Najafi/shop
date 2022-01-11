<?php

namespace App\Http\Controllers;

use App\Models\categoryProduct;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $temp=[];

    public function productsByCategory(categoryProduct $node){

        if(count(json_decode("[$node->next]")[0])!=0){

            $nextNodes=json_decode("[$node->next]")[0];

            foreach ($nextNodes as $nextNode){

                $cat= $this->productsByCategory(categoryProduct::find($nextNode));
                if(is_int($cat))
                    $this->temp[]=$cat;

            }

        }
        else{
            return $node->id;
        }

        return $this->temp;
    }
}
