<?php namespace Nicxonsolutions\Cart;

/**
 * Created by PhpStorm.
 * User: robertnicjoo
 * Date: 5/13/2026
 * Time: 1:00 PM
 */

use Illuminate\Support\Collection;

class ItemAttributeCollection extends Collection {

    public function __get($name)
    {
        if( $this->has($name) ) return $this->get($name);
        return null;
    }
}