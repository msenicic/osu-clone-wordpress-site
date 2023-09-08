<?php 
    $nlTitle = get_field("nl_title");
    $nlSubtitle = get_field("nl_subtitle");
    $nlText = get_field("nl_text");
    $nlBackgroundColor = get_field("nl_background_color");
    $nlTextColor = get_field("nl_text_color");
?>
<style>
    :root {
        --nl-txt-color : <?= $nlTextColor; ?>;
        --nl-bg-color : <?= $nlBackgroundColor; ?>;
    }
</style>

<!--<section class="module module-group">-->
<!--    <div class="container">-->
            <!-- Wp form -->
            <div class="title">
                <h3><?= $nlTitle ?></h3>
                <p><?= $nlSubtitle ?></p>
            </div>
            <div class="text">
                <?= $nlText ?>
            </div>
<!--    </div>-->
<!--</section>-->