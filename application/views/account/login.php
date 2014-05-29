<div id="content">
    <div class="menubar">
        <div class="sidebar-toggler visible-xs">
            <i class="ion-navicon"></i>
        </div>
        <div class="page-title">
            Anmelden
        </div>
    </div>

    <div class="content-wrapper">

        <p>Um alle Funktionen der Videodatenbank zu nutzen musst du dich einloggen.</p>
        <p>Du hast noch kein Account? <a href="<? echo base_url(); ?>account/register">Hier</a> kannst du dich Registrieren.</p>
        <?php

        if (validation_errors())
        {
            echo '<div class="alert alert-danger">';
            echo validation_errors();
            echo '</div>';
        }
        else
        {
            echo '&nbsp;';
        }

        ?>
        <form id="login" class="form-horizontal" method="post" action="<?php echo base_url(); ?>account/login_validation" role="form" novalidate="novalidate">
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label">Emailadresse</label>
                <div class="col-sm-10 col-md-8">
                    <input type="text" class="form-control" name="email" value="<?php echo $this->input->post('email'); ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label">Passwort</label>
                <div class="col-sm-10 col-md-8">
                    <input type="password" class="form-control" name="password" value="<?php echo $this->input->post('password'); ?>">
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Anmelden</button>
                </div>
            </div>
        </form>
    </div>


</div>