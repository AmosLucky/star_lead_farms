@include('dashboard.layouts.header')

@php

$company_name = "Star Lead Wifarms";
$company_email = "support@starleadwifarms";
$company_phone = "08153732788";
$company_address = "115 upper chime avenu by ugbo okonkwo, New Heaven Enugu";

@endphp
		
		


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<!-- Add Project -->
				
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            
                            <h4>Support</h4>
                           
                        </div>
                    </div>
                 
                </div>
                <!-- row -->


                  <!--  /////////////////////2/////////////////////////// -->

          <div class="row ">
            



             <div class="col-lg-6">
              
                  <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Address </h6>
                </div>
                <div class="card-body">

                 

                
                   <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                  <tbody>
                    

                     <tr>
                      <th>
                        <div class="contact-icon mr-15">
                               <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                       </th>
                      <td>
                      {{$company_address  }} 
                        
                      </td>
                      
                     
                    </tr>
                     <tr>
                      <th>
                        <div class="contact-icon mr-15">
                               <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </div>
                       </th>
                      <td>
                    {{  $company_phone }} 
                        
                      </td>
                      
                     
                    </tr>

                     

                    <tr>
                      <th>
                        <div class="contact-icon mr-15">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                       </th>
                      <td>
                      <p><?php echo $company_email  ?></p>
                        
                      </td>
                      
                     
                    </tr>




                   

                  

                      </tbody>
                </table>
              </div>
                  
                  




                </div>
              </div>

                  
              
              
            </div>
            
          </div>
<!-- ////////////////////////////////////
 -->

                <!--- end of row --->
            
        </div>
    
</div>
        <!--**********************************
            Content body end
        ***********************************-->


        @include('dashboard.layouts.footer')
