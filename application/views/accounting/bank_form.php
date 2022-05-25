<div class="col-sm-12">
    <div class="panel panel-bd">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Bank Information</h4>
            </div>
        </div>
        <form class="form-horizontal" action="<?php echo base_url() . 'accounting/bank/create'; ?>" method="post">
            <?php echo form_hidden('bank_id', $bank->bank_id); ?>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="bank_name">Bank Name</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="bank_name" id="bank_name" placeholder="Bank Name" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('bank_name', $bank->bank_name); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('bank_name'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="branch_name">Branch Name</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="branch_name" id="branch_name" placeholder="Branch Name" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('branch_name', $bank->branch_name); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('branch_name'); ?></div>
                    </div>
                </div>

                <div class="form-group" id="cheque">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="account_number">Account Number</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="account_number" id="account_number" placeholder="Account Number" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('account_number', $bank->account_number); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('account_number'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="opening_credit">Opening Credit</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="opening_credit" id="opening_credit" placeholder="Opening Credit" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('opening_credit', $bank->opening_credit); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('opening_credit'); ?></div>
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

                <div class="form-group row">
                    <div class="col-md-offset-1 col-md-9" style="margin-left: 35%;">
                        <a href="<?php echo base_url() . 'accounting/bank'; ?>" class="btn btn-danger w-md m-b-5">Cancel</a>
                        <button type="submit" class="btn btn-success w-md m-b-5"><i class="fa fa-plus"></i> Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>