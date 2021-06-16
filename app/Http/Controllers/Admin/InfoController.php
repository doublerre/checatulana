<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        return view("admin.info.index");
    }

    public function docs()
    {
        return view("admin.info.docs");
    }
}
