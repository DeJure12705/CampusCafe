<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Retrieve products (or whatever logic is required)
        return view('home', compact('products'));
    }
     
    public function createProduct(Request $request)
{
    // Validate input fields
    $incomingFields = $request->validate([
        "product_name" => "required|max:255",
        "description" => "required|max:255",
        "price" => "required|numeric",
        "category_id" => "nullable|in:1,2",
        "product_image" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
    ]);

    // Sanitize other fields
    $incomingFields['product_name'] = strip_tags($incomingFields['product_name']);
    $incomingFields['description'] = strip_tags($incomingFields['description']);
    $incomingFields['price'] = strip_tags($incomingFields['price']);
    $incomingFields['category_id'] = strip_tags($incomingFields['category_id']);

    // Handle file upload
    if ($request->hasFile('product_image')) {
        $path = $request->file('product_image')->store('product_images', 'public'); // Save in storage/app/public/product_images
        $incomingFields['product_image'] = $path; // Save the path in the database
    } else {
        $incomingFields['product_image'] = null; // Default to null if no image uploaded
    }

    // Create the product in the database
    Product::create($incomingFields);

    // Redirect with success message
    return redirect('/ordermen')->with("success", "New Product Added");
}


    public function displayOrder(){
        $products = Product::all();
        return view('ordermen', compact('products'));
    }
    public function update(Request $request, $id)
{
    $request->validate([
        'product_name' => 'required',
        'description' => 'required',
        'category_id' => 'required',
    ]);

    $product = Product::findOrFail($id); // Find the product by ID
    $product->update($request->all()); // Update the product's data

    return redirect()->route('ordermen')
                     ->with('success', 'Product updated successfully!');
                     


}public function destroy($id)
{
    $product = Product::findOrFail($id); // Find the product by ID
    $product->delete(); // Delete the product
    return redirect()->route('ordermen')->with('success', 'Product deleted successfully!');
}


public function edit($id)
{
    $products = Product::findOrFail($id); // Find the product by ID
    return view('edit', compact('products')); // Return the edit view
}


}
