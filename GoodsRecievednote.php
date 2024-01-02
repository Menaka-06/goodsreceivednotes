<div class="container-fluid  mt-4 ">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0"><?php echo $page_name;?></h4>

                <div class="page-title-right">
                    <?php //if($this->rbac->display_operation('materialcategory','addMaterialCategory')){?>
                    <a href="<?php echo base_url();?>inventory/addgoodsrecievednote" class="btn btn-secondary btn-sm btn-gradient waves-effect waves-light" ><span><i data-feather="plus"></i> Add Goods Recieved Note</span></a>
                    <?php //} ?>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Search Goods Recieved Note</h4>
                    <div class="flex-shrink-0 d-none">
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="live-preview">
                        <form method="post" action="<?php echo base_url();?>Inventory/searchGoodsreceivednote" >
                        <div class="row gy-4">
                        <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                <div>
                                    <label for="grn_number" class="form-label ">GRN Number</label>
                                    <input type="text" class="form-control" id="grn_number"  name="grn_number">
                                    <span class="text-danger small" id="grn_number_error"></span>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                <div>
                                    <label for="po_number" class="form-label ">PO Number</label>
                                    <input type="text" class="form-control" id="po_number"  name="po_number">
                                    <span class="text-danger small" id="po_number_error"></span>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                <div>
                                    <label for="vendor_name" class="form-label ">Vendor Name</label>
                                     <select class="form-control" name="vendor_name" id="vendor_name">
                                    <option value="">Select Stockist</option>
                                    <?php if(!empty($stockist)){ foreach($stockist as $stk){?>
                                        <option value="<?php echo $stk->id;?>" <?php if(isset($ssstockist)){ if($ssstockist==$stk->id){ echo 'selected';}}?>><?php echo $stk->CustomerName;?>-<?php echo $stk->CustomerCode;?></option>
                                        <?php } } ?>
                                    
                                </select>
                                   
                                    <span class="text-danger small" id="vendor_name_error"></span>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                <div>
                                    <label for="store_name" class="form-label ">Store Name</label>
                                    <input type="text" class="form-control" id="store_name"  name="store_name">
                                    <span class="text-danger small" id="store_name_error"></span>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                <div>
                                    <label for="grn_from_date" class="form-label ">From Date</label>
                                    <input type="date" class="form-control" id="grn_from_date"  name="grn_from_date">
                                    <span class="text-danger small" id="grn_from_date_error"></span>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                <div>
                                    <label for="grn_to_date" class="form-label ">To Date</label>
                                    <input type="date" class="form-control" id="grn_to_date"  name="grn_to_date">
                                    <span class="text-danger small" id="grn_to_date_error"></span>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                <div>
                                    <label for="grn_status" class="form-label">Status</label>
                                    <select class="form-control" name="grn_status">
                                        <option value="">--status--</option>
                                        <option value="Draft">Draft</option>
                                        <option value="InProcess">InProcess</option>
                                        <option value="InvoiceProcessed">InvoiceProcessed</option>
                                    </select>
                                    <span class="text-danger small" id="grn_status_error"></span>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-md-3 col-sm-4">
                                <div class= "mt-4">
                                    <label for="search_goodsreceived_note" class="form-label mt-3"></label>
                                    <button type="submit" class="btn btn-success btn-sm search_btn" name="search_goodsreceived_note">Search</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1"><?php echo $page_name;?> Details</h4>
                    <div class="flex-shrink-0 d-none">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="hover-rows-showcode" class="form-label text-muted">Show Code</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="hover-rows-showcode">
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="live-preview">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">GRN No</th>
                                                <th scope="col">GRN Date</th>
                                                <th scope="col">PO No</th>
                                                <th scope="col">Vendor</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($goods_receivednote)){ foreach($goods_receivednote as $grn){ $lmt++;?>
                                            <tr>
                                                <td><?php echo $lmt;?></td>
                                                <td><?php if(!empty($grn->GrnNumber)){ echo $grn->GrnNumber;}?></td>
                                                <td><?php if(!empty($grn->createdAt)){ echo $grn->createdAt;}?></td>
                                                 <td><?php if(!empty($grn->PoNum)){ echo $grn->PoNum;}?></td>
                                                  <td><?php if(!empty($grn->fromCustomerName)){ echo $grn->fromCustomerName;}?>-<?php {echo $grn->fromCustomerCode ;}?></td>
                                                  <td><?php  if(!empty($grn->customerType)){ echo $grn->customerType;}?></td>
                                                  <td><?php if(!empty($grn->status)){ echo $grn->status;}?></td>
                                                
                                                <td>
                                                <?php if($this->rbac->display_operation('materialcategory','viewMaterialCategory')){?>
                                                    <a href="<?php echo base_url();?>Inventory/viewInventory/<?php echo $this->common_model->encode($grn->id);?>"><i class="ri-eye-fill fs-17 lh-1 align-middle"></i></a> 
                                                <?php } ?>
                                                <?php if($this->rbac->display_operation('materialcategory','editMaterialCategory')){?>
                                                    <a href="<?php echo base_url();?>Inventory/editInventory/<?php echo $this->common_model->encode($grn->id);?>"><i class="ri-pencil-fill fs-17 lh-1 align-middle"></i></a> 
                                                <?php } ?>
                                                <?php if($this->rbac->display_operation('materialcategory','deleteMaterialCategory')){?>
                                                    <a href="javascript:void(0);" data-url="<?php echo base_url();?>Inventory/deleteInventory/<?php echo $this->common_model->encode($grn->id);?>" class="sa-warning"><i class=" ri-delete-bin-fill fs-17 lh-1 align-middle"></i></a>
                                                <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } } else{ ?>
                                            <tr>
                                                <td align="center" colspan="4">No Records Found</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    
                                    <nav class="mt-3 d-block">
                                        <?php echo $this->pagination->create_links(); ?>
                                    </nav>
                                </div>
                            </div>
                            <!--end col-->

                        </div>
                        <!--end row-->
                    </div>
                    
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>

</div>
<!-- container-fluid -->