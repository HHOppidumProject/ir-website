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
    <link rel="shortcut icon" type="image/vnd.microsoft/icon" href="favicon.ico" />
    <?= $this->Html->css(["https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css", "https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css", 'main.css', 'bootstrap.min.css', 'style.css']) ?>
    <?= $this->Html->script(['jquery-3.5.1.min.js', 'https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/js/bulma-carousel.min.js']) ?>

</head>

<body style="max-width:100vw !important;">

    <section id="header" class="wrapper">

        <!-- Logo -->
        <div id="logo">
            <h1><?= $this->html->link('Imperivm Romanvm', ['controller' => 'Pages', 'action' => 'display']) ?></h1>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><?= $this->html->link('Home', ['controller' => 'Pages', 'action' => 'display']) ?></li>
                <li><?= $this->html->link('Forum Romanum') ?></li>
                <li class="current"><?= $this->html->link('Donate', ['controller' => 'Pages', 'action' => 'donate']) ?></li>
                <li>
                    <?= $this->html->link('Religion') ?>
                    <ul>
                        <li>
                            <?= $this->html->link('Dii Consentes') ?>
                            <ul>
                                <?= $this->html->link('Jupiter')    ?>
                                <?= $this->html->link('Juno')       ?>
                                <?= $this->html->link('Neptune')    ?>
                                <?= $this->html->link('Minerva')    ?>
                                <?= $this->html->link('Mars')       ?>
                                <?= $this->html->link('Venus')      ?>
                                <?= $this->html->link('Apollo')     ?>
                                <?= $this->html->link('Diana')      ?>
                                <?= $this->html->link('Vulcan')     ?>
                                <?= $this->html->link('Vesta')      ?>
                                <?= $this->html->link('Mercury')    ?>
                                <?= $this->html->link('Ceres')      ?>
                            </ul>
                        </li>
                        <li><?= $this->html->link('Major and Minor Gods') ?></li>
                        <li><?= $this->html->link('Christianity') ?></li>
                    </ul>
                </li>
                <li><?= $this->html->link('Album Civium', ['controller' => 'Cives', 'action' => 'index']) ?></li>
                <li><?= $this->html->link('FAQ', ['controller' => 'Pages', 'action' => 'faq']) ?></li>
                <?php if (isset($isLoggedIn) && $isLoggedIn) { ?>
                    <li>
                        <?= $this->html->link('Account',) ?>
                        <?php //['id' => $id] 
                        ?>
                    </li>
                <?php } else { ?>
                    <li>
                        <?= $this->html->link('Log in / Sign Up',) ?>
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
                                        <a href="https://www.instagram.com/imperivmromanum">@imperivmromanum</a><br />
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
                                        <a href="mailto:imperivm.romanvm.media@gmail.com">imperivm.romanvm.media@gmail.com</a>
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
                    <li><a href="https://www.instagram.com/imperivmromanum"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.reddit.com/r/RomaTertia/"><i class="fab fa-reddit"></i></a></li>
                    <li><a href="https://twitter.com/ImperivmRomanum"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://discord.gg/TPCs2FKnKA"><i class="fab fa-discord"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

    </div>

</body>

<?= $this->Html->script(['jquery.dropotron.min.js', 'browser.min.js', 'breakpoints.min.js', 'bootstrap.min.js', 'layoutUtils.js', 'layout.js']) ?>

</html>