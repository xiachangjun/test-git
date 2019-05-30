<?php
/**
 * Created by PhpStorm.
 * User: xia
 * Date: 2019-05-21
 * Time: 23:18
 */

namespace App\Transformer;


class LessonTransformer extends Transformer
{
    public function transform($lessons){
        return [
            'title_s'=>$lessons['title'],
            'content'=>$lessons['body'],
            'is_free'=>(boolean) $lessons['free']
        ];
    }
}