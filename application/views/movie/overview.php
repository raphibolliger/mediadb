<div id="content">
    <div class="menubar">
        <div class="sidebar-toggler visible-xs">
            <i class="ion-navicon"></i>
        </div>

        <div class="page-title">
            Filmübersicht
        </div>
    </div>

    <div class="content-wrapper">

        <?php echo $movietable; ?>

    </div>

</div>


<script>
    $(document).ready(function()
        {
            $("#movietable").DataTable();
        }
    );
</script>
