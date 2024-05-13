<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subcategory;
use App\Models\ItemCategory;
use App\Models\Item;
use App\Models\Cart;
use App\Models\Odr;
use App\Models\OrderedItem;


class userController extends Controller
{
    public function about(){
        return view('customer.about');
    }
    public function contact(){
        return view('customer.contact');
    }

    public function myorder(Request $req){
        if ($req->session()->get('email')) {
            $user = User::where('email', session('email'))->first();
            $order_items = OrderedItem::where('user_id', $user->iduser)->get();

            $context=['order_items'=>$order_items ,"user"=>$user];
            return view('customer.myorder',$context);
        }
        else
        {
            return view('customer.myorder',['user'=>null]);
        }
    }

    public function index(Request $req){
        if ($req->session()->get('email')) {
            // Retrieve the user based on the email session
            // echo  session('email');
            $user = User::where('email', session('email'))->first();

            if ($user) {
                // Get other data you need
                $itemcategory = ItemCategory::all();
                $subcategory = Subcategory::all();
                $item = Item::all();
                $mobile = Subcategory::where('item_cat_id',1)->get();
                $tv = Subcategory::where('item_cat_id',5)->get();
                $mensware = Subcategory::where('item_cat_id',3)->get();
                $women = Subcategory::where('item_cat_id',4)->get();
                // Pass data to the view
                $context = ['uid' => $user, "itemcategory" => $itemcategory, 'subcategory' => $subcategory, 'item' => $item,'mobile'=>$mobile,'tv'=>$tv,'mensware'=>$mensware,'women'=>$women];
                return view('customer.index', $context);
            }
            // return view('customer.index');
        }
        else{
            $itemcategory = ItemCategory::all();
            $subcategory = Subcategory::all();
            $item = Item::all();
            $mobile = Subcategory::where('item_cat_id',1)->get();
            $tv = Subcategory::where('item_cat_id',5)->get();
            $mensware = Subcategory::where('item_cat_id',3)->get();
            $women = Subcategory::where('item_cat_id',4)->get();
            $context = ['uid' => null, "itemcategory" => $itemcategory, 'subcategory' => $subcategory, 'item' => $item,'mobile'=>$mobile,'tv'=>$tv,'mensware'=>$mensware,'women'=>$women];
            return view('customer.index',$context);
        }
    }

    public function register(){
        return view("customer.register",['Error'=>""]);
    }

    public function registerData(Request $req){
        try {
            $validatedData = $req->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'mobile' => 'required|string|max:255',
                'password' => 'required|string|min:8', // Example validation, adjust as needed
                'email' => 'required|string|email|max:255|unique:users,email',
            ]);

            $user = new User();
            $user->first_name = $validatedData['first_name'];
            $user->last_name = $validatedData['last_name'];
            $user->mobile = $validatedData['mobile'];
            $user->password = $validatedData['password']; // Hash the password
            $user->email  = $validatedData['email'];
            $user->status = "customer";

            $user->save();

