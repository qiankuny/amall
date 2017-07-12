<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.index');
    }
}