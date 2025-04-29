@extends('layouts.home')

@section('content')




<div class="bg-white p-4  fill-screen row gap-4  " style="margin-top:100px;margin-left:40px;margin-right:40px" >

<div class="row col-12 gap-1 justify-content-between ">

<a href="{{route('type',['type'=>'canceled'])}}"  class="card shadow-sm p-4 col-12 shadow  col-sm-3 font-bold font-lg fs-4" > 
    
  <label  class="fs-2">{{$canceled}} </label> Canceled</a>
<a href="{{route('type',['type'=>'delivered'])}}" class="card shadow-sm p-4 col-12 shadow  col-sm-3 font-bold font-lg fs-4"> 
   
  <label  class="fs-2">{{$delivered}} </label> Delivered</a>

<a href="{{route('type',['type'=>'shipped'])}}" class="card shadow-sm p-4 col-12  shadow col-sm-3 font-bold font-lg fs-4"> 
    
  <label class="fs-2">{{$shipped}} </label> Shipped (on Transit)
</a>
</div>


<div class="col-12">


  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-uppercase">{{$item_name}}</h6>
      </div>
      <div class="card-body">
        <form method="GET" action="/dashboard/search" class="mb-4    ">
          @csrf
          <div class="form-row row  ">
              <div class="col-md-4">
                  <input type="text" name="search" class="form-control h-full" placeholder="Search..." value="{{ request('search') }}">
              </div>
              <div class="col-md-4">
                <select class="form-control" name="search_type">

                  <option value="by_keyword"> Search by Keyword</option>
                  <option value="by_id"> Search by ID</option>

                </select>
            </div>
              <div class="col-md-2">
                  <button type="submit" class="btn  text-white" style="background-color:#2A9D8F">Search</button>
              </div>
          </div>
      </form>

          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Item ID</th>

                          <th>Name of Item</th>
                          <th>Type</th>
                          <th>Mode</th>
                          <th>Status</th>
                          <th>Pieces</th>
                          <th>Weight</th>
                          <th>Cubic</th>
                          <th>Start Date</th>
                          <th>Arrival Date</th>
                          <th>Sender</th>
                          <th>Package Origin</th>
                          <th>Parcel Destination</th>
                          <th>Receiver</th>
                          <th>Active Location</th>
                          <th>Message</th>


                          
                      </tr>
                  </thead>
                  {{-- <tfoot>
                      <tr>
                          <th>Full Name</th>
                          <th>Location</th>
                          <th>Phone Number</th>
                          <th>Email</th>
                          
                      </tr>
                  </tfoot> --}}
                  <tbody>
                      @foreach($items as $item)
                      <tr>
                          <td>{{$item->item_id}}</td>

                          <td>{{$item->name_of_item}}</td>
                          <td>{{$item->type}}</td>
                          <td>{{$item->mode}}</td>
                          <td>{{$item->status}}</td>
                          <td>{{$item->pieces}}</td>
                          <td>{{$item->weight}}KG</td>
                          <td>{{$item->cubic}}</td>
                          <td>{{$item->start_date}}</td>
                          <td>{{$item->arrival_date}}</td>
                          <td>{{$item->sender}}</td>
                          <td>{{$item->package_origin}}</td>
                          <td>{{$item->parcel_destination}}</td>
                          <td>{{$item->receiver}}</td>
                          <td>{{$item->active_current_location}}</td>
                          <td>{{$item->message}}</td>

                        
                          
                      </tr>
                      {{-- {{$Item}} --}}
                      @endforeach
                      
                     
                     
  
                      <tr>

                      
                       
                     
                    

                    </tr>
                  
                  </tbody>
              </table>

              @if (isset($items))
                
              
              @if($items->isEmpty())

              <div class="container mt-5">
                <div class="row justify-content-center">
                  <div class="col-12 col-md-8">
                    <div class="alert alert-warning" role="alert">
                      <h4 class="alert-heading">No Results Found</h4>
                      <p>Sorry, we couldn't find any items matching your search criteria. Please try a different search or filter.</p>
                      <hr>
                      <p class="mb-0">You may want to check your spelling or broaden your search terms.</p>
                    </div>
                  </div>
                </div>
              </div>
              @endif
              @endif
              <div class="d-flex">
                


                @if(method_exists($items, 'links'))
              {{$items->links('pagination::bootstrap-5')}}

              @endif
              {{-- {{ $items->links('pagination.custom') }} --}}
            </div>
          </div>
      </div>
  </div>
