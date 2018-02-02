<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use Closure;

class isAdmin
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
        
        $arAdminas = DB::table('isadmin')
            ->where('user_id', '=', auth()->user()->id)
            ->first();


        //neveikia jei yra useris bet be admin
        if(isset($arAdminas->privilegija)){
            if($arAdminas->privilegija == "superUser" || $arAdminas->privilegija == "admin"){
                return $next($request);
            }else{
                return redirect('');
            }
        }
    
        return redirect('');
    }
}
