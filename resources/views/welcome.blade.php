
@extends('layouts.app')

@section('content')
<div class="main-container">
    <div class="container">

        <div class="container-block">
            <div class="row">
                <div class="col-12">
                    <div class="title text-center">
                        <h2>Welcome to <span>Saharsa Grand</span></h2>
                       
                        <div class="row">
                          <div class="col-2">
                          </div>
                          <div class="col-8">

                           @guest
                           @else
                            <marquee style="  scrollamount="6" scrolldelay="90" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                              @php
                                  $role = Auth::user()->role;
                              @endphp
                              @foreach($tickers as $ticker)
                                   @if($ticker->role == $role || $ticker->role=='all' || $role == 'superadmin')
                                       <label>{!! html_entity_decode($ticker->ticker_news) !!}
                                       </label> &emsp; 
                                   @endif
                              @endforeach
                            </marquee>
                           @endguest
                          
                          <!-- <input class="form-control search-booking" type="text" name="booking_code" id="booking_code" /> -->
                          </div>
                          <div class="col-2">
                          </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-card-block">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="info-card active">
                          @guest
                            <div class="image"><img src="{{ asset('/images/login.png') }}"/> </div>
                            <div class="button">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-primary w-100">Login</a>
                            </div>
                            <div class="button">
                              
                                <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal"  class="btn btn-secondary w-100">Create an Account</a>
                            </div>
                          @else
                            {{ Auth::user()->name }} ( {{ Auth::user()->role }} )
                            @if(Auth::user()->role == 'superadmin')
                                <div class="button">
                                    <a  href="/admin/home" >Dashboard</a>
                                </div>
                            @else
                            <div class="button">
                                <a href="/user/dashboard" >My Dashboard</a>
                            </div>
                           
                            <div class="button">
                                <a data-bs-toggle="modal" data-bs-target="#changePasswordModal" href="#" >Change Password</a>
                            </div>
                            @endif

                            @if($setup['polling'] == 'true')
                                <div class="button">
                                    <a href="/user/polling" >Vote</a>
                                </div>
                            @endif
                            @if($setup['result'] == 'true')
                            <div class="button">
                                <a href="/user/polling/result" >Results</a>
                            </div>
                            @endif
                            <div class="button">
                                  <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                          
                         @endguest
                        </div>
                    </div>
                    @foreach($amenities as $amenity)
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="info-card">
                                <div class="image"><img src="images/{{ $amenity->logo }}"/> </div>
                                <div class="button">
                                    <h3>{{ $amenity->name }}</h3>
                                </div>
                                @guest
                                <div class="button">
                                    <a href="#" class="btn btn-secondary w-100">Book</a>
                                </div>
                                @else
                                    <div class="button">
                                        <a href="https://booking.sahasragrand.com?bookingType={{$amenity->id}}&userToken={{Auth::user()->remember_token}}" class="btn btn-secondary w-100">Book</a>
                                    </div>
                                @endguest
                            </div>
                        </div>
                    @endforeach
                  
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>Copyright © 2021 Sahasra Grand</p>
                <p>Designed and Developed by NetiApps</p>

            </div>
        </div>
    </div>
</div>


