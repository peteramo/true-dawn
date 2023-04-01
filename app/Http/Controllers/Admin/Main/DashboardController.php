<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends ServerController
{
    public function index()
    {
//        $cpu_usage = $this->get_server_cpu_usage();

        $server_load = $this->getServerLoad();

        return view('admin.main.dashboard', compact('server_load'));
    }
}
