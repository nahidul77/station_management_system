<div class="col-sm-12">
    <div class="panel panel-bd">
        <div class="panel-heading">
            <div class="panel-title">
                <h4><?php
                    if (!empty($company->company_id)) {
                        echo 'Update Company';
                    } else {
                        echo 'Add Company';
                    }
                    ?>
                </h4>
            </div>
        </div>
        <form class="form-horizontal" id="notice-submit" action="<?php echo base_url() . 'accounting/company/create'; ?>" method="post">
            <?php echo form_hidden('company_id', $company->company_id); ?>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Company Name&nbsp;&nbsp;<span class="fa fa-asterisk red" style="color:red;"></span></label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="name" id="name" class="col-xs-12 col-sm-4 form-control" placeholder="Company Name" value="<?php echo set_value('name', $company->name); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('name'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="address">Company Address &nbsp;&nbsp; </label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <textarea class="col-xs-12 col-sm-4  form-control" id="address" placeholder="Company Address" name="address"> <?php echo $company->address; ?> </textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="mobile_no">Mobile Number</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="mobile_no" id="mobile_no" placeholder="Mobile Number" class="col-xs-12 col-sm-4 form-control" value="<?php echo set_value('mobile_no', $company->mobile_no); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('mobile_no'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone_no">Phone Number</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="phone_no" id="phone_no" placeholder="Phone Number" class="col-xs-12 col-sm-4  form-control" value="<?php echo set_value('phone_no', $company->phone_no); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('phone_no'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="fax_no">Fax Number</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="fax_no" id="fax_no" placeholder="Fax Number" class="col-xs-12 col-sm-4  form-control" value="<?php echo set_value('fax_no', $company->fax_no); ?>" />
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('fax_no'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Company E-mail</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="email" name="email" id="email" placeholder="Company E-mail" class="col-xs-12 col-sm-4  form-control" value="<?php echo set_value('email', $company->email); ?>" /></span>
                        </div>
                        <div class="help-block" id="title-exists"><?php echo form_error('email'); ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="website">Company Web &nbsp;&nbsp;</label>
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <input type="text" name="website" id="website" placeholder="Company Web" class="col-xs-12 col-sm-4  form-control" value="<?php echo set_value('website', $company->website); ?>" /></span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-offset-1 col-md-9" style="margin-left: 35%;">
                        <a href="<?php echo base_url() . 'accounting/company/'; ?>" class="btn btn-danger w-md m-b-5">Cancel</a>
                        <button type="submit" class="btn btn-success w-md m-b-5">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>