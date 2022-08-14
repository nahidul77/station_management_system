<div class="row">
    <div class="panel-body">
        <div class="col-xs-12" id="PrintArea" style="background: white;border: 1px solid gainsboro;">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <i class="fa fa-list"></i> Driver Information
                        <div class="pull-right btn btn-info">
                            <i class="fa fa-sign-out "></i>
                            <a style="color:white" href="<?php echo base_url(); ?>driver_info">Back</a>
                        </div>
                    </h4>
                </div>
                <hr>
            </div>
            <br /><br />
            <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
                <div class="col-sm-6 col-md-3">
                    <img src="<?php echo base_url() . 'assets/driver/' . $informations->d_picture; ?>" alt="" class="img-rounded img-responsive">
                </div>
                <div class="col-sm-6 col-md-9">
                    <h4><?php echo  "Driver Name - " . $informations->driver_name; ?></h4>
                    <p>
                        Mobile No&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo $informations->d_mobile; ?><br />
                        Registration No&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo $informations->v_reg; ?><br />
                        License No&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo $informations->d_license_no; ?><br />
                        License Expiry Date&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo date('d-m-Y', strtotime($informations->d_license_expire_date)); ?><br />
                        Father Name&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo $informations->d_father_name; ?><br />
                        Mother Name&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo $informations->d_mother_name; ?><br />
                        NID&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo $informations->d_nid; ?><br />
                        Present Address&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo $informations->d_address_present; ?><br />
                        Permanent Address&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo $informations->d_address_permanent; ?><br />
                        Joining Date&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo date('d-m-Y', strtotime($informations->d_join_date)); ?><br />
                        Release Date&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo date('d-m-Y', strtotime($informations->d_release_date)); ?><br />
                        Reference Person&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo $informations->d_emergency_contact_person; ?><br />
                        Reference No&nbsp;&nbsp; - &nbsp;&nbsp;<?php echo $informations->d_emergency_cell; ?>
                    </p>
                </div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.col -->

    <div class="col-xs-12 no-print">
        <br />
        <a class="btn btn-sm btn-primary pull-right" onclick="printContent('PrintArea')">
            <span class="fa fa-print"></span>&nbsp;&nbsp;Print
        </a>
    </div>

</div><!-- /.row -->
<!-- PAGE CONTENT ENDS -->