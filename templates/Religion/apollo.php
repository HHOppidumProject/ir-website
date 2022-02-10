<?php

/**
 * @var Laminas\View\Renderer\PhpRenderer $this
 */
?>
<section id="highlights" class="wrapper style3">
    <h1 class="title is-1" style="color:var(--brand-color2) !important">Apollo</h1>
    <div class="hero is-widescreen has-text-centered" style="background-image:url(/img/apollo.jpeg); background-size: cover; height:75vh;">
        <h2 class="subtitle is-1" style="color:var(--brand-color)">God of Healing</h2>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Background</h2>
        <p>There is no civilization without culture, and no culture without artistry. And there is no artistry without Apollo. He is the God of Reason, Art, Healing, Poetry, Oracles, and Plague. Certain later cults and traditions even insist he is the God of the Sun as well. He is also said to be the twin brother of Diana leader of the Nine Muses, goddesses of creative inspiration who inspire poets and artisans alike.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>History</h2>
        <p>Little is known about the worship of Apollo historically. There is no undisputed attestation of him in the Mycenaean culture which predated the Ancient Greeks, and no convincing etymology has ever been postulated by either ancient or contemporary scholars. His name has been traditionally linked with the Greek verb 'apollymi', meaning 'to destroy', but this is broadly considered a folk etymology. A variety of theories concerning him have been put forth, but it is likely Apollo has no singular origin, and his worship is a culmination of numerous cults and traditions from various sources.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Mythology and Legends</h2>
        <p>Being a foreign god, Apollo features little in the native mythology of the Romans. However, his role as patron of Oracles is well attested. A prophetess of his cult, known as the Cumaean Sibyl, approached the seventh king of Rome, Tarquin the Proud, with a series of scrolls claiming they contained divinely sourced information about the future. Tarquin initially rejected the scrolls, dissuaded by the exorbitant price the Oracle demanded. After burning several of the scrolls and demanding an even larger sum each time, Tarquin relented and paid the increased price for the remaining scrolls. These texts, known as the Sibylline Books, were kept under intense protection by the Romans and routinely consulted whenever tragedy struck. Despite this, they were eventually destroyed by the Christian administration of the late Empire, with later Jewish and Christian authors passing off a series of forgeries as the original texts.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>In Ancient Rome</h2>
        <p>Apollo is one of the few examples of an explicit borrowing from the Greeks by the Romans, having no direct counterpart in the native Roman Pantheon. Although broadly worshiped in Greece and neighboring regions, Apollo had relatively minor prominence in Roman society. He was treated as a foreign god, and the construction of temples to him within the bounds of the city of Rome was initially forbidden. Only one temple is known to have been allowed construction due to the personal dedication of a consul following a plague. This changed under Emperor Augustus, who claimed Apollo as his personal patron and ordered a temple constructed in the deity's honor atop the Palantine Hill, cementing his place in the Roman world.</p>
    </div>

    <div class="has-text-centered">
        <?= $this->Html->link('Return to Dii Consentes Portal', ['controller' => 'religion', 'action' => 'diiConsentes'], ['class' => 'button is-primary']) ?>
    </div>
</section>