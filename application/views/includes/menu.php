<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <i class="material-icons">apps</i>
    </button>
    <?php
    $this->load->helper('new_helper');
    $result =  yourHelperFunction();
    ?>
    <a class="navbar-brand" href="<?php echo base_url() . "dashboard"; ?>">
        <?php
        foreach ($result as $d) {
        ?>
            <img class="main-logo" src="<?php echo base_url() . 'assets/logo/' . $d->d_picture; ?>" id="bg" alt="logo">
        <?php
        }
        ?>
    </a>
</div>
<div class="nav-container">
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user-circle"></i> <?= $this->session->userdata('fullname'); ?>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <?php
                    // echo "&nbsp;&nbsp;&nbsp;";
                    // echo "<i class='ti-user'></i>&nbsp;";
                    // echo $this->session->userdata('fullname');
                    // echo "<strong class=\"text-danger\">";

                    // if ($this->session->userdata('user_type') == 9)
                    //     echo display('admin');
                    // else
                    //     echo display('operator');;
                    // echo "</strong>";
                    ?>

                </li>

                <?php if (false) : ?>
                    <?php if ($this->session->userdata('user_type') == 9) {
                    ?>
                        <li><a href="<?php echo base_url(); ?>admin/app_setting"><i class="hvr-buzz-out fa fa-gear"></i>&nbsp; <?php echo display('appsetting'); ?></a></li>
                        <li><a href="<?php echo base_url(); ?>admin/user_add"><i class="hvr-buzz-out fa fa-user-o"></i>&nbsp; <?php echo display('adduser') ?></a></li>
                    <?php
                    }
                    ?>
                    <li><a href="<?php echo base_url(); ?>admin/user_view"><i class="hvr-buzz-out fa fa-user-circle"></i>&nbsp; <?php echo display('viewuser'); ?></a></li>
                <?php endif ?>

                <li><a href="<?php echo base_url(); ?>admin/user_edit"><i class="hvr-buzz-out fa fa-user-circle"></i>&nbsp; <?php echo display('editprofile'); ?></a></li>
                <li><a href="<?php echo base_url(); ?>admin/logout"> <i class="glyphicon glyphicon-off"></i>&nbsp; <?php echo display('logout'); ?></a></li>
            </ul>
        </li>
    </ul>
</div>