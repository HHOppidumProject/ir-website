<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php $this->assign('title', 'Religion - Minerva'); ?>
<section id="highlights" class="wrapper style3">
    <h1 class="title is-1" style="color:var(--brand-color2) !important">Minerva</h1>
    <img class="image is-fullwidth" style="border: none;" src="/img/minerva.jpg"/>
    <p style="font-size: 0.4em"><?= $this->Html->link('Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:ADIPompeii-27527-3.jpg') ?></p>
    <h2 class="subtitle is-1 has-text-centered" style="color:var(--brand-color)">Goddess of Wisdom</h2>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Background</h2>
        <p>If Mars governs the brutality of warfare, then Minerva governs the stratagems. Goddess of Wisdom and Warfare, Minerva enjoyed a long history of worship in Rome, deriving from or sharing origin with the Etruscan Menrva. She became a favorite among victorious generals from the Republic to Empire, owing their success to Minerva's intercession on the battlefield.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>History</h2>
        <p>Minerva's name is etymologically descended from the Proto-Indo-European root 'menos' meaning 'thought', making her distantly related to the English word 'mind', reinforcing the antiquity of her role as a goddess of wisdom. Her origins lie in the earlier Etruscan goddess Menrva, who inherited most of her mythology and functionality from the Greek Athena.</p>
        <p>Athena, otherwise known as Pallas, is reported to have won a contest against Poseidon for the naming rights of Athens, and that the city derives its name from the goddess. Modern scholars, however, believe it was the reverse; that the goddess derived her name from the city. Scholars believe she began as some manner of city protectress, a divine manifestation of the city of Athens who became assimilated into the larger Greek Pantheon. However, her development and spread throughout the Hellenistic world is hotly debated and full of many gaps. Her name, if it does derive from the city, is an etymological mystery, as there is no widespread acceptance regarding the origin of Athens' name.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>Mythology & Legends</h2>
        <p>Despite her prominence in Roman religion, there are no known myths of Minerva that do not derive from a prior Greek source in some form.</p>
    </div>

    <div id="our-sections" class="jumbotron" style="text-align:right; margin-top:4rem;">
        <h2>In Ancient Rome</h2>
        <p>Together with Jupiter and Juno, Minerva formed the Capitoline Triad, a uniquely Roman grouping of deities that saw the trio as overseers of the state, with many rites extant in revering all three deities jointly. The Triad has no Greek counterpart and is apparently of Etruscan origin.</p>
        <p>As Roman territory expanded, Minerva became syncretized with a number of foreign goddesses, particularly in Celtic regions like Gaul and Britannia, where we find numerous shrines and written rites to her, often praying for aid in everyday occurrences.</p>
        <p>In the Imperial era, Emperor Nerva (r. 96 - 98 CE), who considered the goddess his patron, constructed her a temple in his eponymous forum, completing it in 97 CE. The temple stood virtually intact after the fall of the Western Roman Empire and through the Middle Ages. However, in 1606 CE, Pope Paul V ordered the temple remains plundered and their materials repurposed for the construction of a nearby fountain and a chapel for the Church of Santa Maria Maggiore.</p>
    </div>
    <div class="has-text-centered">
        <?= $this->Html->link('Return to Dii Consentes Portal', ['controller' => 'religion', 'action' => 'diiConsentes'], ['class' => 'button is-primary']) ?>
    </div>
</section>