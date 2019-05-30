<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/5/28
 * Time: 2:12 PM
 */

namespace App\Http\Middleware;


use PhpParser\Node\Expr\Closure;

class Client
{
    public function handle($request, Closure $next)
    {
        config(['jwt.user' => '\App\Client']);    //重要用于指定特定model
        config(['auth.providers.users.model' => \App\Client::class]);//重要用于指定特定model！！！！

        return $next($request);
    }

}
