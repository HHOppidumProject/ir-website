<?php
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
    <div class="title">Our Community</div>
    <div class="container">
        <p class="style1">What is Imperivm Romanvm</p>
        <p class="style2">
            Imperivm Romanvm is a new, young Roman Community<br class="mobile-hide" />
            With a plan to build a new home for all New Romans.
        </p>
        <p class="style3">Founded on October 20th 2021, Imperivm Romanvm is a community which strives to promote the religious and cultural traditions of the ancient, classsical and medieval Roman Empire; from its earliest founding under the monarchy to the fall of Constantinople in 1453. Our community believe that Roman customs, identity, and virtues are the key to living better lives.</p>
        <a class="button is-primary is-large is-fullwidth">Learn More</a>
    </div>
</section>

<section id="highlights" class="wrapper style3">
    <div class="title">Our Causes</div>
    <div class="container">
        <div class="row aln-center">
            <div class="col-4 col-12-medium">
                <section class="highlight">
                    <?= $this->Html->link(
                        $this->Html->image('dii-consentes.jpg'),
                        [],
                        [
                            'class' => 'image featured',
                            'escape' => false
                        ]
                    ) ?>
                    <h3><a href="#">Roman Religion</a></h3>
                    <p>The Roman polytheistic religion is a key source of why we do what we do and is integrally tied to all of our endeavors as a community. We as a community have promoted tolerance and accepted Abrahamics, Atheists, and Pagans alike.</p>
                    <?= $this->Html->link('Roman Religion Portal »', [], ['class' => "button is-primary is-small"]) ?>
                </section>
            </div>
            <div class="col-4 col-12-medium">
                <section class="highlight">
                    <?= $this->Html->link(
                        $this->Html->image('romanCulture.jpg'),
                        [],
                        [
                            'class' => 'image featured',
                            'escape' => false
                        ]
                    ) ?>
                    <h3><a href="#">Roman Culture</a></h3>
                    <p>Imperivm Romanvm strives to resurrect the cultural traditions and identity of the Romans from the foundations attributed to Romulus to the final days in the epoch of Byzantium.</p>
                    <?= $this->Html->link('Explore Roman Culture »', [], ['class' => "button is-primary is-small"]) ?>
                </section>
            </div>
            <div class="col-4 col-12-medium">
                <section class="highlight">
                    <?= $this->Html->link(
                        $this->Html->image('romanitas.jpg'),
                        [],
                        [
                            'class' => 'image featured',
                            'escape' => false
                        ]
                    ) ?>
                    <h3><a href="#">Romanitas and You</a></h3>
                    <p>There are many paths to living life as a modern Roman, but all of them require action and an openness to fellowship. It is a rewarding experience which enriches the ethical and spiritual life of individuals. A means of not only adjusting to the problems of the modern world, but offering an alternative to many of today's trends and norms.</p>
                    <?= $this->Html->link('Learn More »', [], ['class' => "button is-primary is-small"]) ?>
                </section>
            </div>
        </div>
    </div>
</section>