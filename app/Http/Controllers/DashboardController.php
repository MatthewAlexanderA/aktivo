<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $visit_t = Visitor::count();
        $visit_d = Visitor::where('visit_date', date('Y-m-d'))->count();
        $visit_u = Visitor::distinct()->get('ip_address')->count();

        return view('backend.dashboard', compact('visit_t', 'visit_d', 'visit_u'));
    }
}
