<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guard('admin')->guest()){
            $routename = Route::currentRouteName();
            if( $routename != 'admin.login' && $routename != 'admin.logout'){
                return redirect()->route('admin.login');
            }
        }else{
            $routename = Route::currentRouteName();
            if($routename == 'admin.login'){
                return redirect()->route('admin.index');
            }
        }
        return $next($request);
    }
}