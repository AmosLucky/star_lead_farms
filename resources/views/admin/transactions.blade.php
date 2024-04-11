@include('admin.layouts.header')


        <!--**********************************
            Sidebar start
        ***********************************-->

        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body mt-5">
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center flex-wrap mb-3">
					<h2 class="font-w600 mb-0 ">Transactions</h2>
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
	
       
        @include('dashboard.layouts.footer')