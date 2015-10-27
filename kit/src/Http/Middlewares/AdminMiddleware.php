<?php namespace Kit\Http\Middlewares;

use Cartalyst\Sentinel\Sentinel;
use Closure;

class AdminMiddleware
{
    protected $guard;

    public function __construct(Sentinel $guard)
    {
        $this->guard = $guard;
    }



    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$this->guard->check() or !$this->guard->getUser()->hasAccess('admin')) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('authenticate/signin');
            }
        }

        return $next($request);
    }
}
