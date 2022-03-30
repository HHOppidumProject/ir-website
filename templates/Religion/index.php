<?php
/**
 * @var \App\View\AppView $this
 */
?>
<section id="highlights" class="wrapper style3">
    <h2 class="title is-3">Religion in The Imperivm Romanvm</h2>
    <div class="hero has-text-centered">
        <h3 class="subtitle is-3">The Traditional and the New</h2>
            <p>In the Imperivm Romanvm all religions are treated as equal, and you are allowed to practice as you wish. However, the state religion is that of the <strong><i>Religio Romana</i></strong>.</p>
            <p>The deities of Rome have been long neglected and their once bountiful altars left barren. The time has come to change that. The world is now becoming reacquainted with the ancestral gods of Rome, and it's now your turn to partake.</p>
    </div>

    <div class="jumbotron" style="background-color:var(--brand-color3); height:100%;">
        <div class="card-deck" style="height:100%;">
            <div class="card has-text-centered" style="background-image: url(/img/pantheon.jpg); background-size: cover; color:white">
                <h1 class="subtitle is-4" style="color:white !important;">Dii Consentes</h1>
                <p style="padding-top:4rem">The twelve most prominent deities worshiped in the Ancient Roman world.</p>
                <?= $this->Html->link('See More', ['action' => 'diiConsentes'], ['class' => 'button is-normal is-link is-primary', 'style' => 'width:75%;margin:auto; margin-bottom:50%;']) ?>
            </div>
            <div class="card has-text-centered" style="background-image: url(/img/major-minor-gods.jpg); background-size: cover; color:white">
                <h1 class="subtitle is-4" style="color:white !important;">Major and Minor Gods</h1>
                <p style="padding-top:4rem">The gods allotted priests, festivals, and places of reverence within Roman society.</p>
                <?= $this->Html->link('See More', ['action' => 'majorMinorGods'], ['class' => 'button is-normal is-link is-primary', 'style' => 'width:75%;margin:auto; margin-bottom:50%;']) ?>
            </div>
            <div class="card has-text-centered" style="background-image: url(/img/christianity.jpg); background-size: cover; color:white">
                <h1 class="subtitle is-4" style="color:white !important;">Christ, Christianity, and the Nicene Creed</h1>
                <p style="padding-top:4rem;">How a Jewish Preacher from Galilee, executed by Roman authorities, became revered as the Lord, and how Jesus is seen by us.</p>
                <?= $this->Html->link('See More', ['action' => 'christianity'], ['class' => 'button is-normal is-link is-primary', 'style' => 'width:75%;margin:auto; margin-bottom:50%;']) ?>
            </div>
        </div>
    </div>
</section>