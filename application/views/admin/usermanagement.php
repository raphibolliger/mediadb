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
            <li>
                <a href="/mediadb/admin/dbckeck">
                    <i class="ion-ios7-person-outline"></i>
                    Datenbankprüfung
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


<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Benutzer löschen</h4>
            </div>
            <div class="modal-body">
                Soll der User wirklich gelöscht werden?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                <button type="button" class="btn btn-danger">Löschen</button>
            </div>
        </div>
    </div>
</div>