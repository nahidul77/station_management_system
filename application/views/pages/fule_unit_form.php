<div class="col-sm-12">
    <div class="panel panel-bd">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>
                    <?php
                    if (!empty($units->unit_id)) {
                        echo 'Fuel unit Update';
                    } else {
                        echo 'Fuel unit Create';
                    }
                    ?>
                </h4>
            </div>
        </div>
        <form name="notice" class="form-horizontal" id="notice-submit" action="<?php echo base_url() . 'fule_unit/save'; ?>" method="post">
            <div class="panel-body">
                <div class="form-group row">
                    <label for="unit_name" class="col-sm-3 col-form-label">Unit Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="unit_name" class="form-control" id="unit_name" required="required" placeholder="Unit Name" value="<?php echo set_value('unit_name', $units->unit_name); ?>">
                        <div class="help-block" id="title-exists"><?php echo form_error('unit_name'); ?></div>
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
                    <div class="help-block" id="title-exists"><?php echo form_error('active'); ?></div>
                </div>
                <input type="hidden" name="unit_id" id="unit_id" value="<?php echo set_value('unit_id', $units->unit_id); ?>" />
                <div class="form-group row">
                    <div class="col-md-offset-1 col-md-9" style="margin-left: 35%;">
                        <a href="<?php echo base_url() . 'fule_unit'; ?>" class="btn btn-danger w-md m-b-5">Cancel</a>
                        <button type="submit" class="btn btn-success w-md m-b-5">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>