<div class="modal" tabindex="-1" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
               <div class="login-section">
                    <div class="modal-header">
                        <h5 class="modal-title">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <form id="login_form" method="post" action="javascript:void(0)">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email / Mobile </label>
                                        <input type="text" name="username" id="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Remember</label>
                                        <a href="#" id="forget-pwd" > <label class="form-check-label">Forget Password ?</label> </a>
                                    </div>
                                    <span class="text-danger invalid-login"></span><br>
                                    <button type="submit" id="login-btn" class="btn btn-primary">Login</button>
                                </form>
                            </div>

                        </div>


                    </div> 
                </div> 
            
           
            <div class=" forget-section">
                <div class="modal-header">
                    <h5 class="modal-title">Forget Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <form id="forget_pwd_form" method="post" action="javascript:void(0)">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email / Mobile</label>
                                    <input type="text" name="forget_username" id="forget_username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <span class="text-danger invalid-user-forgot"></span><br>
                                </div>
                                
                                <button type="submit" id="forget-pwd-btn" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                    </div>


                </div> 
           
            </div>

            <div class=" change-your-pwd-section">
                <div class="modal-header">
                    <h5 class="modal-title">Chang Your Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <form id="login_form" method="post" action="javascript:void(0)">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">OTP</label>
                                        <input type="text" name="change-otp" id="change-otp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">New Password</label>
                                        <input type="password" name="new-password" id="new-password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                        <input type="password" name="confirm-password" id="confirm-password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                  
                                    <span class="text-danger confirm-mismatch"></span><br>
                                    <span class="alert-success confirm-success"></span><br>
                                    <button type="submit" id="change-password-forgot" class="btn btn-primary">Submit</button>
                                </form>
                            </div>

                        </div>


                    </div>
            </div>

            <input type="hidden" name="user-id" value="" id="user-id" />
            
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="changePasswordModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Your Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                        <form id="login_form" method="post" action="javascript:void(0)">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">New Password</label>
                                <input type="password" name="change_password" id="change_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" id="exampleInputPassword1">
                            </div>
                           
                            <span class="text-danger invalid-confirm"></span><br>
                            <span class="alert-success confirm-success"></span><br>
                            <button type="submit" id="change-pwd-btn" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>


<div class="modal"   id="registerModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create an Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12 register-form">
                        

                    <form id="register_form" method="post" action="javascript:void(0)">
                        @csrf
                        <div class="mb-3">
                            <label for="formGroupExampleInput">Name<span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Please enter name" autocomplete="no-fill">
                           
                        </div>
                        <div class="mb-3">
                            <label for="mobile">Mobile<span class="text-danger">*</span></label>
                            <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Please enter mobile number" maxlength="10" autocomplete="no-fill">
                           
                        </div>
                        <div class="mb-3">
                            <label for="email">Email Address<span class="text-danger">*</span></label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id"  />
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>   
                        <div class="mb-3">
                                <label class="form-label">Block<span class="text-danger">*</span></label>
                                <select  name="block" id="block"  required class="form-control @error('block') is-invalid @enderror">
                                    <option value="">Select Block</option>
                                   @if($blocks)
                                        @foreach($blocks as $block)
                                            <option value="{{ $block->id }}"> {{ $block->name }}  </option>
                                        @endforeach
                                   @endif
                                    
                                </select>
                                <span class="text-danger">{{ $errors->first('block') }}</span>
                             
                              
                        </div>   
                        <div class="mb-3">
                                <label class="form-label">Flat Number <span class="text-danger">*</span></label>
                                <select class="form-control" style="width:450px;" name="flat_number" id="flat_number" required>
                                    <option value="">Select a Flat </option>
                                   
                                </select>
                                <span id="error-flat" class="text-danger">{{ $errors->first('flat_number') }}</span>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Type<span class="text-danger">*</span></label>
                                <select  name="type" id="type"  required class="form-control @error('type') is-invalid @enderror">
                                    <option value="">Select Type</option>
                                    <option value="owner">Owner</option>
                                    <option value="tenant">Tenant </option>
                                </select>
                                <span class="text-danger">{{ $errors->first('type') }}</span>
                        </div>
                        
                        <div class="alert alert-success d-none" id="msg_div">
                        <span id="res_message"></span>
                        </div>
                        <div class="form-group">
                        <button type="submit" id="user-reg-submit" class="btn btn-success">Submit</button>
                        </div>
                        </form>
                    </div>
                    <div class="col-md-12 otp-form">
                        <form id="verify_mobile" method="post" action="javascript:void(0)" >
                           @csrf
                            <div class="mb-3">
                                <label class="form-label">Enter Your OTP <span class="text-danger">*</span> </label>
                                <input type="text" name="otp" id="otp" required class="form-control">
                                <span class="text-danger" id="error-otp">{{ $errors->first('otp') }}</span>
                                
                            </div>
                            <input type="hidden" name="user_id" id="user_id" value="" />
                            <button type="submit" id="verify-otp-btn" class="btn btn-primary">Verify Mobile</button>
                        </form>
                    </div>
                    <div class="col-md-12 mobile-verified">
                            <div class="mb-3">
                                <label class="form-label">Your Mobile Number has been verified. <br> Your account will be activate and send your credentials to your mobile. </label>
                              
                            </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>



@endsection

