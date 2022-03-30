<?php
/**
 * @var \App\View\AppView $this
 * @var object $civis
 */
?>
<section id="highlights" class="wrapper style3">
    <?php 
    $shrtNameString  = h((!empty($civis->praenomina->SHORTENED) ? h($civis->praenomina->SHORTENED) : ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->praenomina->MALE) : h($civis->praenomina->FEMALE)))  . " " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->nomina->NOMEN) : h($civis->nomina->GENS)) . " " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->cognomina->MALE) : h($civis->cognomina->FEMALE)));
    $nameString  = h(($civis->PREFFEREDWORDGENDER === 0 ? h($civis->praenomina->MALE) : h($civis->praenomina->FEMALE))  . " " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->nomina->NOMEN) : h($civis->nomina->GENS)) . " " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->cognomina->MALE) : h($civis->cognomina->FEMALE))); ?>
    <h1 class="title is-1">Signup Successful!</h1>
    <div class="has-text-centered">
        <h2>Salve <?= "$nameString" ?>, ex omnibus</h2>
        <h3>Welcome to the Imperivm Romanvm</h3>
        <p>We hope for you to enjoy your time with us and for you to align yourself with our goals. You are a Roman, please be respectful to others and tell everyone you know about us so they might help us too!</p>
    </div>
    <div class="jumbotron">
        <h4>Your details are as follows (note these down)</h4>
        <ul>
            <li>ID: <?= h($civis->CIVISID) ?></li>
            <li>Full Nomen: <?= $nameString ?></li>
            <li>Shortened Nomen: <?= $shrtNameString ?></li>
            <li>Gens: <?= h($civis->nomina->GENS) ?></li>
            <li>Email: <?= h($civis->EMAIL) ?></li>
            <li>Preferred Word Gender: <?= $civis->PREFFEREDWORDGENDER ? "Female" : "Male" ?></li>
            <li>State: <?= h($civis->cives_priv->state_to_provincium->STATENAME) ?></li>
            <li>Provincia: <?= h($civis->cives_priv->state_to_provincium->provincium->PROVINCENAME) ?></li>
            <li>Phone Number: <?= h($civis->cives_priv->PHONE_NUMBER) ?></li>
            <li>Post/Zip code: <?= h($civis->cives_priv->POSTCODE_ZIP) ?></li>
        </ul>
        <div class="has-text-centered">
            <h2>If any of the details are incorrect, please email us immediately and we will remedy it within 24 hours. If there is no response in that time please follow up, again, immediately. You can check your email for a copy of this information.</h2>
        </div>
    </div>
    <div class="has-text-centered">
        <?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'display'], ['class' => "button is-primary is-large is-fullwidth"]) ?>
    </div>
</section>