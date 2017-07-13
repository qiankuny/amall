<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdminMenu;

class MenuController extends Controller
{
    public function lists()
    {
        $menus = AdminMenu::all();
        echo '<pre>';
        foreach($menus as $menu){
            var_dump($menu);
        }
    }
}
