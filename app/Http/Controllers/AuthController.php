<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{

    public function showAuth() {
        return view('pages.both.auth');
    }

    public function checkUser() {

    }
}
