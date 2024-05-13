<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCategory;
use App\Models\User;
// use Illuminate\Support\Facades\DB;

class ItemCategoryController extends Controller
{
    public function All_Item_Category()
    {
        // $students = DB::table('students')->orderBy('name')->simplePaginate(4);
        $allItemCategory = ItemCategory::orderBy('icid')->get();
        $total_item  = ItemCategory::all()->count();
        $total_user = User::all()->count();
        $context = ["allItemCategory"=>$allItemCategory,'total_item'=>$total_item,"total_user"=>$total_user];
        return view('admin/All_Item_Category',$context);
    }
    public function Add_Item_Category()
    {
        return view('admin/Add_Item_Category');
    }

    public function add_Item_Category_data(Request $request)
    {
        $validatedData = $request->validate([
            'catName' => 'required|string|max:60',
            'catDesc' => 'required|string|max:1000',
            'catImage' => 'required|image',
        ]);

        // Store the category image
        // $imagePath = $request->file('catImage')->store('public/item_category');

        $file = $req->file('catImage');
        $path = $req->catImage->store('item_category','public');



        // Check if file was stored successfully
        if (!$imagePath) {
            return "Error storing image.";
        }

        // Create a new item category
        $category = new ItemCategory();
        $category->item_category_name = $validatedData['catName'];
        $category->item_category_description = $validatedData['catDesc'];
        $category->item_category_image = $path;
        // Assuming you have a relationship with restaurants, you can assign the restaurant_id here

        $category->save();

        // Redirect back with a success message
        return redirect('/All-Item-Category/');
    }

    public function allItemCategoryAdminUpdate(Request $req,string $id)
    {


        // Find the ItemCategory by its ID
    $itemCategoryData = ItemCategory::find($id);

    // If the ItemCategory doesn't exist, return an error message
    if (!$itemCategoryData) {
        return "Item category not found!";
    }

    // Update the item_category_name and item_category_description
    $itemCategoryData->item_category_name = $req->catName;
    $itemCategoryData->item_category_description = $req->catDesc;

    // Check if a file was uploaded
    if ($req->hasFile('catImage')) {

        $file = $req->file('catImage');
        $path = $req->catImage->store('item_category','public');


        $itemCategoryData->item_category_image = $path;
    }

    // Save the changes to the database
    $itemCategoryData->save();

    // Return a success message
    return redirect('/All-Item-Category/');






        // $student = DB::table('students')->where('id',$id)
        // ->update([
        //     'name'=>$req->name,
        //     'email'=>$req->email,
        //     'age'=>$req->age,
        //     'city'=> $req->city,

        // ]);
        // return redirect('/student/');
    }

    public function allItemCategoryAdminDelete(string $id)
    {
        $itemCategoryData = ItemCategory::find($id);
        $itemCategoryData->delete();

        return redirect('/All-Item-Category/');
    }
}
