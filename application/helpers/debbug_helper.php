<?php

function debbug($variavel) { ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                echo '<pre>';
                print_r($variavel);
                echo '</pre>';
                ?>
            </div>
        </div>
    </div>
    <?php
    die();
}

function xdebbug($variavel) {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                echo '<pre>';
                print_r($variavel);
                echo '</pre>';
                ?>
            </div>
        </div>
    </div>
<?php } ?>
