<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

// made a specific user controller so that if you are logged in as a user you can't create, edit and delete anything in the database
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::paginate(10);
        return view('user.brands.index')->with('brands', $brands);
    }

    public function show(string $id)
    {
        $brand = Brand::findOrFail($id);

        return view('user.brands.show')->with('brand', $brand);
    }
 
}
