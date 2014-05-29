<div id="content">
    <div id="sidebar">
        <div class="sidebar-toggler visible-xs">
            <i class="ion-navicon"></i>
        </div>

        <h3>Verwalten</h3>
        <ul class="menu">
            <li>
                <a href="/mediadb/admin/usermanagement" class="active">
                    <i class="ion-ios7-person-outline"></i>
                    Benutzerverwaltung
                </a>
            </li>
        </ul>
    </div>

    <div id="panel" class="profile">
        <h3>
            Benutzerverwaltung
        </h3>
        <p></p>
        <p>Hier können Benutzer aktiviert, deaktiviert, bearbeitet und gelöscht werden.</p>
        <?php
        echo $usertable;
        ?>

    </div>
</div>