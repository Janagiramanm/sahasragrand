@extends('layouts.admin')

@section('content')
<div class="container">
        <div class="sb-page-header-content py-5">
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="sb-page-header-title"><span>Bookings</span></h1>

                </div>
                <!-- <div>
                    <a class="btn btn-info" href="{{ route('block.create') }}">Add New Block</a>
                </div> -->
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-12">


            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

                     <div class="filter_form">
                           <form class="form-inline"  action="{{ route('bookings.search') }}">
                                <div class="row">
                                    <div class="form-group mx-sm-2 mb-2 col-3">
                                        <select class="form-control" name="user_id" id="user_name_filter">
                                              <option>Select User</option>
                                              @if($users)
                                                  @foreach($users as $user)
                                                     <option value="{{ $user->id }}"> {{ $user->name }}</option>
                                                  @endforeach
                                              @endif
                                        </select> 
                                        <!-- <input type="text" placeholder="User Name" class="form-control" id="branch_code" name="user_name" value="{{ request()->input('branch_code') }}"> -->
                                    </div>
                                    <div class="form-group mx-sm-2 mb-2 col-3">
                                        <select class="form-control" name="amenity_name" id="amenity_name_filter">
                                              <option>Select Amenity</select>
                                        </select> 
                                        <!-- <input type="text" placeholder="Branch Name" class="form-control" id="branch_name" name="branch_name" value="{{ request()->input('branch_name') }}"> -->
                                    </div>
                                    <div class="form-group mx-sm-2 mb-2 col-3" id="sandbox-container">
                                                <input class="form-control" type="date" id="end_date" name="end_date"
                                                    value="{{ date('d-m-Y')}}"
                                                    min="2021-01-01" max="2021-12-31">
                                            </div>
                                       
                                        
                                    </div>
                                   
                                    <button type="submit" class="form-group btn btn-primary mr-3 mb-2 col-1">
                                                {{ __('Search') }}
                                            </button>
                                    <a title="Reset" href="{{route('bookings.search')}}" class="form-group btn btn-group btn-outline-dark  mb-2 col-1">Reset</a>
                                </div>
                            </form>

                    </div>


                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>User Name</th>
                            <th>Booking Type</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Total Guest</th>
                            <th>Reference Code</th>
                           
                        </tr>
                        @php
                            $index = $bookings->firstItem()
                            @endphp
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td>{{ $booking->user->name }}</td>
                                <td>{{ $booking->booking_type }}</td>
                                <td>{{ $booking->booking_date }}</td>
                                <td>{{ $booking->start_time }}</td>
                                <td>{{ $booking->end_time }}</td>
                                <td>{{ $booking->total_guests }}</td>
                                <td>{{ $booking->booking_code }}</td>
                             
                            </tr>
                        @endforeach
                    </table>

       
           
        </div>
    </div>

</div>
</div>
                </div>

            </div>
        </div>
    </div>

@endsection