             return redirect('/login/');
        } catch (\Exception $e) {
            // Handle the exception
            // return "Error: " . $e->getMessage();
            //echo $e->getMessage();
            $context = ['Error'=>$e->getMessage()];
            return view('customer.register',$context);

        }
    }

    public function login(){
        $context= ["Error"=>""];
        return view('customer.login',$context);
    }

    public function logindata(Request $req)
    {
        if ($req->session()->get('email')) {
            // Retrieve the user based on the email session
             //echo  session('email');
            $user = User::where('email', session('email'))->first();

            if ($user->status == 'customer') {
                // Get other data you need
                $itemcategory = ItemCategory::all();
                $subcategory = Subcategory::all();
                $electronics = Subcategory::where('item_cat_id', 2)->get();


                $item = Item::all();
                return redirect('/');
                // Pass data to the view
                // $context = ['uid' => $user, "itemcategory" => $itemcategory, 'subcategory' => $subcategory, 'item' => $item ,'electronics'=>$electronics];
                // return view('customer.index', $context);
            }
            else if($user->status == 'admin')
            {
                return view('admin.adminpanel');
            }
        }
        else
        {
            try {
                $validatedData = $req->validate([
                    'password' => 'required|string|min:8',
                    'email' => 'required|string|email|max:255',
                ]);

                // Retrieve the user based on the provided email
                $user = User::where('email', $validatedData['email'])->first();
                if (!$user)
                {
                    $context=["Error"=>"User Not found "];
                    return view('customer.login',$context);
                }
                else if  ($user->email == $validatedData['email'] and $user->password == $validatedData['password'] and $user->status=='customer') {
                    // User found, set email session
                    session(['email' => $validatedData['email']]);
                    $email =  session('email');

                    //Retrieve the user's ID

                    // Pass data to the view

                    return redirect('/');
                }
                else if($user->email == $validatedData['email'] and $user->password == $validatedData['password'] and $user->status=='admin')
                {


                    return view('admin.adminpanel');

                }
                else {
                    // User not found
                    $context=["Error"=>"Invalid Password"];
                    return view("customer.login",$context);
                }

            } catch (\Exception $e) {
                // Handle the exception
                $context=['Error'=>$e->getMessage()];
                return  view("customer.login",$context);
            }

        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        // Redirect the user to the login page or any other desired page
        return redirect('/login/');
    }


    public function subcategory(Request $req, string $id){
        $item = Item::where('subcategory_id',$id)->get();
        $context = ["item"=>$item];

        return view('customer/item',$context);

    }

    public function single_product(Request $req, string $id){
        $item = Item::where('iid',$id)->get();
        $context = ["item"=>$item];

        return view('customer/single_product',$context);
    }


    public function cart(Request $req){
        if ($req->session()->has('email')) {
            $user = User::where('email', $req->session()->get('email'))->first();
            $cart = cart::where('user_id', $user->iduser)->get();
            $user1 = User::where('email', $req->session()->get('email'))->get();
            $context=["cart"=>$cart,"user"=>$user1];
            return view('customer.cart',$context);
        }
        else{
            return redirect('/login/');
        }
    }

    //cartdelete
    public function cartdelete(Request $req,string $id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect('/cart/');
    }



    public function addtocart(Request $req, string $id) {
        if ($req->session()->has('email')) {
            $user = User::where('email', $req->session()->get('email'))->first();

            // Retrieve the item by its ID
            $item = Item::where('iid', $id)->first();

            if ($item) { // Check if the item exists
                $cart = new Cart();
                $cart->user_id = $user->iduser;
                $cart->item_id = $item->iid;
                $cart->price = $item->item_price;
                $cart->save();
                echo $item->subcategory->isid;
                return redirect('/subcategory/'.$item->subcategory->isid);

                echo "<script>alert('Success');</script>";

            } else {
                // Handle the case where the item with the provided ID doesn't exist
            }
        }
        else{
            return redirect('/login/');
        }
    }
    public function cartdata(Request $request)
    {
        $cartItems = $request->cart;

        // Loop through each cart item and update it in the database
        foreach ($cartItems as $cartItem)
        {
            $cart = Cart::find($cartItem['cid']);

            // Check if the cart item exists
            if ($cart)
            {
                $quantity = $cartItem['quantity'];
                $price  = $cartItem['item_price'];
                $total = $quantity * $price;

                // Update the quantity
                $cart->quentity = $quantity;
                $cart->price = $price;
                $cart->totalprice = $total;
                $cart->save();
            }
            else
            {
                // Log the error or return a response indicating that the cart item was not found
                \Log::error("Cart item not found for cid: {$cartItem['cid']}");
                // or
                // return response()->json(['error' => 'Cart item not found'], 404);

            }
        }
        $iduser = $request->input('iduser');
        // echo $uid;
        $cart = Cart::where('user_id', $iduser)->get();
        $carts = Cart::where('user_id', $iduser);
        $carts->delete();
        $subtotal = 0;
        foreach($cart as $carts)
        {
            $subtotal += $carts->totalprice;
            // echo $cart->item->item_name;
        }

        $Delivery = 40;
        $total1 = $subtotal;
        $total = $total1+$Delivery;
        $context = ['iduser'=>$iduser,'cart'=>$cart,'subtotal'=>$subtotal,'Delivery'=>$Delivery,'total'=>$total];



        return view('customer.checkout',$context);
    }

    public function orderdata(Request $req){
        if ($req->session()->has('email')) {
            $user = User::where('email', $req->session()->get('email'))->first();
            $date = date("Y/m/d");
            $order = new Odr();
            $order->orderfname = $req->input('orderfname');
            $order->orderlname = $req->input('orderlname');
            $order->orderemail = $req->input('orderemail');
            $order->ordermobile = $req->input('ordermobile');
            $order->order_delivery_address = $req->input('order_delivery_address');
            $order->order_date = $date;
            $order->city = $req->input('city');
            $order->total_amount = $req->input('total_amount');
            $order->user_id = $req->input('user_id');

            $order->save();
            // echo $order->oid;
            $cartItems = $req->cart;
            foreach ($cartItems as $cartItem)
            {

                $orderitem = new OrderedItem();

                $orderitem->odr_id = $order->oid;
                $orderitem->item_id = $cartItem['item_id'];
                $orderitem->user_id = $user->iduser;
                $orderitem->price = $cartItem['price'];
                $orderitem->quantity = $cartItem['quantity'];
                $orderitem->totalprice = $cartItem['totalprice'];
                $orderitem->save();

                // Check if the cart item exists

            }
            echo "<script>alert('Order Confirmed')</script>";
            return redirect('/myorder/');
        }

        // return response()->json(['message' => 'Order placed successfully'], 200);


    }

    public function buynow(Request $req, string $id){
        if ($req->session()->has('email')) {
            $user = User::where('email', $req->session()->get('email'))->first();

            $item1 = Item::find($id);

            // Check if the cart item exists
            $iduser = $user->iduser;
            $subtotal = $item1->item_price;

            $itemid = $item1->iid;
            $item_name = $item1->item_name;
            $item_price = $item1->item_price;
            $totalprice = $item1->item_price;
            $item_image = $item1->item_image;
            $quentity =1;


            $Delivery = 40;
            $total = $Delivery+$subtotal;

            $context = ['iduser'=>$iduser,'cart'=>$item1,'subtotal'=>$subtotal,'Delivery'=>$Delivery,'total'=>$total,'itemid'=>$itemid,'item_name'=>$item_name,'item_price'=>$item_price,"totalprice"=>$totalprice,"quentity"=>$quentity, "item_image"=>$item_image];

            return view('customer.checkoutbuynow',$context);
        }
        else{
            return redirect('/login/');
        }

    }
//buynowdata
    public function buynowdata(Request $req){
        if ($req->session()->has('email')) {
            $user = User::where('email', $req->session()->get('email'))->first();

            $date = date("Y/m/d");
            $order = new Odr();
            $order->orderfname = $req->input('orderfname');
            $order->orderlname = $req->input('orderlname');
            $order->orderemail = $req->input('orderemail');
            $order->ordermobile = $req->input('ordermobile');
            $order->order_delivery_address = $req->input('order_delivery_address');
            $order->order_date = $date;
            $order->city = $req->input('city');
            $order->total_amount = $req->input('total_amount');
            $order->user_id = $req->input('user_id');

            $order->save();
            // echo $order->oid;

                $orderitem = new OrderedItem();

                $orderitem->odr_id = $order->oid;
                $orderitem->item_id = $req->itemid;
                $orderitem->user_id = $user->iduser;
                $orderitem->price = $req->item_price;
                $orderitem->quantity = $req->quentity;
                $orderitem->totalprice = $req->totalprice;
                $orderitem->save();

                echo "<script>alert('Order Confirmed')</script>";
                return redirect('/myorder/');

        }
    }
    public function cancelorder(string $id){
        $order1 = Odr::find($id); // Retrieve the model instance
        $order1->order_status = "Cancel Order"; // Make sure to enclose the string in quotes
        $order1->save();
        echo "<script>alert('Order canceled')</script>";
        return redirect('/myorder/');
    }

    public function productlistAjax()
    {
        $products = Subcategory::all();
        $data = [];
        foreach ($products as $item)
        {
            $data[] = $item['subcategory_name'];
        }
        return $data;
    }
    public function searchproduct(Request $req){
        $search_product =$req->product_name;
        $product = Subcategory::where('subcategory_name',$search_product)->first();
        if ($product )
        {
            $product = Subcategory::where('subcategory_name',$search_product)->first();
            //  echo $product->isid;
            return redirect('/subcategory/'.$product->isid);
        }
        else
        {
            return redirect()->back();
        }
    }
}



