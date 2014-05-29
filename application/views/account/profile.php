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

        <form>
            <div class="form-group">
                <label>Vorname</label>
                <input type="text" class="form-control" placeholder="Vorname" value="<?php echo $prename; ?>">
            </div>
            <div class="form-group">
                <label>Nachname</label>
                <input type="text" class="form-control" placeholder="Nachname" value="<?php echo $surname; ?>">
            </div>
            <div class="form-group">
                <label>Emailadresse</label>
                <input type="email" class="form-control" placeholder="Emailadresse" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label>Passwort</label>
                <input type="password" class="form-control" placeholder="Passwort" >
            </div>
            <div class="form-group">
                <label>Passwort bestätigen</label>
                <input type="password" class="form-control" placeholder="Passwort bestätigen" >
            </div>
            <div class="form-group action">
                <input type="submit" class="btn btn-success" value="Speichern">
            </div>
        </form>
    </div>


</div>