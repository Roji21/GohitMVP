<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Transaksi extends BaseController
{
    public function index()
    {
       return view("admin/transaksi/index");
    }

    public function sukses()
    {
        return view('success');
    }
}