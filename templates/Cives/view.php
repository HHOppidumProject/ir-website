<?php
$shrtNameString  = (!empty($civis->praenomina->SHORTENED) ? h($civis->praenomina->SHORTENED) : ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->praenomina->MALE) : h($civis->praenomina->FEMALE)))  . " " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->nomina->NOMEN) : h($civis->nomina->GENS)) . " " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->cognomina->MALE) : h($civis->cognomina->FEMALE));
$nameString  = ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->praenomina->MALE) : h($civis->praenomina->FEMALE))  . " " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->nomina->NOMEN) : h($civis->nomina->GENS)) . " " . ($civis->PREFFEREDWORDGENDER === 0 ? h($civis->cognomina->MALE) : h($civis->cognomina->FEMALE));
$this->assign('title', "Album Civium - $shrtNameString");
echo $this->Paginator->meta();
?>

<section id="highlights" class="wrapper style3">
    <h1 class="title is-1 has-text-centered"><?= h($shrtNameString); ?></h1>
    <div id="our-sections" class="column " style="padding: 1rem;">
        <div class='columns'>
            <div class='column'>
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
            <?php
            if (isset($isLoggedIn)) {
                if ($isLoggedIn && isset($loggedInCivis)) {
                    if ($loggedInCivis->CIVISID === $civis->CIVISID && $loggedInCivis->PASSWORDHASH === $civis->PASSWORDHASH && $loggedInCivis->EMAIL === $civis->EMAIL) {?>
                        <script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>
                        <script>
                            let qrCode;

                                function generate() {
                                    qrCode = new QRCodeStyling({
                                        width: $('#passport').innerHeight(),
                                        height: $('#passport').innerHeight(),
                                        margin: 0,
                                        type: "png",
                                        data: "data:text/html,<!DOCTYPE html><html><head><title><? echo h($nameString); ?></title><link rel=stylesheet href=https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css><link rel=stylesheet href=https://www.imperivm-romanvm.com/css/style.css><link rel=stylesheet href=https://www.imperivm-romanvm.com/css/main.css></head><body><section class='style3'><div><h1 class='title is-1 has-text-centered'><?= h($nameString); ?></h1></div><div id='our-sections' class='column' style='padding:1rem'><div class='column'><h3 class='subtitle is-4' style='color:white!important'>About</h3><div><p>ID:<?= h($civis->CIVISID) ?></p></div><div><p>Nomen:<?=h($nameString)?></p></div><div><p>Shorthand:<?= h($shrtNameString); ?></p></div><div><p>Status:<?= (time() - (60 * 60 * 24 * 365)) < strtotime($civis->cives_priv->LAST_PAID_TAX) ? 'Active/Has paid tax' : 'Inactive/Tax due'; ?></p></div><div><p>Gens:<?= h($civis->nomina->GENS); ?></p></div><div><p>Citizen since:<?= h($civis->DATEJOINED->format('Y-m-d')); ?></p></div><div><p>Order:<?= h($civis->ISPATRICIAN ? 'Patrician' : 'Plebian'); ?></p></div><div><p>Provincia:<?= h($civis->cives_priv->state_to_provincium->provincium->PROVINCENAME); ?></p></div><div><p>Date of Birth:<?= h($civis->DOB); ?></p></div><div><p>Phone Number:<?= h($civis->cives_priv->PHONE_NUMBER) ?></p></div><!-- Custom UID 2: <?php $prev = '';foreach (str_split($civis->__toString()) as $char) {$prev = hash('sha256', $prev . $char);}echo $prev; ?>--></div></section></body></html>",
                                        image: "/img/wiki.png",
                                        dotsOptions: {
                                            color: "#66023c",
                                            type: "classy-rounded"
                                        },
                                        backgroundOptions: {
                                            color: "#fffcf0",
                                        },
                                        imageOptions: {
                                            hideBackgroundDots: false
                                        },
                                        cornersSquareOptions: {
                                            type: 'dot'
                                        },

                                    });
                                    $('#passport').html('<div id="canvas"></div>');
                                    qrCode.append(document.getElementById("canvas"));
                                    $('svg').css('display', 'block').css('margin', 'auto');
                                    $('#passport').append(`<button class="button is-primary is-fullwidth" onclick="qrCode.download({ name: \'<?=h($nameString);?>.passport\', extension: \'png\' });">Download Passport</button>`);
                                }
                            </script>
                        <div id="passport" class='column'>
                            <button class="button is-primary is-fullwidth" onclick="generate()">Generate Passport</button>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>

    <div class="column scroll" style="height: 15vh; max-height:15vh">
        <h3 class="subtitle is-4" style="color: white !important">CIVIL SERVICE RECORD</h3>
        <?php
            foreach($serviceRecord as $i){
                echo '<div style="text-align: center" class="placeholder">
                <h4>'. $i['civil_service']['SERVICENAME'] .'</h4>
                <h5>'. $i['DATESTART'] . ' - ' . $i['DATEEND'] .'<h5>
                </div>';
            }?>
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