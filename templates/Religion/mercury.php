<?php

/**
 * @var Laminas\View\Renderer\PhpRenderer $this
 */
?>
<section id="highlights" class="wrapper style3">
    <h1 class="title is-1" style="color:var(--brand-color2) !important">Mercury</h1>
    <img class="image is-fullwidth" style="border: none;" src="/img/mercury.jpg"/>
    <p style="font-size: 0.4em"><?= $this->Html->link('Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Mercury_(deity)_relief.jpg') ?></p>
    <h2 class="subtitle is-1 has-text-centered" style="color:var(--brand-color)">God of Travelers</h2>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Background</h2>
        <p>Whether a traveler praying for safety, a merchant hoping to strike it rich, or a thief hoping to evade the law, all will pray to the same divine: Mercury, God of Travelers, Commerce, and Thievery. A god of many roles, Mercury can be observed in a variety of occupations, no doubt contributing to his popularity and longevity until the old pantheon was usurped by Christendom.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>History</h2>
        <p>Mercury's name has two potential roots: either Latin 'merx', relating to the English merchant and merchandise, or the Proto-Indo-European root 'merg-', making his name related to English mark, in the sense of boundary mark.</p>
        <p>Mercury is not attested among the very oldest deities of Rome, instead we find an ancient set of deities known as Gods of Gain who oversaw monetary and commercial business. But as Mercury increased in prominence, these divinities lost their status as their role became inherited by his growing cult.</p>
        <p>Hermes, his Greek counterpart, has his origins in the rustic god Pan. Pan, natively worshiped in the region of Arcadia, had a specific cultic epithet denoting providence over herms, a sort of boundary marker of piled stones. This epithet, Pan of the Herm, eventually came to be revered independently of Pan himself, a separate deity known as Hermes.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Mythology and Legends</h2>
        <p>In one of the few exclusively Roman myths, Mercury is said to have been the father of a pair of Lares, a class of domestic gods worshiped in Rome, by the infernal nymph Lara.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>In Ancient Rome</h2>
        <p>As the God of Commerce & Travelers, Mercury enjoyed longevity among the inhabitants of Rome. Depictions of him abound in art, on coinage, and in housing. His role overseeing commerce made him especially popular with merchants, who wished him to grant them lucre in their business dealings.</p>
        <p>Mercury's sacred festival was the Mercuralia, annually on May 15th, where merchants with sprinkle themselves and their wares with water taken from the Porta Capena, an entry gate located to the south of the city.</p>
        <p>Due to associations with guiding souls of the dead, Hermes and the Egyptian Anubis were syncretized into a hybrid deity known as Hermanubis, who found popularity among the Romans.</p>
    </div>

    <div class="has-text-centered">
        <?= $this->Html->link('Return to Dii Consentes Portal', ['controller' => 'religion', 'action' => 'diiConsentes'], ['class' => 'button is-primary']) ?>
    </div>
</section>