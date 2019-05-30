<?php
/**
 * Created by PhpStorm.
 * User: xia
 * Date: 2019-05-21
 * Time: 23:16
 */

namespace App\Transformer;


abstract class Transformer
{
    public function transformCollection($items){
        return array_map([$this,'transform'],$items);
    }
    public abstract function transform($item);
}