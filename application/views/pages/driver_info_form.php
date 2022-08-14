<div class="col-sm-12">
    <div class="panel panel-bd">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>
                    <i class="fa fa-edit"></i>
                    <?php
                    if (!empty($informations->driver_id)) {
                        echo 'Driver Information Update';
                    } else {
                        echo 'Add Driver Information';
                    }
                    ?>
                </h4>
                <div class="pull-right btn btn-info">
                    <i class="fa fa-sign-out "></i>
                    <a style="color:white" href="<?php echo base_url(); ?>driver_info">Back</a>
                </div>
            </div>
        </div>

        <?php
        if ($this->session->flashdata('error')) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">" . $this->session->flashdata('error') . "</div>";
        }
        ?>
        <?php echo form_open_multipart('driver_info/save', array("class" => 'form-horizontal', 'id' => 'notice-submit')); ?>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="driver_name">Driver Name &nbsp;&nbsp;<span class="fa fa-asterisk red" style="color:red;"></span></label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" name="driver_name" id="driver_name" placeholder="Driver Name" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('driver_name', $informations->driver_name); ?>" />
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('driver_name'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_mobile">Mobile Number&nbsp;&nbsp;<span class="fa fa-asterisk red" style="color:red;"></span></label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" name="d_mobile" id="d_mobile" placeholder="Mobile Number" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('d_mobile', $informations->d_mobile); ?>" />
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('d_mobile'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="v_registration_no">Vehicle Registration No&nbsp;&nbsp;<span class="fa fa-asterisk red" style="color:red;"></span></label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <?php
                        echo form_dropdown('v_registration_no', $v_reg_no, set_value('v_registration_no', $informations->v_registration_no), 'class="col-xs-12 col-sm-4 testselect1"');
                        ?>
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('v_registration_no'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_license_no">License No&nbsp;&nbsp;<span class="fa fa-asterisk red" style="color:red;"></span></label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" name="d_license_no" id="d_license_no" placeholder="License No" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('d_license_no', $informations->d_license_no); ?>" />
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('d_license_no'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_license_expire_date">License Expire Date</label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" name="d_license_expire_date" id="d_license_expire_date" placeholder="License Expire Date" class="col-xs-12 col-sm-4 datepicker form-control" value="<?php echo set_value('d_license_expire_date', $informations->d_license_expire_date); ?>" />

                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('d_license_expire_date'); ?></div>
                </div>
            </div>
            <!-- new -->
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_father_name">Father Name</label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" name="d_father_name" id="d_father_name" placeholder="Father Name" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('d_father_name', $informations->d_father_name); ?>" />
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('d_father_name'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_mother_name">Mother Name</label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" name="d_mother_name" id="d_mother_name" placeholder="Mother Name" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('d_mother_name', $informations->d_mother_name); ?>" />
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('d_mother_name'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_nid">NID</label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" name="d_nid" id="d_nid" placeholder="NID" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('d_nid', $informations->d_nid); ?>" />
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('d_nid'); ?></div>
                </div>
            </div>
            <!-- ends -->
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_address_present">Present Address</label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <textarea class="col-xs-12 col-sm-4 form-control" id="d_address_present" placeholder="Present Address" name="d_address_present" value=""><?php echo set_value('d_address_present', $informations->d_address_present); ?></textarea>
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('d_address_present'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_address_permanent">Permanent Address&nbsp;&nbsp;<span class="fa fa-asterisk red" style="color:red;"></span></label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <textarea class="col-xs-12 col-sm-4 form-control" id="d_address_permanent" placeholder="Permanent Address" name="d_address_permanent" value=""><?php echo set_value('d_address_permanent', $informations->d_address_permanent); ?></textarea>
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('d_address_permanent'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_join_date">Joining Date</label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" name="d_join_date" id="d_join_date" placeholder="Joining Date" class="col-xs-12 col-sm-4 datepicker form-control" value="<?php echo set_value('d_join_date', $informations->d_join_date); ?>" />
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('d_join_date'); ?></div>
                </div>
            </div>
            <!-- starts of release date -->
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_release_date">Release Date</label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" name="d_release_date" id="d_release_date" placeholder="Release Date" class="col-xs-12 col-sm-4 datepicker form-control" value="<?php echo set_value('d_release_date', $informations->d_release_date); ?>" />
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('d_release_date'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_emergency_contact_person">Reference Person</label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" name="d_emergency_contact_person" id="v_fuel_rate" placeholder="Reference Person" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('d_emergency_contact_person', $informations->d_emergency_contact_person); ?>" />
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('d_emergency_contact_person'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_emergency_cell">Cell Number</label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" name="d_emergency_cell" id="v_fuel_rate" placeholder="Cell Number" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('d_emergency_cell', $informations->d_emergency_cell); ?>" />
                    </div>
                    <div class="help-block" id="title-exists"><?php echo form_error('d_emergency_cell'); ?></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="d_emergency_cell">Driver Picture</label>
                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="file" name="d_picture" id="v_fuel_rate" class="col-xs-12 col-sm-4 form-control" />
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="vehicle_type" class="col-sm-3 col-form-label">Inactive</label>
                <div class="col-sm-9">
                    <fieldset>
                        <div class="checkbox-circle">
                            <input name="active" type="radio" value="1" <?php echo set_radio('active', '1', TRUE); ?>>
                            <label for="checkbox7">Yes</label>

                            <input name="active" type="radio" value="0" <?php echo set_radio('active', '0'); ?>>
                            <label for="checkbox8">No</label>
                        </div>

                    </fieldset>
                </div>
                <div class="help-block" id="title-exists"><?php echo form_error('active'); ?></div>
            </div>
            <input type="hidden" name="driver_id" id="driver_id" value="<?php echo set_value('driver_id', $informations->driver_id); ?>" />
            <div class="form-group row">
                <div class="col-md-offset-1 col-md-9" style="margin-left: 35%;">
                    <a class="btn btn-danger w-md m-b-5" href="<?php echo base_url(); ?>driver_info">Cancel</a>
                    <button type="submit" class="btn btn-success w-md m-b-5"> Save</button>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>