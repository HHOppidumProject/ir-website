<?php $this->assign('title', 'Login'); ?>
<section id="highlights" class="wrapper style3">
    <h2 class="title is-2">Login</h2>
    <?php echo $this->Form->create($civis, ['id' => 'cives']); ?>
    <div class="has-text-centered">
        <h4 class="subtitle is-4">Not a citizen? <?= $this->Html->link("Sign up here!", ['action' => 'signup']) ?></h4>


        <div class="form-group">
            <?= $this->Form->label('Email') ?>
            <?= $this->Form->email('EMAIL', ['class' => 'is-normal has-text-centered']); ?>
        </div>

        <div class="form-group">
            <?= $this->Form->label('Password') ?>
            <?= $this->Form->password('PASSWORDHASH', ['class' => 'is-normal has-text-centered']); ?>
        </div>
        <?php echo $this->Form->button('submit', ['type' => 'submit', 'class' => 'btn btn-primary', 'style' => 'padding: 1em; margin: 1em;']); ?>
        <?php echo $notFound ? '<p>Account not found</p>' : null ?>
    </div>
    <?= $this->Form->end(); ?>
</section>