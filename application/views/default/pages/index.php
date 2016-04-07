<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.3/angular.min.js"></script>
<script type="text/javascript" src="assets/js/angular-app.js"></script>
<script type="text/javascript" src="assets/js/ng-file-upload.min.js"></script>
<div class="page-content-wrapper" ng-app="cards">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>
                                <small></small>
                            </h1>
                        </div>
						
						
						
						
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                       
                        <!-- END PAGE TOOLBAR -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content" ng-controller="cards-controller">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                       
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
								<div class="row margin-bottom-20">
                                <div class="col-lg-4 col-md-6">
                                    <div class="portlet light">
                                        <div class="card-icon">
                                            <img src="<?php echo base_url(); ?>/images/m1.jpg" >
                                        </div>
                                        <div class="card-title">
                                            <span>Method 1</span>
                                        </div>
                                        <div class="card-desc">
                                            <span>BY UPLOADING YOUR E-AADHAAR </span>
                                        </div>
										<div class="card-button">Apply Now</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="portlet light">
                                        <div class="card-icon">
                                             <img src="<?php echo base_url(); ?>images/m2.jpg">
                                        </div>
                                        <div class="card-title">
                                            <span>Method 2</span>
                                        </div>
                                        <div class="card-desc">
                                            <span>BY PROVIDING ENROLMENT INFORMATIONS</span>
                                        </div>
										<div class="card-button">Apply Now</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="portlet light">
                                        <div class="card-icon">
                                           <img src="<?php echo base_url(); ?>images/m3.jpg">
                                        </div>
                                        <div class="card-title">
                                            <span>Method 3</span>
                                        </div>
                                        <div class="card-desc">
                                            <span>BY VISITING AT OUR FRANCHISEE CENTER</span>
                                        </div>
										<div class="card-button">Visiting at our Franchisee center</div>
                                    </div>
                                </div>
                               
                            </div>
					
					            <div class="row fulltab">
								   <div class="col-md-12 col-sm-12">
								   <div class="col-md-2"></div>
								   <div class="col-md-8 uplodform"><div class="portlet light tasks-widget ">
									
                                        <div class="portlet-title" style="padding: 10px;">
                                           
                                        
                                        <div class="portlet-body">
                                          
                                            <div class="tabbable-line">
                                                <ul class="nav nav-tabs ">
                                                    <li class="active">
                                                        <a href="#tab_15_1" data-toggle="tab">Upload E-Aadhaar   </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_15_2" data-toggle="tab">Enrollment Information
</a>
                                                    </li>
                                                    
                                                </ul>
                                                <div class="tab-content" style="float: left;">
                                                    <div class="tab-pane active" id="tab_15_1">
                                                       <div class="portlet-body form">
                                            
                                                <div class="form-body">
												<div class="form-group">
                                                        <label for="exampleInputFile1">Upload E-Adhaar</label>
                                                        <input id="file_pdf_input" ng-model="file_form.file" type="file" id="exampleInputFile1"  fd-input accept="application/pdf">
                                                        <p class="help-block"> </p>
                                                    </div>
													
                                                   
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Pincode</label>
                                                        <div class="input-group">
                                                            <input ng-model="file_form.pincode" type="number" class="form-control" id="exampleInputPassword1" placeholder="Pincode" limit-to="6">
                                                             <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                        </div>
                                                    </div>
													<div class="form-group">
                                                        <label for="exampleInputPassword1">Name</label>
                                                        <div class="input-group">
                                                            <input ng-model="file_form.name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
                                                             <span class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                            </span>
                                                        </div>
                                                    </div>
													
														<div class="form-group">
                                                        <label for="exampleInputPassword1">Copies</label>
                                                        <div class="input-group">
                                                            <input ng-model="file_form.copies" type="number" class="form-control" id="exampleInputPassword1" placeholder="Copies">
                                                             <span class="input-group-addon">
