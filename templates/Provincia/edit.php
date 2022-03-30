<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provincium $provincium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $provincium->PROVINCIAID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $provincium->PROVINCIAID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Provincia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="provincia form content">
            <?= $this->Form->create($provincium) ?>
            <fieldset>
                <legend><?= __('Edit Provincium') ?></legend>
                <?php
                    echo $this->Form->control('PROVINCENAME');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
