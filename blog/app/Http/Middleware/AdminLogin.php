<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session('is_login') == true){
            //已登陆
        }else{
            //未登录
            return redirect('admin/login');
        }
        return $next($request);
    }
}
