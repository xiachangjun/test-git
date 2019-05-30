<?php
/**
 * Created by PhpStorm.
 * User: xia
 * Date: 2019-05-23
 * Time: 17:06
 */

namespace App\Api\Transformers;


use App\Lesson;
use League\Fractal\TransformerAbstract;

class LessonTransformer extends TransformerAbstract
{

    public  function transform(Lesson $lesson){
            return [
                'title_s'=>$lesson['title'],
                'content'=>$lesson['body'],
                'is_free'=>(boolean) $lesson['free']
            ];
    }
}