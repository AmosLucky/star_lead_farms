@include('dashboard.layouts.header')

<style type="text/css">
  th{
    color: white!important;
  }
</style>



        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
      <div class="container-fluid">
        <!-- Add Project -->
        
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>My Account</h4>
                           
                        </div>
                    </div>
                 
                </div>
                <!-- row -->
                
     <div class="row">

            <div class="col-lg-6">
             



              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Account Info</h6>
                </div>

               
                <div class="card-body">
                  <form method="POST" enctype="multipart/form-data" action="/updateprofile">
                    @csrf
                   
                   <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                  <tbody>
                     <tr>
                      <th>First Name</th>
                      <td>
                        <input type="text" name="name" id="fname" class="form-control" value="{{$user->name}}" required>
                      </td>
                      
                     
                    </tr>

                    

                   



                    <tr>
                      <th>Username</th>
                      <td>
                        <input type="text" name="username" id="uname" class="form-control" value="{{$user->username}}" readonly="">
                      </td>
                      
                     
                    </tr>

                     <tr>
                      <th>Email</th>
                      <td>
                        <input type="text" name="email" id="ename" class="form-control" value="{{$user->email}}" readonly="">
                      </td>
                      
                     
                    </tr>


                     <tr>
                      <th>Phone</th>
                      <td>
                        <input type="text" name="phone_number" id="phone" class="form-control" value="{{$user->phone_number}}" required>
                      </td>
                      
                     
                    </tr>

                   

                      </tbody>
                </table>
              </div>
             

              <div class="row justify-content-center">
               <button type="submit" id="submit" name="update_user" class="btn btn-primary">


               
               

                Save


             

               </button>
                
              </div>
               </form>






               </div>
              </div>

            </div>

            <div class="col-lg-6">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
                </div>
                <form method="post" action="/updatepassword">

                @csrf
                <div class="card-body">
                 


                   <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                  <tbody>
                     <tr>
                      <th>Old Password</th>
                      <td>
                        <input type="text" name="old_password" id="fname" class="form-control" placeholder="old password">
                      </td>
                      
                     
                    </tr>

                     <tr>
                      <th>New Password</th>
                      <td>
                        <input type="text" name="new_password" id="lname" class="form-control" placeholder="new password">
                      </td>
                      
                     
                    </tr>



                    <tr>
                      <th>Confirm New Password</th>
                      <td>
                        <input type="text" name="new_passwordv" id="uname" class="form-control" placeholder="Confirm new password">
                      </td>
                      
                     
                    </tr>

                    

                      </tbody>
                </table>
              </div>

              <div class="row justify-content-center">
               <button type="submit" id="submit" name="update_password" class="btn btn-primary">Save</button>
                
              </div>
                




                </div>
              </form>
              </div>

            </div>

          </div>
        </div>
    
</div>
        <!--**********************************
            Content body end
        ***********************************-->

        <script type="text/javascript">
            function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah').attr('src', e.target.result).width(150).height(100);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
        </script>



       

     

      <!-- Footer -->
      @include('dashboard.layouts.footer')