<?php

/**
 * @var Laminas\View\Renderer\PhpRenderer $this
 */
?>
<section id="highlights" class="wrapper style3">
    <h1 class="title is-1" style="color:var(--brand-color2) !important">Vulcan</h1>
    <img class="image is-fullwidth" style="border: none;" src="/img/vulcan.jpg"/>
    <p style="font-size: 0.4em"><?= $this->Html->link('Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Hephaestus_and_Cyclopes_forging_the_shield_of_Achilles_(marble).jpg') ?></p>
    <h2 class="subtitle is-1 has-text-centered" style="color:var(--brand-color)">God of the Forge</h2>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Background</h2>
        <p>The most skilled craftsmen are rightly revered for their caliber of artistry. Yet none on Earth can compare to the God of the Forge, Vulcan. Also known as 'the lame god' for his perpetual limp, he is the husband of the beautiful Venus, yet often vexed by her perpetual love-affair with the able-bodied Mars. In spite of this, even the Olympians dare not mock his creations, as both heroes and gods have donned his arms for battle.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>History</h2>
        <p>Vulcan's worship goes back millennia, with a dedicated priest of his rites documents among the flamens, a group of the oldest priesthoods in Rome. On account of their mutual roles as gods of the smithy, the Romans identified Vulcan with the Greek Hephaestus, a key factor in his enduring popularity over the centuries when gods of similar antiquity fell into obscurity.</p>
        <p>His Etruscan cognate is the smith-god Sethlans, which makes an etymological relation virtually impossible. With neither a Greek nor Etruscan root established, the origin of Vulcan and his rites are unclear. A variety of links to neighboring gods of similar duties have been suggested, with a popular theory suggesting the Cretan deity Velchanos as a source for his name.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Mythology and Legends</h2>
        <p>After Aeneas had landed in Italy with the remaining Trojans, he became engaged to Princess Lavinia of the Latin tribe. This engagement, however, broke her betrothal to Turnus, King of the Rutulians, sparking war between the two. Venus, mother of Aeneas, begged of her husband to forge armaments for her son at the onset of war. Vulcan, moved by her pleas, crafted him weapons and a magnificent shield, upon which he engraved the future glories and tribulations of the Roman people.</p>
        <p>A rather curious myth is recorded regarding the conception Servius Tullius, the sixth King of Rome. Sources claim his mother was a noblewoman named Ocrisia. The preceding events are contested, but they agree that while tending a sacred fire, a flaming phallus emerged from the blaze and impregnated her. Many interpreted the phallus to have been a manifestation of Vulcan.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>In Ancient Rome</h2>
        <p>The worship of Vulcan in Rome is ancient, even by Roman standards. His earliest attested shrine, the Vulcanal, is said to have been erected by the King of the Sabines, Titus Tatius, a contemporary of Romulus. The monument endure for nearly a millennium before it full into obscurity and vanishes from the historical record. Its precise location is still a mystery.</p>
        <p>Rome, due to its primarily wood construction and compact layout, was prone to fire. Some of which proved so devastating they consumed a large percentage of the city. On account of this, appeals to Vulcan were common as many prayed the fire would be soon extinguished (or at least leave their own properties untouched).</p>
    </div>

    <div class="has-text-centered">
        <?= $this->Html->link('Return to Dii Consentes Portal', ['controller' => 'religion', 'action' => 'diiConsentes'], ['class' => 'button is-primary']) ?>
    </div>
</section>