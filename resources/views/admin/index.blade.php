@include('admin.layouts.header')



                                       

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">


      


        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row widget-statistic">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                    <div class="widget widget-one_hybrid widget-followers">
                        <div class="widget-heading">
                            <div class="w-title">
                                <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>

                                </div>
                                <div class="">
                                    <p class="w-value">{{number_format(count($users))}}</p>
                                    <h5 class="">Total Members</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">    
                            <div class="w-chart">
                                <div id="hybrid_followe"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                    <div class="widget widget-one_hybrid widget-engagement">
                        <div class="widget-heading">
                            <div class="w-title">
                                <div class="w-icon">
                                    

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>


                                    

                                </div>
                                <div class="">
                                    <p class="w-value">₦{{number_format($deposits)}}</p>
                                    <h5 class="">Total Deposits</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">    
                            <div class="w-chart">
                                <div id="hybrid_followe"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                    <div class="widget widget-one_hybrid widget-referral">
                        <div class="widget-heading">
                            <div class="w-title">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>

                                </div>
                                <div class="">
                                    <p class="w-value">{{number_format($referral_bonuses)}}</p>
                                    <h5 class="">Referral Bonuses</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">    
                            <div class="w-chart">
                                <div id="hybrid_follower"></div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                    <div class="widget widget-one_hybrid widget-followers">
                        <div class="widget-heading">
                            <div class="w-title">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codepen"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon><line x1="12" y1="22" x2="12" y2="15.5"></line><polyline points="22 8.5 12 15.5 2 8.5"></polyline><polyline points="2 15.5 12 8.5 22 15.5"></polyline><line x1="12" y1="2" x2="12" y2="8.5"></line></svg>
                                </div>
                                <div class="">
                                    <p class="w-value">{{number_format(count($packages))}}</p>
                                    <h5 class="">Packages</h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">    
                            <div class="w-chart">
                                <div id="hybrid_follower"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>






        

<div class="content-body mt-5 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center flex-wrap mb-3">
					<h2 class="font-w600 mb-0 ">Resent deposits</h2>
					<a href="javascript:void(0);" class="btn btn-outline-secondary ml-auto"><i class="las la-calendar scale5 mr-2"></i>Filter Periode</a>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="table-responsive market-values">
									<table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13" >
										<thead>
											<tr>
												<th>S/N</th>
                                                <th>Name</th>
												<th>Type</th>
										
										
										<th>Amount</th>
                                        
                                        <th>Date</th>
										
											</tr>
										</thead>
										<tbody>

                                        @php $sl = 1; @endphp
                                            
											 
											@foreach($transactions as $transaction)

                                            <tr class="border-bottom">
												<td>{{ $sl++; }}</td>
                                                <td>{{App\Http\Controllers\AdminController::getUserName($transaction->user_id)}}</td>

                                              
                                                <td>{{$transaction->type}}</td>
												
												<td>N{{number_format($transaction->amount)}}</td>
                                                
                                                <td >{{strtolower($transaction->created_at)}}</td>
												
												
												<!-- <td><a href="#" class="btn btn-sm btn-success">Transfer Now</a></td> -->
											</tr>

                                            @endforeach

											
											
											
											
											
										</tbody>
									</table>
								</div>	
					</div>
				</div>
			</div>
		</div>







      

    </div>

</div>



@include('dashboard.layouts.footer')