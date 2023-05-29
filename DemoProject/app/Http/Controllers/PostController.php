<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        return "display all data";
    }

   
    public function create()
    {
        return "show form for crating resource";
    }

   
    public function store(Request $request)
    {
        return "Store New Data";
    }
   
    public function show(string $id)
    {
        return("display Specified data");
    }

   
    public function edit(string $id)
    {
        return("Edit Form Show ");
    }

   
    public function update(Request $request, string $id)
    {
        return("Update data");
    }

    public function destroy(string $id)
    {
        return("Delete data");
    }
}
