<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/5/28
 * Time: 10:00 AM
 */

namespace App\Http\Controllers\v1\Home;


class IndexController
{
    public function index()
    {
        $data['msg']  = 'success';
        $data['data'] = 'success';
        return $data;
    }
}
