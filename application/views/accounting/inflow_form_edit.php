<div class="col-sm-12">
    <div class="panel panel-bd">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Rececipt Information</h4>
            </div>
        </div>
        <form name="inflow" class="form-horizontal" action="<?php echo base_url() . 'accounting/inflow/create'; ?>" method="post">
            <?php echo form_hidden('inflow_id', $inflow->inflow_id); ?>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="received_date">Received Date</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="received_date" id="received_date" placeholder="Received Date" class="col-xs-12 col-sm-4  form-control datepicker" value="<?php echo set_value('received_date', $inflow->received_date); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('received_date'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="received_from">Received From</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="received_from" id="received_from" placeholder="Received From" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('received_from', $inflow->received_from); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('received_from'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="received_type">Received Type</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <?php
                            $pay_type = array(
                                '1' => 'Cash',
                                '2' => 'Cheque',
                                '3' => 'Payorder',
                                '4' => 'Online',
                            );
                            echo form_dropdown('received_type', $pay_type, $inflow->received_type, 'class="col-xs-12 col-sm-4 testselect1" id="received_type"');
                            ?>
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('received_type'); ?></div>
                    </div>
                </div>
                <div id="received_type_cheque" style="display:none">
                    <div class="form-group">
                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="bank_name">Bank Name</label>
                        <div class="col-xs-12 col-sm-9">
                            <div class="clearfix">
                                <input type="text" name="bank_name" id="bank_name" placeholder="Bank Name" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('bank_name', $inflow->bank_name); ?>" />
                            </div>
                            <div class="help-block" id="title-exists"><?php echo form_error('bank_name'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="branch_name">Branch Name</label>
                        <div class="col-xs-12 col-sm-9">
                            <div class="clearfix">
                                <input type="text" name="branch_name" id="branch_name" placeholder="Branch Name" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('branch_name', $inflow->branch_name); ?>" />
                            </div>
                            <div class="help-block" id="title-exists"><?php echo form_error('branch_name'); ?></div>
                        </div>
                    </div>
                    <div class="form-group" id="cheque" style="display:none">
                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="account_number">Account Number</label>
                        <div class="col-xs-12 col-sm-9">
                            <div class="clearfix">
                                <input type="text" name="account_number" id="account_number" placeholder="Account Number" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('account_number', $inflow->account_number); ?>" />
                            </div>
                            <div class="help-block" id="title-exists"><?php echo form_error('account_number'); ?></div>
                        </div>
                    </div>
                    <div class="form-group" id="pay_order" style="display:none">
                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="pay_order_number">Payorder Number</label>
                        <div class="col-xs-12 col-sm-9">
                            <div class="clearfix">
                                <input type="text" name="pay_order_number" id="pay_order_number" placeholder="Payorder Number" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('pay_order_number', $inflow->pay_order_number); ?>" />
                            </div>
                            <div class="help-block" id="title-exists"><?php echo form_error('pay_order_number'); ?></div>
                        </div>
                    </div>
                    <div class="form-group" id="letterOfCredit" style="display:none">
                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="letter_of_credit">TxID</label>
                        <div class="col-xs-12 col-sm-9">
                            <div class="clearfix">
                                <input type="text" name="letter_of_credit" id="letter_of_credit" placeholder="TxID" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('letter_of_credit', $inflow->letter_of_credit); ?>" />
                            </div>
                            <div class="help-block" id="title-exists"><?php echo form_error('letter_of_credit'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="deposit_bank_id">Deposit Bank Name</label>
                        <div class="col-xs-12 col-sm-9">
                            <div class="clearfix">
                                <?php echo form_dropdown('deposit_bank_id', $bank_dropdown, $inflow->deposit_bank_id, 'class="col-xs-12 col-sm-4 testselect1" id="deposit_bank_id"'); ?>
                            </div>
                            <div class="help-block" id="title-exists"><?php echo form_error('deposit_bank_id'); ?></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="account_name">Account Name</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <?php echo form_dropdown('account_name', $dropdown, $inflow->account_name, 'class="col-xs-12 col-sm-4 testselect1" id="account_name"'); ?>
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('account_name'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="amount">Amount</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="amount" id="amount" placeholder="Amount" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('amount', $inflow->amount); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('amount'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Description</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <textarea name="description" id="description" placeholder="Description" class="col-xs-12 col-sm-4 form-control"><?php echo $inflow->description; ?></textarea>
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('DESCRIPTION'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="active">Is Active &nbsp;&nbsp;</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <?php echo display('yes'); ?> <input type="radio" name="active" id="active" value="1" <?php echo set_radio('active', '1', TRUE); ?>>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo display('no'); ?> <input type="radio" name="active" id="active" value="0" <?php echo set_radio('active', '0'); ?>>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-offset-1 col-md-9" style="margin-left: 35%;">
                        <a href="<?php echo base_url() . 'accounting/inflow/'; ?>" class="btn btn-danger w-md m-b-5">Cancel</a>
                        <button type="submit" class="btn btn-primary w-md m-b-5">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#received_type").change(function() {
            var received_type = $(this).val();
            if (received_type == 1) {
                $("#received_type_cheque").slideUp(300);
                $("#bank_name").val('');
                $("#branch_name").val('');
                $("#pay_order_number").val('');
                $("#letter_of_credit").val('');
                $("#account_number").val('');
            } else if (received_type == 2 || received_type == 3 || received_type == 4) {
                $("#received_type_cheque").slideDown(300);
                if (received_type == 2) {
                    $("#cheque").slideDown(300);
                    $("#pay_order").slideUp(300);
                    $("#letterOfCredit").slideUp(300);
                    $("#pay_order_number").val('');
                    $("#letter_of_credit").val('');
                } else if (received_type == 3) {
                    $("#pay_order").slideDown(300);
                    $("#letterOfCredit").slideUp(300);
                    $("#cheque").slideUp(300);
                    $("#account_number").val('');
                    $("#letter_of_credit").val('');
                } else if (received_type == 4) {
                    $("#letterOfCredit").slideDown(300);
                    $("#pay_order").slideUp(300);
                    $("#cheque").slideUp(300);
                    $("#account_number").val('');
                    $("#pay_order_number").val('');
                }
            }
        });

        // ------------------------------------------------------
        //EDIT MODE
        var x = '<?php if (isset($inflow->received_type)) echo $inflow->received_type; ?>';
        if (x == 1) {
            $("#received_type_cheque").slideUp(300);
        } else if (x == 2 || x == 3 || x == 4) {
            $("#received_type_cheque").slideDown(300);
            if (x == 2) {
                $("#cheque").slideDown(300);
                $("#pay_order").slideUp(300);
                $("#letterOfCredit").slideUp(300);
            } else if (x == 3) {
                $("#pay_order").slideDown(300);
                $("#cheque").slideUp(300);
                $("#letterOfCredit").slideUp(300);
            } else if (x == 4) {
                $("#letterOfCredit").slideDown(300);
                $("#cheque").slideUp(300);
                $("#pay_order").slideUp(300);
            }
        }
        //------------------------------------------------------

    });
</script>