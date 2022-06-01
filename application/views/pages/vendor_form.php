<div class="col-sm-12">
    <div class="panel panel-bd">
        <div class="panel-heading">
            <div class="panel-title">
                <i class="fa fa-edit"></i>
                <h4>
                    <?php
                    if (!empty($vendors->vendor_id)) {
                        echo 'Vendor Update';
                    } else {
                        echo 'Vendor Create';
                    }
                    ?>
                </h4>
                <div class="pull-right btn btn-info">
                    <i class="fa fa-sign-out "></i>
                    <a style="color:white" href="<?php echo base_url(); ?>vendor">Back</a>
                </div>
            </div>
        </div>
        <form name="notice" class="form-horizontal" id="notice-submit" action="<?php echo base_url() . 'vendor/save'; ?>" method="post">
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="vendor_name">Name &nbsp;&nbsp;<span class="fa fa-asterisk red" style="color: red;"></span></label>

                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="vendor_name" id="vendor_name" class="form-control" placeholder="Name" value="<?php echo set_value('vendor_name', $vendors->vendor_name); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('vendor_name'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="vendor_address">Address &nbsp;&nbsp; </label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <textarea class="form-control" id="vendor_address" placeholder="Address" name="vendor_address" value=""><?php echo set_value('vendor_address', $vendors->vendor_address); ?></textarea>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="vendor_cell">Cell Number</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="vendor_cell" id="vendor_cell" placeholder="Cell Number" class="form-control" value="<?php echo set_value('vendor_cell', $vendors->vendor_cell); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('vendor_cell'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="route_fare">Email</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="email" name="vendor_email" id="vendor_email" placeholder="Email" class="form-control" value="<?php echo set_value('vendor_email', $vendors->vendor_email); ?>" /></span>
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('vendor_email'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="route_fare">Website &nbsp;&nbsp;</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="vendor_web" id="vendor_email" placeholder="website url" class="form-control" value="<?php echo set_value('vendor_web', $vendors->vendor_web); ?>" /></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="active">Is Active &nbsp;&nbsp;</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            Yes <input type="radio" name="active" id="active" value="1" <?php echo set_radio('active', '1', TRUE); ?>>&nbsp;&nbsp;&nbsp;&nbsp;
                            No <input type="radio" name="active" id="active" value="0" <?php echo set_radio('active', '0'); ?>>
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('active'); ?></div>
                    </div>
                </div>
                <br />

                <input type="text" name="vendor_id" id="vendor_id" value="<?php echo set_value('vendor_id', $vendors->vendor_id); ?>" />
                <div class="form-group row">
                    <div class="col-md-offset-1 col-md-9" style="margin-left: 40%;">
                        <a class="btn btn-danger w-md m-b-5" href="<?php echo base_url(); ?>vendor">Cancel</a>
                        <button type="submit" class="btn btn-success w-md m-b-5">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>