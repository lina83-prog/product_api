<?php
namespace App\Repositories;

use App\product;

class ProductRepository 
{


	public function index(){
        return product::all();

    }
    public function create($pro)
    {
         $product = product::create([
        'product_name' => $pro->product_name,
        'description' => $pro->description,
    ]);
    return $product;
    }
    public function update($pro,$id)
    {
        $product=product::find($id);
        $product->product_name=$pro->input('product_name');
        $product->description=$pro->input('description');
        $product->save();
        return $product;
        
    }
    public function show($id)
    {
        return product::find($id);

        
    }
    public function delete($id)
    {
       $product=product::find($id);
       $product->delete();  
    }

}