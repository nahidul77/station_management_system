<div class="col-xs-12">
    <div class="panel panel-bd">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Edit Profile</h4>
            </div>
        </div>
        <?php
        if ($this->session->flashdata('success')) {
            echo "<div class=\"alert alert-success\" role=\"alert\">" . $this->session->flashdata('success') . "</div>";
        }
        ?>
        <?php echo form_open('admin/user_edit/'); ?>

        <div class="panel-body">
            <div class="form-group row">
                <label for="fullname" class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?php echo $user_info->fullname; ?>" name="fullname" id="fullname" placeholder="Full Name">
                    <p class="help-block text-danger"><?php echo form_error('fullname'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="Title" class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    <p class="help-block text-danger"><?php echo form_error('username'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="old_password" class="col-sm-3 col-form-label">Old Password</label>
                <div class="col-sm-9">
                    <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Old Password">
                    <p class="help-block text-danger"><?php echo form_error('old_password'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="new_password" class="col-sm-3 col-form-label">New Password</label>
                <div class="col-sm-9">
                    <input type="password" name="new_password" class="form-control" id="new_password" placeholder="New Password">
                    <p class="help-block text-danger"><?php echo form_error('new_assword'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="re_password" class="col-sm-3 col-form-label">Confirm New Password</label>
                <div class="col-sm-9">
                    <input type="password" name="re_password" class="form-control" id="re_password" placeholder="Confirm New Password">
                    <p class="help-block text-danger"><?php echo form_error('re_password'); ?></p>
                </div>
            </div>

            <div class="form-group row" style="margin-left: 46%;">
                <a href="<?php echo base_url() . "dashboard"; ?>" class="btn btn-danger w-md m-b-5">Cancel</a>
                <button type="submit" class="btn btn-success w-md m-b-5">Update</button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>