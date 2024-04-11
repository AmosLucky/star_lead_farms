@include('admin.layouts.header')



                                       

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">


      

    <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Register Member</h4>
                                        </div>
                                    </div>
                                </div>

                                @include('admin.layouts.alert')


                                <div class="widget-content widget-content-area">
                                   <form method="POST" action="/admin/createUser">
                                   @csrf
                                        <div class="form-row mb-4">
                                            <div class="col">
                                              <input type="text" name="name" class="form-control" placeholder="full name" value="{{ old('name') }}">
                                            </div>
                                            <div class="col">
                                              <input type="text" name="username" class="form-control" placeholder="username">
                                            </div>
                                        </div>

                                        <div class="form-row mb-4">

                                        

                                        <div class="col">
                                              <input type="email" name="email" class="form-control" placeholder="email" value="{{ Request::old('email') }}">
                                            </div>

                                            <div class="col">
                                              <input type="text" name="phone_number" class="form-control" placeholder="phone number">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">

                                        

                                        <div class="col">
                                              <input type="text" name="referrer" class="form-control" placeholder="referrer">
                                            </div>

                                            <div class="col">
                                              <input type="text" name="password" class="form-control" placeholder="Passord">
                                            </div>
                                        </div>


                                        <div class="form-row mb-4">
                                            <div class="col-2">
                                            <p>Select package</p>
                                            </div>

                                            <div class="col">

                                            <select class="form-control" name="packageId">

                                            @foreach($packages as $package)
                                                <option value="{{$package->id}}">{{$package->name}}</option>
                                                @endforeach
                                            </select>
                                              
                                            </div>
                                        </div>
                                        <input type="submit" name="time" class="btn btn-primary">
                                    </form>

                                    

                                </div>
                            </div>
                        </div>






        






      

    </div>

</div>



@include('dashboard.layouts.footer')