</div>

    <div class="card shadow z-3  col-12 " >
        <div class="card-body">
          <h2 class="card-title mb-4">Generate Track ID</h2>
          <form method="POST" action="{{route('generate_id')}}">
            

            @csrf
        <fieldset>
          
            <div class="row mb-3">
                <label for="type" class="col-sm-12 col-form-label">Name of Item</label>
                <div class="col-sm-12">
                 <input type="text" class="form-control" name="name_of_item" required />
                </div>
              </div>
          <div class="row mb-3">
            <label for="type" class="col-sm-12 col-form-label">Type</label>
            <div class="col-sm-12">
              <select class="form-control" name="type" required>

                <option>Packed and Sealed </option>
                <option> Private </option>

              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="mode" class="col-sm-12 col-form-label">Mode</label>
            <div class="col-sm-12">
                <select class="form-control" name="mode" required>

                    <option>Air </option>
                    <option> Road </option>
                    <option> Sea </option>
                    <option> Courier </option>
    
                  </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="status" class="col-sm-12 col-form-label">Status</label>
            <div class="col-sm-12">
                <select class="form-control" name="status" required>

                    <option>Canceled</option>
                    <option>Delivered</option>
                    {{-- <option>On Transit</option> --}}
                    <option>Pending</option>
                    <option>Shipped</option>
                    {{-- <option>Out for Delivery</option> --}}
                    <option>Delayed</option>
    
                  </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="pieces" class="col-sm-12 col-form-label">Pieces</label>
            <div class="col-sm-12">
              <input type="number" class="form-control" id="pieces" name="pieces" required maxlength="6" >
            </div>
          </div>
          <div class="row mb-3">
            <label for="weight" class="col-sm-12 col-form-label">Weight(KG)</label>
            <div class="col-sm-12">
              <input type="number" class="form-control" id="weight"  name="weight">
             
            </div>
          </div>
          <div class="row mb-3">
            <label for="cubic" class="col-sm-12 col-form-label">Cubic (CB)</label>
            <div class="col-sm-12">
              <input type="number" class="form-control" id="cubic"  name="cubic">
            </div>
          </div>
          <div class="row mb-3">
            <label for="startDate" class="col-sm-12 col-form-label">Start Date</label>
            <div class="col-sm-12">
                <input type="date" class="form-control" id="date" name="start_date" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="arrivalDate" class="col-sm-12 col-form-label">Arrival Date</label>
            <div class="col-sm-12">
                <input type="date" class="form-control" id="date" name="arrival_date" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="sender" class="col-sm-12 col-form-label">Sender</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="sender" name="sender"  required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="origin" class="col-sm-12 col-form-label">Package Origin</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="origin" name="package_origin"  required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="dest" class="col-sm-12 col-form-label">Parcel Destination</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="dest" name="parcel_destination" required >
            </div>
          </div>
          <div class="row mb-3">
            <label for="receiver" class="col-sm-12 col-form-label">Receiver</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="receiver" name="receiver"  required>
            </div>
          </div>
           <div class="row mb-3">
            <label for="currentLocation" class="col-sm-12 col-form-label">Active Current Location</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="currentLocation" name="active_current_location"  >
            </div>
          </div>
        </fieldset>
        <div class="row mb-3">
            <label for="message" class="col-sm-12 col-form-label">Message</label>
            <div class="col-sm-12">
              <textarea class="form-control" id="message" rows="3" name="message"></textarea>
            </div>
          </div>


          <div class="row mb-3">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

          </form>
        </div>
      </div>


    
        



    
</div>


@endsection