<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use App\Models\LevelModel;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::where('level_id', 2)->count();

        return view('user', ['data' => $user]);
    }
    
    public function jumlahUserPerLevel()
    {
        $level = LevelModel::withCount('user')->get();
        return view('user_level', ['data' => $level]);
    }
}
