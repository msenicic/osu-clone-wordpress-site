<?php
    $quote = get_field('quote');
    $quotePerson = get_field('quote_person')
?>

<section class="module module-quote-block">
    <div class="container">
        <div class="quote">
            <p><?= $quote ?></p>
            <p><?= $quotePerson ?></p>
        </div>
    </div>
</section>