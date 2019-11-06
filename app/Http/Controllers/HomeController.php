<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // ユーザーがフォルダを持っていたら 'task.index' にリダイレクト
        if (Auth::user()->folders()->first()) {
            $user_id = Auth::id();
            return redirect()->route('tasks.index', ['id' => $user_id]);
        }
        // ユーザーがフォルダを持っていなければ、'home' ビューを表示
        return view('home');
    }
}
