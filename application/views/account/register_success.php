<div id="content">
    <div class="menubar">
        <div class="sidebar-toggler visible-xs">
            <i class="ion-navicon"></i>
        </div>
        <div class="page-title">
            Registrierung abgeschlossen
        </div>
    </div>

    <div class="content-wrapper">

        <?php

        if ($login)
        {
            echo "Die Registrierung ist erfolgreich abgeschlossen. Bitte bestätige deinen Account indem du dem Link in der erhaltenen Email folgst.";
        }
        else
        {
            echo "Es ist ein Fehler aufgetreten, bitte versuche dich später nocheinmal zu registrieren.";
        }



        ?>

    </div>


</div>