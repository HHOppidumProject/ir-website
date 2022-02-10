<?php

/**
 * @var Laminas\View\Renderer\PhpRenderer $this
 */
?>
<section id="highlights" class="wrapper style3">
    <h1 class="title is-1" style="color:var(--brand-color2) !important">Venus</h1>
    <img class="image is-fullwidth" style="border: none;" src="/img/venus.jpg"/>
    <p style="font-size: 0.4em"><?= $this->Html->link('Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Detail,_Venus_de_Milo._The_Louvre_(7179077072).jpg') ?></p>
    <h2 class="subtitle is-1 has-text-centered" style="color:var(--brand-color)">Goddess of Love</h2>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Background</h2>
        <p>Every person shows devotion to one god or another. Apollo for the artist. Vulcan for the smith. Mars for the soldier. Yet few are those to whom matters of sex and love hold no significance. It should be little wonder then that Venus has always had attracted worshipers from every class and creed. Goddess of Sex, Beauty, Love, and Fertility, Venus is revered as the Mother of the Roman People and one of the most popular deities in the civilization's history.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Origins</h2>
        <p>The Roman Venus appears to have been initially a minor fertility deity in the Italian Peninsula, who gained prominence as trade with Greek colonists to the south brought the cult of Aphrodite, whom the Italians began to link with their native goddess.</p>
        <p>The Grecian Aphrodite, meanwhile, has her origins to the east. The cult of goddess Astarte, also known as Ishtar, first reached the Greek mainland via Sparta. The Spartans had long claimed dominion over the nearby island of Cythera, which by then had begun playing host to the cult of Astarte. It was only natural then that this goddess would quickly become adopted by the Spartans and proliferate across the Hellenistic world.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Mythology and Legends</h2>
        <p>Venus holds a significant place in the Roman Pantheon. She is revered as the mother of Aeneas, the Trojan Prince who escaped the sack of Troy and would resettle in Italy, becoming the ancestor of the Roman people. She protected her son throughout his voyage and is credited with granting the later Romans military victory over their foes. As such, she inherited the role of matron of the entire Roman people and was honored accordingly. Her affair with Mars, father of Romulus, intertwined the two deities even tighter in the Roman zeitgeist.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>In Ancient Rome</h2>
        <p>Venus was popularly invoked in a variety of contexts. In warfare, she was invoked Venus Victrix “the Victorious”. She held a creatress role as Venus Physica. And, quite salaciously, Venus Callipygus, “of the Beautiful Buttocks”.</p>
        <p>Julius Caesar, claiming descent from the goddess via the lineage of Aeneas, constructed a temple in her honor under the name of Venus Genetrix, “Venus the Mother”. The temple would burn down several times over the ensuing centuries, continually being rebuilt. Venus proved a popular deity in Rome for centuries until the gradual decline and outlawing of pagan worship in the empire.</p>
    </div>

    <div class="has-text-centered">
        <?= $this->Html->link('Return to Dii Consentes Portal', ['controller' => 'religion', 'action' => 'diiConsentes'], ['class' => 'button is-primary']) ?>
    </div>
</section>