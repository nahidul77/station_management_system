<div class="col-xs-12">
    <div class="panel panel-bd">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Update Setting</h4>
            </div>
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('success')) {
                echo "<div class=\"alert alert-success\" role=\"alert\">" . $this->session->flashdata('success') . "</div>";
            }
            ?>
            <?php echo form_open('admin/app_setting/'); ?>
            <?php echo form_hidden('id', $apps->id);
            ?>
            <div class="form-group row">
                <label for="Title" class="col-sm-3 col-form-label">Title</label>
                <div class="col-sm-9">
                    <input class="form-control" name="title" type="text" value="<?php echo $apps->title; ?>" id="Title">
                    <p class="help-block text-danger"><?php echo form_error('title'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="Address" class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-9">
                    <textarea class="form-control" type="text" name="address" id="Address"><?php echo set_value('address', $apps->address); ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="footer_text" class="col-sm-3 col-form-label">Footer Text</label>
                <div class="col-sm-9">
                    <textarea id="footer_text" class="form-control" name="footer_text" placeholder="footertext"><?php echo set_value('footer_text', $apps->footer_text); ?></textarea>
                    <p class="help-block text-danger"><?php echo form_error('footer_text'); ?></p>
                </div>
            </div>
            <div class="form-group row" style="margin-left: 45%;">
                <a class="btn btn-danger w-md m-b-5" onclick="window.location.reload()">Cancel</a>
                <button type="submit" class="btn btn-success w-md m-b-5">Update</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>