<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.home');
    }

    public function createNewBrand()
    {
        return view('pages.admin.new-brand');
    }

    public function brands()
    {
        return view('pages.admin.brands');
    }

    public function viewBrandDetails($uuid)
    {
        $brand = Brand::where('uuid', $uuid)->first();
        return view('pages.admin.view-brand-details', compact('brand'));
    }
}
