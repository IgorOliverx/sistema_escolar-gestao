<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public readonly Ativo $ativo;

    public function __construct()
    {
        $this->ativo = new Ativo();
    }

    public function index():View
    {
        return \view('dashboard.index');
    }
}
