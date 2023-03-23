<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use App\Models\Admin\TopMenu;
use Illuminate\Http\Request;

class TopMenuController extends Controller
{
     public function topMenu()
     {
       return view('admin.menu.topMenu');
      }
      public function addTopMenu()
      {
        return view('admin.menu.addTopMenu');
       }
       public function store(Request $request)
       {
         TopMenu::create([
                'name'=>$request->name,
                'link'=>$request->link,
                'status'=>$request->status,
        ]);
        return redirect()->back();
       }

     }

