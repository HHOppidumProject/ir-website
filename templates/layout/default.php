<?php

/**
 * @var Laminas\View\Renderer\PhpRenderer $this
 */

?>
<!DOCTYPE html>
<html lang="en" style="max-width:100vw !important; overflow-x:hidden;">

<head>
    <meta charset="utf-8">
    <title>The Imperivm Romanvm - <?= h($this->fetch('title')) ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/vnd.microsoft/icon" href="/favicon.ico" />
    <?= $this->Html->css(["https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css", "https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css", 'main.css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css', 'style.css']) ?>
    <?= $this->Html->script(['https://code.jquery.com/jquery-3.5.1.min.js', 'https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/js/bulma-carousel.min.js']) ?>
    <?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')); ?>

</head>

<body style="max-width:100vw !important;">

    <section id="header" class="wrapper">

        <!-- Logo -->
        <div id="logo">
            <h1><?= $this->Html->link('Imperivm Romanvm', ['controller' => 'Pages', 'action' => 'display']) ?></h1>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'display']) ?></li>
                <li><?= $this->Html->link('Forum Romanum', 'https://forum.imperivm-romanvm.com/') ?></li>
                <li><?= $this->Html->link('Wiki', 'https://wiki.imperivm-romanvm.com/') ?></li>
                <li class="current"><?= $this->Html->link('Donate', ['controller' => 'Pages', 'action' => 'donate']) ?></li>
                <li>
                    <?= $this->Html->link('Religion', ['controller' => 'religion']) ?>
                    <ul>
                        <li>
                            <?= $this->Html->link('Dii Consentes', ['controller' => 'religion', 'action' => 'diiConsentes']) ?>
                            <ul>
                                <li><?= $this->Html->link('Jupiter', ['controller' => 'religion', 'action' => 'jupiter']) ?></li>
                                <li><?= $this->Html->link('Juno', ['controller' => 'religion', 'action' => 'juno']) ?></li>
                                <li><?= $this->Html->link('Neptune', ['controller' => 'religion', 'action' => 'neptune']) ?></li>
                                <li><?= $this->Html->link('Minerva', ['controller' => 'religion', 'action' => 'minerva']) ?></li>
                                <li><?= $this->Html->link('Mars', ['controller' => 'religion', 'action' => 'mars']) ?></li>
                                <li><?= $this->Html->link('Venus', ['controller' => 'religion', 'action' => 'venus']) ?></li>
                                <li><?= $this->Html->link('Apollo', ['controller' => 'religion', 'action' => 'apollo']) ?></li>
                                <li><?= $this->Html->link('Diana', ['controller' => 'religion', 'action' => 'diana']) ?></li>
                                <li><?= $this->Html->link('Vulcan', ['controller' => 'religion', 'action' => 'vulcan']) ?></li>
                                <li><?= $this->Html->link('Vesta', ['controller' => 'religion', 'action' => 'vesta']) ?></li>
                                <li><?= $this->Html->link('Mercury', ['controller' => 'religion', 'action' => 'mercury']) ?></li>
                                <li><?= $this->Html->link('Ceres', ['controller' => 'religion', 'action' => 'ceres']) ?></li>
                            </ul>
                        </li>
                        <li><?= $this->Html->link('Minor Gods', ['controller' => 'religion', 'action' => 'majorMinorGods']) ?></li>
                        <li><?= $this->Html->link('Christianity', ['controller' => 'religion', 'action' => 'christianity']) ?></li>
                    </ul>
                </li>
                <li><?= $this->Html->link('Album Civium', ['controller' => 'Cives', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('FAQ', ['controller' => 'Pages', 'action' => 'faq']) ?></li>
                <?php if (isset($isLoggedIn) && $isLoggedIn) { ?>
                    <li>
                        <?= $this->Html->link('Account', ['controller' => 'Cives', 'action' => 'view', $loggedInCivis->CIVISID]) ?>
                        <ul>
                            <li><?= $this->Html->link('Edit Profile', ['controller' => 'Cives', 'action' => 'edit', $loggedInCivis->CIVISID]) ?></li>
                            <li><?= $this->Html->link('Sign Out', ['controller' => 'Cives', 'action' => 'logout']) ?></li>
                            <li><?= $this->Html->link('Account FAQ', ['controller' => 'Cives', 'action' => 'faq']) ?></li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li>
                        <?= $this->Html->link('Log in / Sign Up', ['controller' => 'Cives', 'action' => 'login']) ?>
                        <ul>
                            <li><?= $this->Html->link('Log in', ['controller' => 'Cives', 'action' => 'login']) ?></li>
                            <li><?= $this->Html->link('Sign Up', ['controller' => 'Cives', 'action' => 'signup']) ?></li>
                            <li><?= $this->Html->link('Sign Up FAQ', ['controller' => 'Cives', 'action' => 'faq']) ?></li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </nav>

    </section>

    <!-- <section id="main" class="wrapper"> -->
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <!-- </section> -->

    <!-- Footer -->
    <section id="footer" class="wrapper">
        <div class="title">The Rest Of It</div>
        <div class="container">
            <header class="style1">
                <h2>Interested in Becoming a Citizen?</h2>
                <p>
                    Join today, click the sign up button at the top of the page!<br />
                    Or contact us for a custom request using email.
                </p>
            </header>
            <div class="row">
                <div class="col-6 col-12-medium">

                    <!-- Contact Form -->
                    <section>
                        <form method="post" action="#">
                            <div class="row gtr-50">
                                <div class="col-6 col-12-small">
                                    <input type="text" name="name" id="contact-name" placeholder="Name" />
                                </div>
                                <div class="col-6 col-12-small">
                                    <input type="text" name="email" id="contact-email" placeholder="Email" />
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" class="style1" value="Send" /></li>
                                        <li><input type="reset" class="style2" value="Reset" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </section>

                </div>
                <div class="col-6 col-12-medium">

                    <!-- Contact -->
                    <section class="feature-list small">
                        <div class="row">
                            <div class="col-6 col-12-small">
                                <section>
                                    <h3 class="icon solid fa-coins">Pay Your Citizenship Tax</h3>
                                    <p>
                                        To run for any office you must pay your citizenship tax.<br />
                                        Have you paid yours?
                                    </p>
                                </section>
                            </div>
                            <div class="col-6 col-12-small">
                                <section>
                                    <h3 class="icon solid fa-comment">Social</h3>
                                    <p>
                                        <a href="https://www.instagram.com/officialromanvm">@imperivmromanum</a><br />
                                        <a href="https://www.reddit.com/r/RomaTertia/">r/RomaTertia</a><br />
                                        <a href="https://discord.gg/TPCs2FKnKA">Imperivm Romanvm Discord Server</a>
                                    </p>
                                </section>
                            </div>
                            <div class="col-6 col-12-small">
                                <section>
                                    <h3 class="icon solid fa-envelope">Email</h3>
                                    <p>
                                        <a href="mailto:Perusinus@gmail.com">Perusinus@gmail.com</a>
                                    </p>
                                    <p>
                                        <a href="mailto:senatores@imperivm-romanvm.com">senatores@imperivm-romanvm.com</a>
                                    </p>
                                </section>
                            </div>
                            <!-- <div class="col-6 col-12-small">
                                <section>
                                    <h3 class="icon solid fa-phone">Phone</h3>
                                    <p>
                                        (000) 555-0000
                                    </p>
                                </section>
                            </div> -->
                        </div>
                    </section>

                </div>
            </div>
            <div id="copyright">
                <ul>
                    <li>&copy; <?= date('Y') ?> <a href="/">Imperivm Romanvm</a>.</li>
                    <li><a href="https://www.instagram.com/officialromanvm"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.reddit.com/r/RomaTertia/"><i class="fab fa-reddit"></i></a></li>
                    <li><a href="https://twitter.com/OfficialRomanvm"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://discord.gg/TPCs2FKnKA"><i class="fab fa-discord"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

    </div>

</body>

<?= $this->Html->script(['jquery.dropotron.min.js', 'browser.min.js', 'breakpoints.min.js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js', 'layoutUtils.js', 'layout.js']) ?>

</html>