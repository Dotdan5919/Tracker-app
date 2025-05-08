@extends('layouts.home')

@section('content')




<div class="bg-white p-4  fill-screen row gap-4  " style="margin-top:140px;margin-left:40px;margin-right:40px" >

<div class="row col-12 gap-1 justify-content-center ">

<a href="{{route('type',['type'=>'canceled'])}}" 
   class="dashboard-display card shadow-sm p-4 col-12 shadow  col-sm-3 font-bold font-lg fs-4  @if($item_name=='canceled') active-item  @endif " > 
    
  <label  class="fs-2 d-flex justify-content-between">{{$canceled}} 
    
    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-circle">
      <circle cx="12" cy="12" r="10"/>
      <path d="m15 9-6 6"/>
      <path d="m9 9 6 6"/>
    </svg>
  
  </label> Canceled</a>

<a href="{{route('type',['type'=>'delivered'])}}" class="dashboard-display card shadow-sm p-4 col-12 shadow  col-sm-3 font-bold font-lg fs-4 @if($item_name=='delivered') active-item  @endif"> 
   
  <label  class="fs-2 d-flex justify-content-between">{{$delivered}} <svg class=" text-gray-800 dark:text-white" width="41" height="41" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10.051 8.102-3.778.322-1.994 1.994a.94.94 0 0 0 .533 1.6l2.698.316m8.39 1.617-.322 3.78-1.994 1.994a.94.94 0 0 1-1.595-.533l-.4-2.652m8.166-11.174a1.366 1.366 0 0 0-1.12-1.12c-1.616-.279-4.906-.623-6.38.853-1.671 1.672-5.211 8.015-6.31 10.023a.932.932 0 0 0 .162 1.111l.828.835.833.832a.932.932 0 0 0 1.111.163c2.008-1.102 8.35-4.642 10.021-6.312 1.475-1.478 1.133-4.77.855-6.385Zm-2.961 3.722a1.88 1.88 0 1 1-3.76 0 1.88 1.88 0 0 1 3.76 0Z"/>
  </svg>
   </label> Delivered</a>

<a href="{{route('type',['type'=>'shipped'])}}" class="dashboard-display card shadow-sm p-4 col-12  shadow col-sm-3 font-bold font-lg fs-4 @if($item_name=='shipped') active-item  @endif "> 
    
  <label class="fs-2 d-flex justify-content-between">{{$shipped}} 
    <svg class="w-[41px] h-[41px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="41" height="41" fill="currentColor" viewBox="0 0 24 24">
      <path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.535a3.5 3.5 0 1 0 6.93 0h3.07a3.5 3.5 0 1 0 6.93 0H21a1 1 0 0 0 1-1v-4a.999.999 0 0 0-.106-.447l-2-4A1 1 0 0 0 19 6h-5a2 2 0 0 0-2-2H4Zm14.192 11.59.016.02a1.5 1.5 0 1 1-.016-.021Zm-10 0 .016.02a1.5 1.5 0 1 1-.016-.021Zm5.806-5.572v-2.02h4.396l1 2.02h-5.396Z" clip-rule="evenodd"/>
    </svg>
    
</label> Shipped (on Transit)
</a>
</div>


