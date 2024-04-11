@include('dashboard.layouts.header')





<div class="layout-px-spacing">

    <div class="row layout-top-spacing">





        <!-- <div class="card component-card_2">
           
            <div class="card-body">
                <h5 class="card-title">Eat and Earn</h5>
                <p class="card-text">
                    Refer your family and friends to start enjoying our referral bonuses (N3,000 - N30,000).</p>
                    <a>https://starleadwifarms.com/register?ref={{Auth::user()->uid}}</a>
                    <br>
                <a href="#" class="btn btn-primary">Copy your referral link</a>
            </div>
        </div> -->







    </div>

    <div class="row">
        <div class=" col-2 m-auto">

            <div class="usr-img-frame mr-2 rounded-circle">
                <img alt="avatar" class="img-fluid rounded-circle" src="assets/images/boy.png">
            </div>
            <h6 class="">{{Auth::user()->name}}</h6>


        </div>


    </div>


    <div class="row">
        @foreach($refs as $ref)
        <div class="col-2 m-auto">


            <div>
                <img alt="avatar" class=" rounded-circle" src="assets/images/boy.png" style="height:50px">

                <h6 class="">{{$ref->name}}</h6>

            </div>

            <div class="row">
                @foreach(App\Http\Controllers\UserController::getRefsOfUser($ref->uid) as $ref)
                <div class="col-2 m-auto">
                <div>
                <img alt="avatar" class=" rounded-circle" src="assets/images/boy.png" style="height:50px" >

                <p class="">{{$ref->name}}</p>

                    </div>
                </div>

                

                @endforeach

            </div>

        </div>




        @endforeach;
    </div>




</div>


@include('dashboard.layouts.footer')