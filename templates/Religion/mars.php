<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php $this->assign('title', 'Religion - Mars'); ?>
<section id="highlights" class="wrapper style3">
    <h1 class="title is-1" style="color:var(--brand-color2) !important">Mars</h1>
    <img class="image is-fullwidth" style="border: none;" src="/img/mars.jpg"/>
    <p style="font-size: 0.4em"><?= $this->Html->link('Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Colossal_statue_of_Mars,_end_of_1st_century_AD,_from_the_Forum_Transitorium_in_Rome,_Capitoline_Museums_(12879072994).jpg') ?></p>
    <h2 class="subtitle is-1 has-text-centered" style="color:var(--brand-color)">God of War</h2>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Background</h2>
        <p>If there is a factor to unite all mankind, it is war. Be it righteous or tyrannical, warfare has been practiced by all. It is little wonder that we find Mars ranked as one of their most important deities for the Roman people. He is credited with being the father of Romulus himself, and is called the Father of the Romans.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>History</h2>
        <p>The exact origins of Mars are unknown. From our limited understanding, Mars traces his earliest incarnations to the Italian Peninsula, not solely as a deity of war, but also an agricultural god. Rome idealized the notion of the farmer-soldier, and closely linked Mars with both domains. Time passed, and the Romans placed less emphasis on his agrarian roots and put to prominence his place as a bellicose deity. Despite this, the rustic origins were never entirely forgotten. Various hymns and epithets survive from the Republic and Empire that invoke Mars as a protector of fields and livestock.</p>
        <p>Following prolonged contact with Greeks, the Romans began to identify Mars with Ares. Though despite this identification, the attitudes towards the two deities are incomparable. Mars was a celebrated hero figure among the Romans and honored with grand displays and public shrines. Ares, in contrast, was a feared and almost reviled figure. His connection to warfare was of the sadistic variety, carrying all the connotations of the worst parts of conflict.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Mythology and Legends</h2>
        <p>The significance of Mars to the foundation of Rome is impossible to overstate. Mars is reported to have lain with the Vestal Virgin Rhea Silvia, who was of the lineage of Aeneas. From their union, the twins Romulus and Remus were born. Rhea Silvia's uncle, King Amulius of Alba Longa, ordered the infants to be drowned in the Tiber (he feared directly killing them as to avoid the wrath of Mars). However, the infants instead drifted along the river in a basket until they came ashore. A she-wolf, the sacred animal of Mars, found the infants and nursed them. It is believed it was the intercession of Mars that oversaw and protected the newborns.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>In Ancient Rome</h2>
        <p>Mars was one of the chief deities in the Roman Pantheon, having one of the three archaic 'flamen maiores' (a high priesthood exclusive to patricians) dedicated to the god. He maintained popularity with both soldiers and farmers, worshiped in a variety of ancient rites that predate records, leaving their origins unknown even to the Romans.</p>
        <p>Some decades after the defeat of Julius Caesar's assassins, Augustus made good on an earlier oath to the god by constructing a temple to Mars under the name Mars Ultor “the Avenger” for victory over Brutus and Cassius. Mars continued to be worshiped by many until the decrees outlawing paganism by Emperor Theodosius I.</p>
    </div>

    <div class="has-text-centered">
        <?= $this->Html->link('Return to Dii Consentes Portal', ['controller' => 'religion', 'action' => 'diiConsentes'], ['class' => 'button is-primary']) ?>
    </div>
</section>