@include('dashboard.layouts.header')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">




        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="my-3 text-center">You selected {{$package->name}}</h3>

        <button id="bt">ch</button>
            <div class="row">



                

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing m-auto">
                    <div class="card component-card_2">
                        <!-- <img src="assets/img/grid-blog-style-3.jpg" class="card-img-top" alt="widget-card-2"> -->
                        <div class="card-body ">
                            <h5 class="card-title"> {{$package->name}}</h5>
                            <h3 class=""><b>You will pay N{{number_format($package->price)}}</b></h3>
                            <hr>
                            <h6>You earn: N{{number_format($package->referral_bonus)}} referral bonus per person</h6>
                            <h6>You gain: {{number_format($package->pv)}}PV</h6>

                            <h5>You will take home:</h5>
                            @foreach(explode("|",$package->benefits) as $benefit)

                           
                            
                            <li class="card-text my-2">{{$benefit}}</li>
                            @endforeach
                            <br>
                            <button type="button" onclick="payWithPaystack()" class="btn btn-success">Pay N{{number_format($package->price)}}</a>
                        </div>
                    </div>
                </div>



                
                


                



            </div>
        </div>









    </div>

</div>




<script>

    $("#bt").click(function(){

        var packageId = {!! json_encode($package->id) !!};
    

    var formdata = new FormData();
formdata.append("package_id",packageId);
formdata.append("_token",'{{csrf_token()}}');

  $.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': "{{ csrf_token() }}"
}
});

    $.ajax({
          url: '/success_payment',
          type: 'post',
          data: formdata,
          contentType: false,
          processData: false,
          success: function(response){
              alert(response['status']);
              //console.log(JSON.stringify(response));
              //alert("success");
             
          },
      });
    });
</script>







<script src="https://js.paystack.co/v1/inline.js"></script>


<script>
     var email = {!! json_encode(Auth::user()->email) !!};
     var price = {!! json_encode($package->price) !!};
     var ref = {!! json_encode(Auth::user()->uid."-".time()) !!};







    var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit', payWithPaystack, false);
function payWithPaystack() {
  var handler = PaystackPop.setup({
    key: 'pk_live_9000a6b42e9f1ff0059014ffdbcd429ee02d8837', // Replace with your public key
    email: email,//document.getElementById('email-address').value,
    amount: price * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
    ref: ref, // Replace with a reference you generated
    callback: function(response) {
      //this happens after the payment is completed successfully
      var reference = response.reference;
      alert('Payment complete! Reference: ' + reference);
      // Make an AJAX call to your server with the reference to verify the transaction





    },
    onClose: function() {
      alert('Transaction was not completed, window closed.');


      
    

      
    },
  });
  handler.openIframe();
}
</script>

@include('dashboard.layouts.footer')