<?php
    /*
        This templated was created by Rebmug for Sunrise Roleplay. 
        We will be using procedural PHP because I, Rebmug, am the only person working
        on it so I feel like using procedural PHP but my future plan is to use Oriented
        PHP programming with a lovely framework Laravel.  
    */
?>
<?php
    include "inc/header.inc.php";
?>
            <!--Main Body-->
            <div class="main-body">
                <?php 
                    include "inc/nav.inc.php";
                ?>
                <!--Content Body-->
                <div class="content-body">
                    <div class="col-lg-13">
                        <div class="c-breadcrumb">
                            Sunrise Roleplay
                        </div>
                        <div class="row">
                            <?php
                                include "inc/post.inc.php";
                            ?>
                            <?php
                                include "inc/sidebar.inc.php";
                            ?>
                        </div>
                        
                    </div>
                </div>
<?php
    include "inc/footer.inc.php";
?>