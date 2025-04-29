<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class GuestController extends Controller
{
    //



    public function track()
    {





        return view('track');
    }

    public function find()
    {

        $item_id=request('item_id');

        $track=Item::where("item_id","=",$item_id)->first();
if(is_null($track))
{       

    return view ('track')->with('error','Incorrect ID');
}


else{
    
    return view ('track')->with('item',$track);


    }

        
    }
}
