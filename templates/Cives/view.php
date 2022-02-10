<?php
$shrtNameString  = (!empty($civis->praenomina->SHORTENED) ? h($civis->praenomina->SHORTENED) : ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->praenomina->MALE) : h($civis->praenomina->FEMALE)))  . " " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->nomina->NOMEN) : h($civis->nomina->GENS)) . " " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->cognomina->MALE) : h($civis->cognomina->FEMALE));
$nameString  = ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->praenomina->MALE) : h($civis->praenomina->FEMALE))  . " " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->nomina->NOMEN) : h($civis->nomina->GENS)) . " " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->cognomina->MALE) : h($civis->cognomina->FEMALE));
$this->assign('title', "Album Civium - $shrtNameString");
echo $this->Paginator->meta();
?>

<section id="highlights" class="wrapper style3">
    <h1 class="title is-1 has-text-centered"><?= h($shrtNameString); ?></h1>
    <div id="our-sections" class="column " style="padding: 1rem;">
        <h3 class="subtitle is-4" style="color: white !important">About</h3>
        <div>
            <p>ID: <?= h(substr($civis->CIVISID, 0, 27) . '...'); ?></p>
        </div>
        <div>
            <p>Nomen: <?= h($nameString); ?></p>
        </div>
        <div>
            <p>Shorthand: <?= h($shrtNameString); ?></p>
        </div>
        <div>
            <p>Status: <?= (time() - (60 * 60 * 24 * 365)) < strtotime($civis->cives_priv->LAST_PAID_TAX) ? 'Active/Has paid tax' : 'Inactive/Tax due'; ?></p>
        </div>
        <div>
            <p>Gens: <?= h($civis->nomina->GENS); ?></p>
        </div>
        <div>
            <p>Citizen since: <?= h($civis->DATEJOINED->format('Y-m-d')); ?></p>
        </div>
        <div>
            <p>Order: <?= h($civis->ISPATRICIAN ? 'Patrician' : 'Plebian'); ?></p>
        </div>
        <div>
            <p>Provincia: <?= h($civis->cives_priv->state_to_provincium->provincium->PROVINCENAME); ?></p>
        </div>
    </div>

    <div class="column scroll" style="height: 15vh; max-height:15vh">
        <h3 class="subtitle is-4" style="color: white !important">CIVIL SERVICE RECORD</h3>
        <div class="placeholder">
            <p>Coming Soon!</p>
        </div>
        <div class="placeholder">
        </div>
        <div class="placeholder">
        </div>
        <div class="placeholder">
        </div>
    </div>
    <div class="has-text-centered">
        <?php
        if (isset($isLoggedIn)) {
            if ($isLoggedIn && isset($loggedInCivis)) {
                if ($loggedInCivis->CIVISID === $civis->CIVISID && $loggedInCivis->PASSWORDHASH === $civis->PASSWORDHASH && $loggedInCivis->EMAIL === $civis->EMAIL) {
                    echo $this->Html->Link("Edit Profile", ['action' => 'edit', $loggedInCivis->CIVISID], ['class' => 'button is-primary is-fullwidth']);
                }
            }
        }
        ?>
    </div>
</section>