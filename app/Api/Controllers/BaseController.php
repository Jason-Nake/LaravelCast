<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/5/28
 * Time: 2:15 PM
 */

namespace App\Api\Controllers;


use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;

class BaseController extends Controller
{
    use Helpers;

    public function __construct()
    {

    }
}
