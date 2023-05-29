<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     private $products=[

        [
            'id'=>1,
            'name'=>"shrit"
        ],
        [
            'id'=>2,
            'name'=>"pant"
        ],[
            'id'=>3,
            'name'=>"shoe"
        ]
    ];
     

    public function index()
    {
        return $this->products;
    }

   
    public function create()
    {
       return "Product Insert Form View "; 
    }

  
    public function store(Request $request)
    {
        $validate=$request->validate([
            "name"=>"required | string"
        ]);

        $newProductId = count($this->products) + 1;
        if($validate){
            $name=$request->input('name');
           
        }

        return "Product Id={$newProductId}, Product Name={$name} ";
    }

   
    public function show($id)
    {
          $id=$id-1;        
          return $this->products[$id];
    }

   
    public function edit($id)
    {   

       $product = null;
       foreach ($this->products as $productData) {
           if ($productData['id'] == $id) {
               $product = $productData;
               break;
           }
       }
       return $product;
       
    }

   
    public function update(Request $request, string $id)
    {   

        foreach ($this->products as $productData) {
            if ($productData['id'] == $id) {
                $productData['name'] = $request->input('name');
                break;
            }
        }

        return response()->json("update successfully",200);
    }
    
    public function destroy(string $id)
    {
        foreach ($this->products as $key => $productData) {
            if ($productData['id'] == $id) {
                array_splice($this->products, $key, 1);
                break;
            }
        }

        return $this->products;
        
    }
}
