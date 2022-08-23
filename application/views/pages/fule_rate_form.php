<div class="col-xs-12">
    <div class="panel panel-bd">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>
                    <?php
                    if (!empty($rates->fuel_id)) {
                        echo 'Fuel Rate Update';
                    } else {
                        echo 'Fuel Rate Create';
                    }
                    ?>
                </h4>
            </div>
        </div>
        <form name="notice" class="form-horizontal" id="notice-submit" action="<?php echo base_url() . 'fule_rate/save'; ?>" method="post">
            <div class="panel-body">
                <div class="form-group row">
                    <label for="fuel_name" class="col-sm-3 col-form-label">Fuel Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="fuel_name" class="form-control" id="fuel_name" required="required" placeholder="Fuel Name" value="<?php echo set_value('fuel_name', $rates->fuel_name); ?>">
                        <div class="help-block" id="title-exists"><?php echo form_error('fuel_name'); ?></div>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="company_id">Fuel Type<span class="fa fa-asterisk red" style="color:red;"></span></label>

                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <?php echo form_dropdown('fuel_type_id', $fuel_types, set_value('fuel_type_id', $rates->fuel_type_id), 'class="col-xs-12 col-sm-4 testselect1" id="expense_group"');
                            ?>

                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('fuel_type_id'); ?></div>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="company_id">Fuel Unit<span class="fa fa-asterisk red" style="color:red;"></span></label>

                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <?php echo form_dropdown('unit_id', $fuel_units, set_value('unit_id', $rates->unit_id), 'class="col-xs-12 col-sm-4 testselect1" id="expense_group"');
                            ?>

                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('fuel_type_id'); ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="v_fuel_rate" class="col-sm-3 col-form-label">Stock</label>
                    <div class="col-sm-9">
                        <input type="text" name="stock" class="form-control" id="stock" placeholder="Fuel stock" required="required" value="<?php echo set_value('stock', $rates->stock); ?>">
                        <div class="help-block" id="title-exists"><?php echo form_error('stock'); ?></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="v_fuel_rate" class="col-sm-3 col-form-label">Buying Price</label>
                    <div class="col-sm-9">
                        <input type="text" name="buy_price" class="form-control" id="buy_price" placeholder="Buying Price" required="required" value="<?php echo set_value('buy_price', $rates->buy_price); ?>">
                        <div class="help-block" id="title-exists"><?php echo form_error('buy_price'); ?></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="v_fuel_rate" class="col-sm-3 col-form-label">Selling Price</label>
                    <div class="col-sm-9">
                        <input type="text" name="sell_price" class="form-control" id="sell_price" placeholder="Selling Price" required="required" value="<?php echo set_value('sell_price', $rates->sell_price); ?>">
                        <div class="help-block" id="title-exists"><?php echo form_error('v_fuel_rate'); ?></div>
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
                <input type="hidden" name="fuel_id" id="fuel_id" value="<?php echo set_value('fuel_id', $rates->fuel_id); ?>" />
                <div class="form-group row">
                    <div class="col-md-offset-1 col-md-9" style="margin-left: 35%;">
                        <a href="<?php echo base_url() . 'fule_rate'; ?>" class="btn btn-danger w-md m-b-5">Cancel</a>
                        <button type="submit" class="btn btn-success w-md m-b-5">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>