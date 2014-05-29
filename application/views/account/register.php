<div id="content">
    <div class="menubar">
        <div class="sidebar-toggler visible-xs">
            <i class="ion-navicon"></i>
        </div>
        <div class="page-title">
            Registrierung - Erstelle dein Benutzerkonto
        </div>
    </div>

    <div class="content-wrapper">

        <?php

        if (validation_errors())
        {
            echo '<div class="alert alert-danger">';
            echo '<b>';
            echo 'Achtung! Die Registrierung konnte nicht abgeschlossen werden. Folgende Angaben müssen korrigiert werden:';
            echo '</b><br><br>';
            echo '<ul>';
            echo validation_errors();
            echo '</ul>';
            echo '</div>';
        }

        ?>



        <form id="new-customer" class="form-horizontal" method="post" action="<?php echo base_url(); ?>account/register_validation" role="form" novalidate="novalidate">
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label">Vorname</label>
                <div class="col-sm-10 col-md-8">
                    <input type="text" class="form-control" name="prename" value="<?php echo $this->input->post('prename'); ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label">Nachname</label>
                <div class="col-sm-10 col-md-8">
                    <input type="text" class="form-control" name="surname" value="<?php echo $this->input->post('surname'); ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label">Emailadresse</label>
                <div class="col-sm-10 col-md-8">
                    <input type="text" class="form-control" name="email" value="<?php echo $this->input->post('email'); ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label">Passwort</label>
                <div class="col-sm-10 col-md-8">
                    <div class="has-feedback">
                        <input type="password" class="form-control" name="password" value="<?php echo $this->input->post('password'); ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-md-2 control-label">Passwort bestätigen</label>
                <div class="col-sm-10 col-md-8">
                    <div class="has-feedback">
                        <input type="password" class="form-control" name="cpassword" value="<?php echo $this->input->post('cpassword'); ?>">
                        <i class="ion-information-circled form-control-feedback" data-toggle="tooltip" title="" data-original-title="Hier muss das gleiche Passwort zur bestätigung wiederholt werden.">
                        </i>
                    </div>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Registrieren</button>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-sm-offset-2 col-sm-10">
                    <p>Du hast bereits ein Benutzerkonto? <a href="/mediadb/account/login">Hier</a> kannst du dich Einloggen.</p>
                </div>
            </div>
        </form>
    </div>


</div>