<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\ItemCategory;
use App\Models\OrderedItem;
use App\Models\Odr;
use App\Models\User;
use App\Models\Item;
class allorder extends Controller
{
    public function allorder()
    {
        $ordered_items = OrderedItem::all();
        $total_item = ItemCategory::all()->count();
        $total_user = User::all()->count();
        $total_subcategory = Subcategory::all()->count();
        $total_items = Item::all()->count();
        $context=['ordered_items'=>$ordered_items,"total_items"=>$total_items,"total_item"=>$total_item,"total_user"=>$total_user,"total_subcategory"=>$total_subcategory];
        return view('admin.allorderadminpanel',$context);
    }

    public function allOrderAdminUpdate(Request $req, string $id) {
        $order1 = Odr::find( $id); // Retrieve the model instance
        $order1->order_status = $req->orderStatus; // Make sure to enclose the string in quotes
        $order1->save();
        return response()->json(['message' => 'Order placed successfully'], 200);
    }


}
