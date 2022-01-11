<?php

namespace App\Observers;

use App\Models\CategoryProduct;

class CategoryProductObserver
{
    /**
     * Handle the CategoryProduct "created" event.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return void
     */
    public function created(CategoryProduct $categoryProduct)
    {
        if($categoryProduct->prev !== null) {

            $category=$categoryProduct::find($categoryProduct->prev);

            $next=json_decode($category->next,true);

            $next[]=$categoryProduct->id;

            $categoryProduct::where("id","=",$categoryProduct->prev)
                            ->update(["next"=>collect($next)->toJson()]);

        }
    }

    /**
     * Handle the CategoryProduct "updated" event.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return void
     */
    public function updated(CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Handle the CategoryProduct "deleted" event.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return void
     */
    public function deleted(CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Handle the CategoryProduct "restored" event.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return void
     */
    public function restored(CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Handle the CategoryProduct "force deleted" event.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return void
     */
    public function forceDeleted(CategoryProduct $categoryProduct)
    {
        //
    }
}
