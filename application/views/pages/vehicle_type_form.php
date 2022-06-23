<div class="col-sm-12">
    <div class="panel panel-bd">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>
                    <i class="fa fa-edit"></i>
                    <?php
                    if (!empty($vehicle_types->v_type_id)) {
                        echo 'Edit Vehicle Type';
                    } else {
                        echo 'Add Vehicle Type';
                    }
                    ?>
                </h4>
            </div>
        </div>
        <form name="notice" class="form-horizontal" id="notice-submit" action="<?php echo base_url() . 'vehicle/vehicle_type_save'; ?>" method="post">
            <?php
            $this->session->userdata('isLogin');
            ?>
            <div class="panel-body">
                <div class="form-group row">
                    <label for="vehicle_type" class="col-sm-3 col-form-label">Add Vehicle Type</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="v_type" id="vehicle_type" value="<?php echo set_value('v_type', $vehicle_types->v_type); ?>" placeholder="Add Vehicle Type">
                        <p class="help-block text-danger"><?php echo form_error('fullname'); ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="vehicle_type" class="col-sm-3 col-form-label">Is Active</label>
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
                </div>
                <input type="hidden" name="v_type_id" id="v_type_id" value="<?php echo set_value('v_type_id', $vehicle_types->v_type_id); ?>" />
                <div class="form-group row">
                    <div class="col-md-offset-1 col-md-9" style="margin-left: 35%;">
                        <a href="<?php echo base_url(); ?>vehicle/vehicle_type_list" class="btn btn-danger w-md m-b-5">Cancel</a>
                        <button type="submit" class="btn btn-success w-md m-b-5">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>