<div class="col-xs-12">
    <div class="panel panel-bd">
        <div class="panel-heading">
            <div class="panel-title">
                <h4><?php
                    if (!empty($expenses->expense_id)) {
                        echo 'Expense Update';
                    } else {
                        echo 'Expense Create';
                    }
                    ?>
                </h4>
            </div>
        </div>
        <form name="expense" class="form-horizontal" id="notice-submit" action="<?php echo base_url() . 'expense_list/save'; ?>" method="post">
            <div class="panel-body">

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="expense_group">Expense Type&nbsp;&nbsp;<span class="fa fa-asterisk red" style="color:red;"></span></label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="col-md-12">
                            <?php echo form_dropdown('expense_group', $expense_group, set_value('expense_group', $expenses->expense_group), 'id="expense_group" required="required"  class="col-xs-12 col-sm-4 testselect1"'); ?>
                            <?php echo form_error('expense_group'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="expense_name">Expense Name&nbsp;&nbsp;<span class="fa fa-asterisk red" style="color:red;"></span></label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="col-md-12">
                            <input type="text" name="expense_name" id="company_name" class="col-xs-12 col-sm-4 form-control" placeholder="Expense Name" value="<?php echo set_value('expense_name', $expenses->expense_name); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('expense_name'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="active">Inactive&nbsp;&nbsp;</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            Yes <input type="radio" name="active" id="active" value="1" <?php echo set_radio('active', '1', TRUE); ?>>&nbsp;&nbsp;&nbsp;&nbsp;
                            No <input type="radio" name="active" id="active" value="0" <?php echo set_radio('active', '0'); ?>>
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('active'); ?></div>
                    </div>
                </div>
                <input type="hidden" name="expense_id" id="expense_id" value="<?php echo set_value('expense_id', $expenses->expense_id); ?>" />
                <div class="form-group row">
                    <div class="col-md-offset-1 col-md-9" style="margin-left: 35%;">
                        <a href="<?php echo base_url() . 'expense_list'; ?>" class="btn btn-danger w-md m-b-5">Cancel</a>
                        <button type="submit" class="btn btn-success w-md m-b-5">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>