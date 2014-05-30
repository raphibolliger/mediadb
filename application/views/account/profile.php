<div id="content">

    <div id="sidebar">
        <div class="sidebar-toggler visible-xs">
            <i class="ion-navicon"></i>
        </div>

        <h3>Benutzerkonto</h3>
        <ul class="menu">
            <li>
                <a href="/mediadb/account/profile" class="active">
                    <i class="ion-ios7-person-outline"></i>
                    Benutzerprofil
                </a>
            </li>
        </ul>
    </div>

    <div id="panel" class="profile">
        <h3>
            Profileinstellungen
        </h3>

        <p class="intro">
            Hier kannst du deine Profilinformationen bearbeiten.
        </p>

        <?php
        if (validation_errors())
        {
            echo '<div class="alert alert-danger">';
            echo validation_errors();
            echo '</div>';

        }
        ?>

        <form method="post" action="<?php echo base_url(); ?>account/profile_validation">
            <div class="form-group">
                <label>Vorname</label>
                <input type="text" name="prename" class="form-control" placeholder="Vorname" value="<?php echo $prename; ?>">
            </div>
            <div class="form-group">
                <label>Nachname</label>
                <input type="text" name="surname" class="form-control" placeholder="Nachname" value="<?php echo $surname; ?>">
            </div>
            <div class="form-group">
                <label>Passwort</label>
                <input type="password" name="password" class="form-control" placeholder="Passwort" >
            </div>
            <div class="form-group">
                <label>Passwort bestätigen</label>
                <input type="password" name="cpassword" class="form-control" placeholder="Passwort bestätigen" >
            </div>
            <div class="form-group action">
                <input type="submit" class="btn btn-success" value="Speichern">
            </div>
        </form>
    </div>


</div>