<div class="row" style="border: 1px solid gainsboro;background-color: white">
    <div class="col-xs-12" id="PrintArea">
        <div class="table-header">
            <span class="add-new-record pull-right">
                <a class="white" href="<?php echo base_url(); ?>trip_information/view_all"> </a>
            </span>

            <div class="panel-heading">
                <i class="fa fa-list"></i> Company Information
                <div class="btn btn-success panel-title pull-right">

                    <?php if (empty($company->company_id)) : ?>
                        <a class="white" href="<?php echo base_url() . "accounting/company/create/" ?>">
                            <strong></i> Add Company</strong>
                        </a>
                    <?php else : ?>
                        <a class="white" href="<?php echo base_url() . "accounting/company/edit/" . $company->company_id; ?>">
                            <strong> Company Update</strong>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <hr>

        </div>
        <?php
        if ($this->session->flashdata('success')) {
            echo "<div class=\"alert alert-success\" role=\"alert\">" . $this->session->flashdata('success') . "</div>";
        }
        ?>
        <div class="table-responsive">
            <?php if (isset($company->company_id)) : ?>
                <table class="table table-striped table-condensed" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <th width="200">Company Name</th>
                            <td><?php echo $company->name; ?></td>
                        </tr>
                        <tr>
                            <th>Company Address</th>
                            <td><?php echo $company->address; ?></td>
                        </tr>
                        <tr>
                            <th>Mobile Number</th>
                            <td><?php echo $company->mobile_no; ?></td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td><?php echo $company->phone_no; ?></td>
                        </tr>
                        <tr>
                            <th>Fax Number</th>
                            <td><?php echo $company->fax_no; ?></td>
                        </tr>
                        <tr>
                            <th>company</th>
                            <td><?php echo $company->website; ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div><!-- /.col -->

    <div class="col-xs-12 no-print">
        <br />
        <a class="btn btn-sm btn-primary pull-right" onclick="printContent('PrintArea')">
            <span class="fa fa-print"></span>&nbsp;&nbsp;Print
        </a>
    </div>

</div><!-- /.row -->
<!-- PAGE CONTENT ENDS -->