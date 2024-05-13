<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\ItemCategory;
use App\Models\Item;
use App\Models\User;

class ItemController extends Controller
{
    public function allItemAdmin()
    {
        $allItem = Item::all();
        $allSubCategory = Subcategory::all();
        $total_item = ItemCategory::all()->count();
        $total_user = User::all()->count();
        $total_items = Item::all()->count();
        $total_subcategory = Subcategory::all()->count();
        $context = ["allItem"=>$allItem,"allSubCategory"=>$allSubCategory,"total_items"=>$total_items,"total_item"=>$total_item,"total_user"=>$total_user,"total_subcategory"=>$total_subcategory];
        return view('admin/allItemAdminPanel',$context);
    }

    public function addItemAdminPanel()
    {
        $total_item = ItemCategory::all()->count();
        $total_user = User::all()->count();
        $total_items = Item::all()->count();
        $total_subcategory = Subcategory::all()->count();
        $allsubCategory = Subcategory::get();
        $context=['allsubCategory'=>$allsubCategory,"Error"=>"","total_items"=>$total_items,"total_item"=>$total_item,"total_user"=>$total_user,"total_subcategory"=>$total_subcategory];
        return view('admin/addItemAdminPanel',$context);
    }


        public function addItemAdminPanelData(Request $request)
        {
            try {
                $validatedData = $request->validate([
                    'itemName' => 'required|string|max:600|unique:items,item_name',
                    'itemPrice' => 'required|numeric|max:1000000',
                    'itemImage' => 'required|image',
                    'itemDesc'=>'required|string|max:65535'
                ]);

                $catName = $request->input('Catitem');
                $getCategory = Subcategory::where('subcategory_name', $catName)->first();

                // Ensure the category exists
                if (!$getCategory) {
                    throw new \Exception("Category not found.");
                }

                $file = $request->file('itemImage');
                $path = $request->itemImage->store('item','public');




                // Check if file was stored successfully


                // Create a new subcategory
                $item = new Item();
                $item->item_name = $validatedData['itemName'];
                $item->item_price = $validatedData['itemPrice'];
                $item->item_description = $validatedData['itemDesc'];
                $item->item_image = $path;
                $item->subcategory_id  = $getCategory->isid; // Assign the ID of the category

                // Assuming you have a relationship with restaurants, you can assign the restaurant_id here
                $item->save();

                return redirect('/all-Item-Admin/');
            } catch (\Exception $e) {
                // Handle the exception
                // return "Error: " . $e->getMessage();
                $allsubCategory = Subcategory::all();
                $total_item = ItemCategory::all()->count();
                $total_user = User::all()->count();
                $total_items = Item::all()->count();
                $total_subcategory = Subcategory::all()->count();
                echo $e->getMessage();
                $context = ["Error"=>"The Item name has already been taken.","allsubCategory"=>$allsubCategory,"total_items"=>$total_items,"total_item"=>$total_item,"total_user"=>$total_user,"total_subcategory"=>$total_subcategory];


                return view('admin.addItemAdminPanel',$context);

            }
        }

    public function  allItemAdminUpdate(Request $req,string $id)
    {
        $itemData = Item::find($id);

        // If the ItemCategory doesn't exist, return an error message
        if (!$itemData) {
            return "Item category not found!";
        }
        $subcategory = Subcategory::where('subcategory_name',$req->Catitem)->first();
        // Update the item_category_name and item_category_description
        $itemData->item_name = $req->itemName;
        $itemData->item_price = $req->itemPrice;
        $itemData->subcategory_id = $subcategory->isid;
        $itemData->item_description = $req->itemDesc;

        // Check if a file was uploaded
        if ($req->hasFile('itemImage')) {
            // Get the uploaded file

            $file = $req->file('itemImage');
            $path = $req->itemImage->store('item','public');




            $itemData->item_image = $path;

        }
        $itemData->save();
        return redirect("/all-Item-Admin/");
    }

    public function allItemAdmindelete(string $id)
    {
        $itemData = Item::find($id);
        $itemData->delete();

        return redirect('/all-Item-Admin/');
    }
}




