<div class="col-xs-12">
    <div class="panel panel-bd">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>
                    <?php
                    if (!empty($sales->fuel_id)) {
                        echo 'Sale Update';
                    } else {
                        echo 'Sale Create';
                    }
                    ?>
                </h4>
            </div>
        </div>
        <form name="notice" class="form-horizontal" id="notice-submit" action="<?php echo base_url() . 'sale/save'; ?>" method="post">
            <div class="panel-body">

                <div class="form-group ">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="fuel_id">Fuel Types<span class="fa fa-asterisk red" style="color:red;"></span></label>

                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <?php echo form_dropdown('fuel_id', $fuel_types, set_value('fuel_id', $sales->fuel_id), 'class="col-xs-12 col-sm-4 testselect1" id="select_fuel_id"');
                            ?>

                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('fuel_id'); ?></div>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="v_type">Vehicle Type<span class="fa fa-asterisk red" style="color:red;"></span></label>

                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <?php echo form_dropdown('v_type', $v_types, set_value('v_type', $sales->v_type), 'class="col-xs-12 col-sm-4 testselect1" id="v_type"');
                            ?>

                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('v_type'); ?></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="v_fuel_rate" class="col-sm-3 col-form-label">Stock</label>
                    <div class="col-sm-9">
                        <input type="text" name="stock" class="form-control" id="stock" value="" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="v_fuel_rate" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                        <input type="text" name="price" class="form-control" id="price" value="" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fuel_name" class="col-sm-3 col-form-label">Sell Units<span class="fa fa-asterisk red" style="color:red;"></span></label>
                    <div class="col-sm-9">
                        <input type="text" name="sell_unit" class="form-control" id="sell_unit" required="required" value="<?php echo set_value('sell_unit', $sales->sell_unit); ?>">
                        <div class="help-block" id="title-exists"><?php echo form_error('sell_unit'); ?></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="v_fuel_rate" class="col-sm-3 col-form-label">Total Amount</label>
                    <div class="col-sm-9">
                        <input type="text" name="amount" class="form-control" id="amount" required="required" value="<?php echo set_value('amount', $sales->amount); ?>" readonly>
                        <div class="help-block" id="title-exists"><?php echo form_error('buy_price'); ?></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="v_fuel_rate" class="col-sm-3 col-form-label">Customer Name<span class="fa fa-asterisk red" style="color:red;"></span></label>
                    <div class="col-sm-9">
                        <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Customer Name" required="required" value="<?php echo set_value('customer_name', $sales->customer_name); ?>">
                        <div class="help-block" id="title-exists"><?php echo form_error('customer_name'); ?></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="v_fuel_rate" class="col-sm-3 col-form-label">Customer Phone<span class="fa fa-asterisk red" style="color:red;"></span></label>
                    <div class="col-sm-9">
                        <input type="text" name="customer_phone" class="form-control" id="customer_phone" placeholder="Customer Phone" required="required" value="<?php echo set_value('customer_phone', $sales->customer_phone); ?>">
                        <div class="help-block" id="title-exists"><?php echo form_error('customer_phone'); ?></div>
                    </div>
                </div>

            </div>
            <input type="hidden" name="sale_id" id="sale_id" value="<?php echo set_value('sale_id', $sales->sale_id); ?>" />
            <div class="form-group row">
                <div class="col-md-offset-1 col-md-9" style="margin-left: 35%;">
                    <a href="<?php echo base_url() . 'sale'; ?>" class="btn btn-danger w-md m-b-5">Cancel</a>
                    <button type="submit" class="btn btn-success w-md m-b-5">Save</button>
                </div>
            </div>
    </div>
    </form>
</div>
</div>


<script>
    $(document).ready(function() {

        $('#select_fuel_id').change(function() {

            let fuel_id = $(this).val();
            if (fuel_id) {
                let url = '<?php echo base_url() . "fule_rate/get_price_by_fuel_id/" ?>' + fuel_id;
                console.log(url);
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(data) {
                        if (data) {
                            let obj = JSON.parse(data);
                            // console.log(obj[0].stock);
                            $('#stock').val(obj[0].stock);
                            $('#price').val(obj[0].sell_price);
                        }
                    },
                });
            } else {
                $('#stock').val('');
                $('#price').val('');
            }
        });

        //_________________________________________

        $('#sell_unit').keyup(function() {
            let unit = $(this).val();
            let price = $('#price').val();

            let total = price * unit;

            $('#amount').val(total);
        });
    })
</script>