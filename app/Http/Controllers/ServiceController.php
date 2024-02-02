<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function getAllServices() {
        $services = Service::all();
        return view('user', compact('services'));
    }

    public function insertService(Request $request) {
        $serviceName = $request->input('service');
        $description = $request->input('description');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $categoryId = $request->input('categoryId');
        $cost = $request->input('cost');

        Service::create([
            'service' => $serviceName,
            'description' => $description,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'categoryId' => $categoryId,
            'cost' => $cost
        ]);

        return redirect()->route('home.index');
    }
}
