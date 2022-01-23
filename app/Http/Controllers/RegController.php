<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegController extends Controller
{

    public function showReg() {
        return view('pages.both.reg');
    }

    public function addUser(Request $request) {
        $data = $request->post();
        User::create($data);
    }

    public function getUser(Request $request) {
        $data = $request->post();
        dump($data);
    }
}
