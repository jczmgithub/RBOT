<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.home',
            ['modelos' => DB::table('user_robot')
                ->join('robots', 'user_robot.robot_id', '=', 'robots.id')
                ->select('user_robot.user_id' ,'robots.modelo')
                ->where('user_robot.user_id','=',Auth::user()->id)
                ->get()]
        );
    }
}
