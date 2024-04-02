<?php
namespace App\Http\Controllers;

class welcomeController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' =>'Selamat Datang',
            'list' => ['Home','Welcome']
        ];

        $activeMenu = 'dasboard';

        return view ('Welcome1', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}