<i class="fa fa-files-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                    
                                                </div>
												<div class="all_butns">
												
												<div class="form-actions left">
                                                    <button type="submit" class="btn blue" ng-click="add_card('file')">Submit</button>
                                                    <button type="button" class="btn default" ng-click="reset()">Cancel</button>
                                                </div>
												
												
												</div>
                                                
												
                                        </div>
                                                       
                                                    </div>
                                                    <div class="tab-pane" id="tab_15_2">
                                                        <div class="portlet-body form">
                                            <form role="form">
                                                <div class="form-body">
													<div class="form-group">
                                                        <label for="exampleInputPassword1">Name</label>
                                                        <div class="input-group">
                                                            <input ng-model="enrollment_form.name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
                                                             <span class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                            </span>
                                                        </div>
                                                    </div>
													  <div class="form-group">
                                                        <label for="exampleInputPassword1">Enrollment No</label>
                                                        <div class="input-group">
                                                            <input ng-model="enrollment_form.enroll" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enrollment No">
                                                             <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                        </div>
                                                    </div>
													
                                                   
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Pincode</label>
                                                        <div class="input-group">
                                                            <input ng-model="enrollment_form.pincode" type="number" class="form-control" id="exampleInputPassword1" placeholder="Pincode" limit-to="6">
                                                             <span class="input-group-addon">
                                                                <i class="fa fa-map-marker fa-lg "></i>
                                                            </span>
                                                        </div>
                                                    </div>
													<div class="form-group">
                                                        <label for="exampleInputPassword1">Mobile</label>
                                                        <div class="input-group">
                                                            <input ng-model="enrollment_form.mobile" type="number" class="form-control" id="exampleInputPassword1" placeholder="Mobile" limit-to="10">
                                                             <span class="input-group-addon">
                                                               <i class="fa fa-mobile fa-lg"></i>
                                                            </span>
                                                        </div>
                                                    </div>
													
													
														<div class="form-group">
                                                        <label for="exampleInputPassword1">Copies</label>
                                                        <div class="input-group">
                                                            <input ng-model="enrollment_form.copies" type="number" class="form-control" id="exampleInputPassword1" placeholder="Copies">
                                                             <span class="input-group-addon">
                                                              <i class="fa fa-files-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                    
                                                </div>
                                                <div class="form-actions">
                                                    <button ng-click="add_card('enrollment')" type="submit" class="btn blue">Submit</button>
                                                    <button type="button" class="btn default" ng-click="reset()">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                                       
                                                        
                                                    </div>
                                                   
                                                </div>
                                                <div class="form-actions right">
                                                    <button style="float: right;" ng-click="reset()" type="submit" class="btn blue">Add More</button>
                                                </div>
                                            </div>
                                       
                                            
                                     
                                    </div>
                                        </div>
                                        
                                    </div></div>
								       <div class="col-md-2"></div> 
									    
								   </div>
								</div>
								<div class="row fulltab">
								   <div class="col-md-12">
                                    
                                    <!-- Begin: life time stats -->
                                    <div class="portlet light portlet-fit portlet-datatable ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                               
                                                <span class="caption-subject font-green sbold uppercase"> Order Listing </span>
                                            </div>
                                            
                                       
                                        <div class="portlet-body">
                                            <div class="table-container">
                                                
                                                <div id="datatable_orders_wrapper" class="dataTables_wrapper dataTables_extended_wrapper no-footer"><div class="row"><div class="col-md-4 col-sm-12"><div class="table-group-actions pull-right">
                                                   
                                                    
                                                </div></div></div><div class="table-responsive"><table class="table table-striped table-bordered table-hover table-checkable dataTable no-footer" id="datatable_orders" aria-describedby="datatable_orders_info" role="grid">
                                                    <thead>
                                                        <tr role="row" class="heading">
                                                        <th width="10%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1"> Order&nbsp;# </th>
                                                        <th width="20%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1">Name</th>
                                                        <th width="10%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1">Pincode</th>
                                                        <th width="10%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1"> Copies</th>
                                                        <th width="30%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1">File Name/Description</th>
                                                        <th width="15%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1">Edit</th>
                                                        <th width="15%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1">Delete</th></tr>
                                                        
                                                    </thead>
                                                    <tbody id="orders_details">
                                                            <tr ng-repeat="card in cards track by $index" role="row" class="heading">
                                                            <th width="10%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1"> {{ $index + 1}}  </th>
                                                            <th width="20%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1">
                                                                <input type="text" ng-show="card.editing" ng-model="card.name"></input>
                                                                <span ng-hide="card.editing">{{ card.name }}</span>
                                                            </th>
                                                            <th width="10%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1">
                                                                <input type="number" ng-show="card.editing" ng-model="card.pincode"></input>
                                                                <span ng-hide="card.editing">{{ card.pincode }}</span>
                                                            </th>
                                                            <th width="10%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1">
                                                                <input type="number" ng-show="card.editing" ng-model="card.qty"></input>
                                                                <span ng-hide="card.editing">{{ card.qty }}</span>
                                                            </th>
                                                            <th width="30%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1">
                                                            <span ng-if="card.enroll" >EnrollmentNo: {{ card.enroll }} , Mob No : {{ card.mobile }}</span>
                                                             <span ng-if="card.file_name" >File Name : {{ card.file_name }}</span>
                                                            </th>
                                                            <th width="15%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1">
                                                            <button ng-hide="card.editing" ng-click="edit_card($index)">Edit</button>
                                                            <button ng-show="card.editing" ng-click="update_card($index)">Save</button>
                                                            </th>
                                                            <th width="15%" class="sorting" tabindex="0" aria-controls="datatable_orders" rowspan="1" colspan="1"><button ng-click="delete_card($index)">Delete</button></th></tr>

                                                    </tbody>
                                                </table></div>
                                                <button ng-if="cards.length > 0" class="pull-right btn btn-primary" ng-click="order()">Order</button>
                                                <button class="pull-right btn btn-primary" ng-click="empty()">Empty</button>
                                                </div>
                                            </div>
                                        </div>
										 </div>
                                    </div>
                                    <!-- End: life time stats -->
                                </div>
								</div>
								
					
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>