<div class="col-12">


  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold  text-uppercase mytext-color">{{$item_name}}</h6>
      </div>
      <div class="card-body">
        <form method="POST" action="/dashboard/search" class="mb-4    ">
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
                      <tr class="mybg-color text-white">
                          <th>Item ID</th>

                          <th>Name of Item</th>
                          <th>Description</th>
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
                      <tr class="table-hover" data-toggle="modal" data-target="#{{$item->item_id}}" >
                       
                          <td>{{$item->item_id}}</td>

                          <td>{{$item->name_of_item}}</td>
                          <td>{{$item->message}}</td>
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

                     
                          
                      </tr>
                      <div class="modal fade" id="{{$item->item_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              
                            
                            </div>
                            <div class="modal-body">
                              <div class="card-body">
                                <h2 class="card-title h5 border-bottom pb-2">{{$item->name_of_item}}</h2>
                                <p class="card-text small text-muted">Item ID:{{$item->item_id}}</p>
                                <div class="row mb-2 pt-2">
                                  <div class="col-6">
                                    <p class="card-text small font-medium text-muted">Type</p>
                                    <p class="card-text small">{{$item->type}}</p>
                                  </div>
                                  <div class="col-6 text-right">
                                    <p class="card-text small font-medium text-muted">Mode</p>
                                    <p class="card-text small">{{$item->mode}}</p>
                                  </div>
                                </div>
                                <div class="row mb-2 pt-2">
                                  <div class="col-6">
                                    <p class="card-text small font-medium text-muted">Status</p>
                                    <p class="card-text small">{{$item->status}}</p>
                                  </div>
                                  <div class="col-6 text-right">
                                    <p class="card-text small font-medium text-muted">Pieces</p>
                                    <p class="card-text small">{{$item->pieces}}</p>
                                  </div>
                                </div>
                                <div class="row mb-2 pt-2">
                                  <div class="col-6">
                                    <p class="card-text small font-medium text-muted">Weight</p>
                                    <p class="card-text small">{{$item->weight}} KG</p>
                                  </div>
                                  <div class="col-6 text-right">
                                    <p class="card-text small font-medium text-muted">Cubic (CB)</p>
                                    <p class="card-text small">{{$item->cubic}}</p>
                                  </div>
                                </div>
                                <div class="row mb-2 pt-2">
                                  <div class="col-6">
                                    <p class="card-text small font-medium text-muted">Start Date</p>
                                    <p class="card-text small">{{$item->start_date}}</p>
                                  </div>
                                  <div class="col-6 text-right">
                                    <p class="card-text small font-medium text-muted">Arrival Date</p>
                                    <p class="card-text small">{{$item->arrival_date}}</p>
                                  </div>
                                </div>
                                 <div class="row mb-2 pt-2">
                                  <div class="col-6">
                                    <p class="card-text small font-medium text-muted">Sender</p>
                                    <p class="card-text small">{{$item->sender}}</p>
                                  </div>
                                  <div class="col-6 text-right">
                                    <p class="card-text small font-medium text-muted">Package Origin</p>
                                    <p class="card-text small">{{$item->package_origin}}</p>
                                  </div>
                                </div>
                                <div class="row mb-2 pt-2">
                                  <div class="col-6">
                                    <p class="card-text small font-medium text-muted">Parcel Destination</p>
                                    <p class="card-text small">{{$item->parcel_destination}}</p>
                                  </div>
                                  <div class="col-6 text-right">
                                    <p class="card-text small font-medium text-muted">Receiver</p>
                                    <p class="card-text small">{{$item->receiver}}</p>
                                  </div>
                                </div>
                                <div class="row mb-2 pt-2">
                                  <div class="col-6">
                                    <p class="card-text small font-medium text-muted">Active Current Location</p>
                                    <p class="card-text small">{{$item->active_current_location}}</p>
                                  </div>
                                  
                                  <div class="col-6 text-right">
                                    <p class="card-text small font-medium text-muted">Parcel Description</p>
                                    <p class="card-text small">{{$item->message}}</p>
                                </div>
                                  
                                  <div class="row mb-2 pt-2">
                                    <div class="col-6">
                                      <p class="card-text small font-medium text-muted"></p>
                                      <p class="card-text small"></p>
                                    </div>
                                </div>
                                <form action="{{route('update')}}" method="POST">
                                  @csrf

                                <div class="mt-4">
                                  <h3 class="card-title h6 small font-medium text-muted mb-2">Status</h3>
                                  
                                  <select class="form-control" name="status" value="{{$item->status}}"  class="border border-secondary rounded p-3 bg-light text-sm">
                                      @switch($item->status)
                                        @case('Canceled')

                                        <option selected >Canceled</option>
                                        <option>Delivered</option>
                                       
                                        <option>Pending</option>
                                        <option>Shipped</option>
                                       
                                        <option>Delayed</option>
                                          
                                          @break

                                          @case('Delivered')
                                            
                                          <option  >Canceled</option>
                                        <option selected>Delivered</option>
                                       
                                        <option>Pending</option>
                                        <option>Shipped</option>
                                       
                                        <option>Delayed</option>
                                          @break



                                          @case('Pending')
                                            
                                          <option  >Canceled</option>
                                        <option >Delivered</option>
                                       
                                        <option selected>Pending</option>
                                        <option>Shipped</option>
                                       
                                        <option>Delayed</option>
                                          @break

                                          @case('Shipped')
                                          <option  >Canceled</option>
                                          <option >Delivered</option>
                                         
                                          <option >Pending</option>
                                          <option selected>Shipped</option>
                                         
                                          <option>Delayed</option>
                                          @break
                                          @case('Delayed')
                                          <option  >Canceled</option>
                                          <option >Delivered</option>
                                         
                                          <option >Pending</option>
                                          <option >Shipped</option>
                                         
                                          <option selected >Delayed</option> 
                                          @break
                                      
                                        @default
                                          
                                      @endswitch
                                  
                    
                                  </select>
                                </div>
                                <div class="mt-5 ">
                                  <h3 class="card-title h6 small font-medium text-muted mb-2 ">Active Location</h3>
                                  <input name="active_current_location" value="{{$item->active_current_location}}" class="form-control ">
                               
                               <input name="id" value="{{$item->id}}" class="d-none"/>
                               
                              </div>
                          
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit"  class="btn mybg-color text-white ">update</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                    
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
            <label for="message" class="col-sm-12 col-form-label"> Description</label>
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