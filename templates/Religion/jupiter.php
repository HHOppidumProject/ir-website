<?php

/**
 * @var Laminas\View\Renderer\PhpRenderer $this
 */
?>
<section id="highlights" class="wrapper style3">
    <h1 class="title is-1" style="color:var(--brand-color2) !important">Jupiter</h1>
    <img class="image is-fullwidth" style="border: none;" src="/img/jupiter.jpeg"/>
    <p style="font-size: 0.4em"><?= $this->Html->link('Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Jupiter_J1b.jpg') ?></p>
    <h2 class="subtitle is-1 has-text-centered" style="color:var(--brand-color)">King of the Gods</h2>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Background</h2>
        <p>If every man gives heed to a god, every god gives heed to Jupiter. Otherwise known as Jove (also called Zeus in Greek), Jupiter is the supreme ruler of the cosmos and lord of the Olympians. He is the God of Thunder, Sky, and Sovereign Authority, ruling humans and deities alike from his celestial throne.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Mythology and Legends</h2>
        <p>Jupiter is said to have ordained the foundation of Rome long before the birth of Romulus. When the Greeks sacked the city of Troy and razed it to the ground, a minor tribe of Trojans known as Dardans managed to escape. Their leader, a son of Venus named Aeneas, led the refugee Trojans into Italy to preserve both their lives and their sacred rites. Aeneas himself would marry the native princess of the Latin tribe, Lavinia. Romulus himself would be born of this lineage many generations later.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>In Ancient Rome</h2>
        <p>Jupiter's significance, to both the Romans of old and us today, cannot be understated. He is the supreme ruler of Rome and revered above all other gods. Alongside Minerva and Juno, he is a member of the Capitoline Triad, an archaic grouping of deities ancient even to the Romans. Under the moniker of his most famous epithet, Optimus Maximus, literally meaning 'the Best and Greatest', he was worshiped atop the Capitoline Hill in a temple of the same name.</p>
        <p>The earliest foundations of this temple were attributed to Lucius Tarquinius Priscus, the legendary fifth king of Rome. But over the centuries the temple was rebuilt and refurbished following various fires and catastrophes, oftentimes becoming more splendid with every new iteration.</p>
        <p>However, this would not last. Following the anti-pagan decrees of Emperor Theodosius I, the temple fell into disrepair as worship became illegal and seen as taboo among the newly Christianized Romans. The resulting decrees left the building as carrion to be scavenged for loot and construction materials over the ensuing millennia. The final remains of the temple were destroyed in the 16th century to build a private residence for an Italian nobleman.</p>
    </div>

    <div class="has-text-centered">
        <?= $this->Html->link('Return to Dii Consentes Portal', ['controller' => 'religion', 'action' => 'diiConsentes'], ['class' => 'button is-primary']) ?>
    </div>
</section>