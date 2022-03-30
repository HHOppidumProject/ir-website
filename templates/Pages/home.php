<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', 'Home')
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
?>
<section id="intro" class="wrapper style-1">
    <div class="title" style="color: white;">Our Community</div>
    <div class="container">
        <p class="style1" style="color: white;">What is Imperivm Romanvm</p>
        <p class="style2" style="overflow-wrap: break-word; width:auto;">
            Imperivm Romanvm is a new, young Roman Community<br class="mobile-hide" />
            With a plan to build a new home for all New Romans.
        </p>
        <p class="style3" style="color: white;">Founded on October 20th 2021, Imperivm Romanvm is a community which strives to promote the religious and cultural traditions of the ancient, classsical and medieval Roman Empire; from its earliest founding under the monarchy to the fall of Constantinople in 1453. Our community believe that Roman customs, identity, and virtues are the key to living better lives.</p>
        <div class="has-text-centered">
            <a class="button is-primary" id="learnMorePrimary">Learn More</a>
        </div>
    </div>
</section>

<section id="highlights" class="wrapper style3">
    <div class="title">Our Causes</div>
    <div class="row aln-center">
        <div class="card-deck">
            <div class="card" id="card">
                <div class="card-image">
                    <figure class="image">
                        <?=
                        $this->Html->image(
                            'dii-consentes.jpg',
                            ['style' => 'height: initial', 'id' => 'cardImageFeatured']
                        );
                        ?>
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <p style="font-size: 0.4em"><?= $this->Html->link('Maierstrom.org', 'https://maierstorm.org/Vampire/images/f/ff/Alter_of_the_Twelve_Gods.jpg'); ?></p>
                    </div>
                    <header class="card-header">
                        <p class="card-header-title">
                            Roman Religion
                        </p>
                    </header>

                    <div class="content">
                        The Roman polytheistic religion is a key source of why we do what we do and is integrally tied to all of our endeavors as a community. We as a community have promoted tolerance and accepted Abrahamics, Atheists, and Pagans alike.
                    </div>
                    <footer><?= $this->Html->link('Roman Religion Portal »', ['controller' => 'religion', 'action' => 'index'], ['class' => "button is-primary is-small is-fullwidth"]) ?></footer>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <figure class="image">
                        <?= $this->Html->image(
                            'romanCulture.jpg',
                            ['style' => 'height: initial', 'id' => 'cardImageFeatured1']
                        ) ?>
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <p style="font-size: 0.4em"><?= $this->Html->link('wikimedia.org', 'https://commons.wikimedia.org/wiki/File:Pompeii_family_feast_painting_Naples.jpg'); ?> </p>
                    </div>
                    <header class="card-header">
                        <p class="card-header-title">
                            Roman Culture
                        </p>
                    </header>

                    <div class="content">
                        Imperivm Romanvm strives to resurrect the cultural traditions and identity of the Romans from the foundations attributed to Romulus to the final days in the epoch of Byzantium.
                    </div>
                    <footer>
                        <?= $this->Html->link('Explore Roman Culture »', [], ['class' => "button is-primary is-small is-fullwidth"]) ?>
                    </footer>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <figure class="image">
                        <?= $this->Html->image(
                            'romanitas.jpg',
                            ['style' => 'height: initial', 'id' => 'cardImageFeatured2']
                        ) ?>
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <p style="font-size: 0.4em"> <?= $this->Html->link('wikimedia.org', 'https://commons.wikimedia.org/wiki/File:Cicer%C3%B3n_denuncia_a_Catilina,_por_Cesare_Maccari.jpg'); ?> </p>
                    </div>
                    <header class="card-header">
                        <p class="card-header-title">
                            Romanitas and You
                        </p>
                    </header>

                    <div class="content">
                        There are many paths to living life as a modern Roman, but all of them require action and an openness to fellowship. It is a rewarding experience which enriches the ethical and spiritual life of individuals. A means of not only adjusting to the problems of the modern world, but offering an alternative to many of today's trends and norms.
                    </div>
                    <footer><?= $this->Html->link('Learn About Romanitas »', [], ['class' => "button is-primary is-small is-fullwidth"]) ?></footer>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(function() {

        var timer_id;

        $(window).resize(function() {

            clearTimeout(timer_id);



            timer_id = setTimeout(function() {

                width = $('#card').width() + "px";
                $('#cardImageFeatured').height('auto');
                $('#cardImageFeatured1').height('auto');
                $('#cardImageFeatured2').height('auto');

                $('#cardImageFeatured').width(width);
                $('#cardImageFeatured').height(width);
                $('#cardImageFeatured1').width(width);
                $('#cardImageFeatured1').height(width);
                $('#cardImageFeatured2').width(width);
                $('#cardImageFeatured2').height(width);
            }, 300);
        });
    });
    $('document').ready(() => {
        width = $('#card').width() + "px";
        $('#cardImageFeatured').width(width);
        $('#cardImageFeatured').height(width);
        $('#cardImageFeatured1').width(width);
        $('#cardImageFeatured1').height(width);
        $('#cardImageFeatured2').width(width);
        $('#cardImageFeatured2').height(width);
    })
</script>