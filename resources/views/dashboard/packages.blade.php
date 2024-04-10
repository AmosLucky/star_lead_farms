@include('dashboard.layouts.header')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">




        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="my-3">Select a package o Get Started</h3>
            <div class="row">



                @foreach($packages as $package)

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                    <div class="card component-card_2">
                        <!-- <img src="assets/img/grid-blog-style-3.jpg" class="card-img-top" alt="widget-card-2"> -->
                        <div class="card-body">
                            <h5 class="card-title"> {{$package->name}}</h5>
                            <h3 class=""><b> N{{number_format($package->price)}}</b></h3>
                            <hr>
                            <b><small>Refferal Bonus: </small>N{{number_format($package->referral_bonus)}}</b>
                            @foreach(explode("|",$package->benefits) as $benefit)

                           
                            
                            <li class="card-text my-2">{{$benefit}}</li>
                            @endforeach
                            <br>
                            <a href="payment/{{$package->id}}" class="btn btn-primary">Choose Package</a>
                        </div>
                    </div>
                </div>



                @endforeach
                


                



            </div>
        </div>









    </div>

</div>

@include('dashboard.layouts.footer')