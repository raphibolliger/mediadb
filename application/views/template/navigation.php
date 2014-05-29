<div id="sidebar-default" class="main-sidebar">

    <?php

    if ($this->session->userdata('is_logged_in'))
    {
        echo '

        <!-- Logged In -->
             <div class="current-user">
                <a href="index.html" class="name">
            <img class="avatar" src="/mediadb/template/images/avatars/3.jpg" />
					<span>';
						echo $this->session->userdata('prename')." ".$this->session->userdata('surname');
					echo '<i class="fa fa-chevron-down"></i>
					</span>
        </a>
                <ul class="menu">
            <li>
                <a href="/mediadb/account/profile">Benutzerprofil</a>
            </li>
            <li>
                <a href="/mediadb/help/overview">Hilfe</a>
            </li>
            <li>
                <a href="/mediadb/account/logout">Logout</a>
            </li>
        </ul>
        </div>

        ';
    }
    else
    {
        echo '

            <!-- Guest User -->
        <div class="current-user">
        <a href="index.html" class="name">
            <img class="avatar" src="/mediadb/template/images/avatars/user.png" />
					<span>
						Gastbenutzer
						<i class="fa fa-chevron-down"></i>
					</span>
        </a>
        <ul class="menu">
            <li>
                <a href="/mediadb/account/login">Login</a>
            </li>
            <li>
                <a href="/mediadb/account/register">Registrieren</a>
            </li>
            <li>
                <a href="/mediadb/help/overview">Hilfe</a>
            </li>
        </ul>
        </div>

        ';
    }

    ?>




    <!-- Load Navigation for all -->
    <div class="menu-section">
        <h3>Videodatenbank</h3>
        <ul>
            <li>
                <a href="<?php echo base_url(); ?>" class="active">
                    <i class="ion-android-earth"></i>
                    <span>Übersicht</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>movie">
                    <i class="brankic-film"></i>
                    <span>Filme</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>tvshows">
                    <i class="brankic-tv"></i>
                    <span>Serien</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>dokus">
                    <i class="brankic-globe"></i>
                    <span>Dokumentationen</span>
                </a>
            </li>
        </ul>
    </div>


    <!-- Load right UserMenu -->
    <?php

    if ($this->session->userdata('is_logged_in'))
    {
        echo '
        <div class="menu-section">
        <h3>Administration</h3>
        <ul>
            <li>
                <a href="/mediadb/account/profile">
                    <i class="ion-person"></i> <span>Benutzerkonto</span>
                </a>
            </li>';

        if ($this->session->userdata('rights') == 4)
        {
            echo '
                <li>
                <a href="/mediadb/admin/usermanagement">
                    <i class="fa fa-cogs"></i> <span>Verwalten</span>
                </a>
            </li>
            ';
        }

        echo '</ul>
        </div>
        ';
    }
    else
    {
        echo '
        <div class="menu-section">
        <h3>Registrieren / Login</h3>
            <ul>
            <li>
                <a href="/mediadb/account/login">
                    <i class="ion-android-earth"></i>
                    <span>Login</span>
                </a>
            </li>
            <li>
                <a href="/mediadb/account/register">
                    <i class="brankic-film"></i>
                    <span>Registrieren</span>
                </a>
            </li>
        </ul>
        </div>
        ';
    }

    ?>


</div>