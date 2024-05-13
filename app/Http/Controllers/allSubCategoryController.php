<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\ItemCategory;
use App\Models\User;
class allSubCategoryController extends Controller
{
    public function all_sub_category()

    {
        $allsubCategory = Subcategory::orderBy('isid')->get();
        $total_item = ItemCategory::all()->count();
        $total_user = User::all()->count();
        $total_subcategory = Subcategory::all()->count();
        $context = ["allsubCategory"=>$allsubCategory,"total_item"=>$total_item,"total_user"=>$total_user,"total_subcategory"=>$total_subcategory];
        return view("admin.allsubCategory",$context);

    }

    public function addsubCatAdminPanel()
    {
        $itemCategoryData = ItemCategory::all();
        $total_item = ItemCategory::all()->count();
        $total_user = User::all()->count();
        $total_subcategory = Subcategory::all()->count();
        $context = ["itemCategoryData"=>$itemCategoryData,"Error"=>"","total_item"=>$total_item,"total_user"=>$total_user,"total_subcategory"=>$total_subcategory];
        return view('admin.addsubCatAdminPanel',$context);
    }

    public function addsubCatAdminPanelData(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'catName' => 'required|string|max:60|unique:subcategories,subcategory_name',
                'catDesc' => 'required|string|max:1000',

            ]);

            $catName = $request->input('Catitem');
            $getCategory = ItemCategory::where('item_category_name', $catName)->first();

            // Ensure the category exists
            if (!$getCategory) {
                throw new \Exception("Category not found.");
            }


            $file = $request->file('catImage');
            $path = $request->catImage->store('item_sub_category','public');



            // Create a new subcategory
            $subcategory = new Subcategory();
            $subcategory->subcategory_name = $validatedData['catName'];
            $subcategory->subcategory_description = $validatedData['catDesc'];
            $subcategory->subcategory_image = $path;
            $subcategory->item_cat_id = $getCategory->icid; // Assign the ID of the category

            // Assuming you have a relationship with restaurants, you can assign the restaurant_id here
            $subcategory->save();

            return redirect('/all-sub-category/');
        } catch (\Exception $e) {
            // Handle the exception
            // return "Error: " . $e->getMessage();
            $itemCategoryData = ItemCategory::all();
            $total_item = ItemCategory::all()->count();
            $total_user = User::all()->count();
            $total_subcategory = Subcategory::all()->count();
            $context = ["Error"=>"The category name has already been taken.","itemCategoryData"=>$itemCategoryData,"total_item"=>$total_item,"total_user"=>$total_user,"total_subcategory"=>$total_subcategory];
            return view('admin.addsubCatAdminPanel',$context);

        }

    }


    public function allsubCategoryAdminUpdate(Request $req,string $id)
    {
        $subCategoryData = Subcategory::find($id);

        // If the ItemCategory doesn't exist, return an error message
        if (!$subCategoryData) {
            return "Item category not found!";
        }

        // Update the item_category_name and item_category_description
        $subCategoryData->subcategory_name = $req->catName;
        $subCategoryData->subcategory_description = $req->catDesc;
        if($req->catImage)
        {
        $file = $req->file('catImage');
        $path = $req->catImage->store('item_sub_category','public');
        $subCategoryData->subcategory_image = $path;
        }
        $subCategoryData->save();

        return redirect('/all-sub-category/');
    }

    public function allsubCategoryAdmindelete(string $id)
    {
        $Subcategory = Subcategory::find($id);
        $Subcategory->delete();

        return redirect('/all-sub-category/');
    }
}
