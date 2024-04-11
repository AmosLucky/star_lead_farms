@include('dashboard.layouts.header')



                                       

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">



        

        <div class="card component-card_2">
           
            <div class="card-body">
                <h5 class="card-title">Eat and Earn</h5>
                <p class="card-text">
                    Refer your family and friends to start enjoying our referral bonuses (N3,000 - N30,000).</p>
                    <a>https://starleadwifarms.com/register?ref={{Auth::user()->uid}}</a>
                    <br>
                <a href="#" class="btn btn-primary">Copy your referral link</a>
            </div>
        </div>

        

    </div>

</div>


@include('dashboard.layouts.footer')