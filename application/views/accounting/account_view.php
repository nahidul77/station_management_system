<div class="row" style="background-color: white;">
    <div class="panel-body">
        <div class="table-header">
            <i class="fa fa-list"></i> Account Information
            <div class="pull-right btn btn-success">
                <i class="fa fa-plus "></i>
                <a style="color:white" href="<?php echo base_url() . "accounting/account/create/" ?>">Add Account</a>
            </div>
        </div>
        <hr>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-bd">
            <div class="panel-heading">
                <div class="panel-title">
                    <h3> Credit Account </h3>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Sector Name</th>
                                <th>Sector Type</th>
                                <th>Date</th>
                                <th>Status</th>
                                <?php if ($this->session->userdata('user_type') == 9) { ?>
                                    <th class="no-print">Action</th>
                                <?php } //ends of if condition 
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($accounts)) :
                                $serial = 1;
                                foreach ($accounts as $value) :
                                    if ($value->sector_type == "Credit (+)") :
                            ?>
                                        <tr>
                                            <td><?php echo $serial++; ?></td>
                                            <td><?php echo $value->sector_name; ?></td>
                                            <td><?php echo $value->sector_type; ?></td>
                                            <td><?php echo date("d-m-Y", strtotime($value->date)); ?></td>
                                            <td><?php echo ($value->status == 1) ? 'active' : 'inactive'; ?></td>
                                            <?php if ($this->session->userdata('user_type') == 9) : ?>
                                                <td class="no-print">
                                                    <a class="green" data-toggle="tooltip" title="Edit" href="<?php echo base_url() . "accounting/account/edit/" . $value->account_id ?>">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>&nbsp;&nbsp;

                                                    <a class="red delete" data-toggle="tooltip" title="Delete" href="<?php echo base_url() . "accounting/account/delete/" . $value->account_id ?>">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                </td>
                                            <?php endif; //ends of if condition 
                                            ?>
                                        </tr>
                            <?php
                                    endif;
                                endforeach;
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-bd">
            <div class="panel-heading">
                <div class="panel-title">
                    <h3><?php echo display('debitaccount'); ?> </h3>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Sector Name</th>
                                <th>Sector Type</th>
                                <th>Date</th>
                                <th>Status</th>
                                <?php if ($this->session->userdata('user_type') == 9) : ?>
                                    <th class="no-print">Action</th>
                                <?php endif; //ends of if condition 
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($accounts)) :
                                $serial = 1;
                                foreach ($accounts as $value) :
                                    if ($value->sector_type == "Debit (-)") :
                            ?>
                                        <tr>
                                            <td><?php echo $serial++; ?></td>
                                            <td><?php echo $value->sector_name; ?></td>
                                            <td><?php echo $value->sector_type; ?></td>
                                            <td><?php echo date("d-m-Y", strtotime($value->date)); ?></td>
                                            <td><?php echo ($value->status == 1) ? 'active' : 'inactive'; ?></td>
                                            <?php if ($this->session->userdata('user_type') == 9) : ?>
                                                <td class="no-print">
                                                    <a class="green" data-toggle="tooltip" title="Edit" href="<?php echo base_url() . "accounting/account/edit/" . $value->account_id ?>">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>&nbsp;&nbsp;

                                                    <a class="red delete" data-toggle="tooltip" title="Delete" href="<?php echo base_url() . "accounting/account/delete/" . $value->account_id ?>">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                </td>
                                            <?php endif; //ends of if condition 
                                            ?>
                                        </tr>
                            <?php
                                    endif;
                                endforeach;
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        "use strict"; // Start of use strict

        $('#dataTableExample1').DataTable({
            "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
            "lengthMenu": [
                [6, 25, 50, -1],
                [6, 25, 50, "All"]
            ],
            "iDisplayLength": 6
        });

        $("#dataTableExample3").DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            buttons: [{
                    extend: 'copy',
                    className: 'btn-sm'
                },
                {
                    extend: 'csv',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                },
                {
                    extend: 'print',
                    className: 'btn-sm'
                }
            ]
        });

    });
</script>