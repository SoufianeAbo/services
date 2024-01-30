<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function getAllServices() {
        $services = DB::table('services')
        ->join('categories', 'services.categoryId', '=', 'categories.id')
        ->select('services.*', 'categories.category as category_name')
        ->get();
        return view('user', compact('services'));
    }
}
