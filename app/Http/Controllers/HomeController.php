<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;


function generateCustomID(int $numericLength = 9, bool $useTimestamp = false): string {
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';

    $letterPart = substr(str_shuffle($letters), 0, 4);
    $numberPart = substr(str_shuffle($numbers), 0, $numericLength);

    if ($useTimestamp) {
        $timestamp = now()->format('YmdHis'); // Get current timestamp in YYYYMMDDHHMMSS format
        $numberPart = $timestamp . $numberPart;
    }

    return  "D" . $letterPart . $numberPart;
}
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


   
    public function index()
    {
        return view('home');
    }


    public function view()

    {
        $item=Item::paginate(7);
        $delivered=Item::where('status','=','Delivered')->count();
        $Canceled=Item::where('status','=','Canceled')->count();
        $Shipped=Item::where('status','=','Shipped')->count();


        return view('dashboard')->with('items',$item)
                                ->with('delivered',$delivered)
                                ->with('shipped',$Shipped)
                                ->with('canceled',$Canceled)
                                ->with('item_name',"All Items");

    }


    public function store ()


    {

        $id=generateCustomID(7);

        $item=new Item();
        $item->name_of_item=request('name_of_item');
        $item->item_id=$id;

        $item->type=request('type');
        $item->mode=request('mode');
        $item->status=request('status');
        $item->pieces=request('pieces');
        $item->weight=request('weight');
        $item->cubic=request('cubic');
        $item->start_date=request('start_date');
        $item->arrival_date=request('arrival_date');
        $item->sender=request('sender');
        $item->package_origin=request('package_origin');
        $item->parcel_destination=request('parcel_destination');
        $item->receiver=request('receiver');
        $item->active_current_location=request('active_current_location');
        $item->message=request('message');

        $item->save();

        $items=Item::paginate(7);
 

$delivered=Item::where('status','=','Delivered')->count();
$Canceled=Item::where('status','=','Canceled')->count();
$Shipped=Item::where('status','=','Shipped')->count();



return view('dashboard')->with('items',$items)
                        ->with('delivered',$delivered)
                        ->with('shipped',$Shipped)
                        ->with('canceled',$Canceled)
                        ->with('item_name',"All Items");




        
    }





    public function new_view($type)
    {

        $item=Item::where('status','=',$type)->paginate(7);
        
        $delivered=Item::where('status','=','Delivered')->count();
        $Canceled=Item::where('status','=','Canceled')->count();
        $Shipped=Item::where('status','=','Shipped')->count();


        return view('dashboard')->with('items',$item)
                                ->with('delivered',$delivered)
                                ->with('shipped',$Shipped)
                                ->with('canceled',$Canceled)
                                ->with('item_name',$type);




    }



    public function search()
    {
        $search=request('search');

        $search_type=request('search_type');

        session()->put('search', $search); 
        session()->put('search_type', $search_type); 

        // session([
        //     'search' => $search,
        //     'search_type' => $search_type,
        // ]);

        $delivered=Item::where('status','=','Delivered')->count();
        $Canceled=Item::where('status','=','Canceled')->count();
        $Shipped=Item::where('status','=','Shipped')->count();

       if($search_type=='by_keyword')
       {


    //     $items = YourModel::where('item_id', 'LIKE', '%' . $searchTerm . '%')
    // ->orWhere('name_of_item', 'LIKE', '%' . $searchTerm . '%')
    // ->orWhere('type', 'LIKE', '%' . $searchTerm . '%')
    // // ... (add more orWhere clauses)
    // ->paginate(10)
    
    
    $item=Item::where('item_id','LIKE','%'.$search.'%')
                    ->orWhere('name_of_item','LIKE','%'.$search.'%')
                    ->orWhere('sender','LIKE','%'.$search.'%')
                    ->orWhere('parcel_destination','LIKE','%'.$search.'%')
                    ->orWhere('package_origin','LIKE','%'.$search.'%')
                    ->orWhere('receiver','LIKE','%'.$search.'%')
                    ->orWhere('active_current_location','LIKE','%'.$search.'%')
                    ->orWhere('status','LIKE','%'.$search.'%')
                    ->paginate(7);
        
     


        return view('dashboard')->with('items',$item)
                                ->with('delivered',$delivered)
                                ->with('shipped',$Shipped)
                                ->with('canceled',$Canceled)
                                ->with('item_name',"Search results");

                               
       }

       else if($search_type=='by_id')
       {


        $item=Item::where('item_id','=',$search)->get();
        
       



        return view('dashboard')->with('items',$item)
                                ->with('delivered',$delivered)
                                ->with('shipped',$Shipped)
                                ->with('canceled',$Canceled)
                                ->with('item_name',"Search results");



       }

       else{

        $search=session()->get('search');

        $item=Item::where('item_id','LIKE','%'.$search.'%')
                    ->orWhere('name_of_item','LIKE','%'.$search.'%')
                    ->orWhere('sender','LIKE','%'.$search.'%')
                    ->orWhere('parcel_destination','LIKE','%'.$search.'%')
                    ->orWhere('package_origin','LIKE','%'.$search.'%')
                    ->orWhere('receiver','LIKE','%'.$search.'%')
                    ->orWhere('status','LIKE','%'.$search.'%')
                    ->orWhere('active_current_location','LIKE','%'.$search.'%')
                    ->paginate(7);


        // return view('dashboard')->with('items',$item)
        //                         ->with('delivered',$delivered)
        //                         ->with('shipped',$Shipped)
        //                         ->with('canceled',$Canceled)
        //                         ->with('item_name',"Search results");
echo session()->get('search');

       }




    }
}

