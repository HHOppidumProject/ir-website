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
            <?= $this->Html->link(__('Edit Provincium'), ['action' => 'edit', $provincium->PROVINCIAID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Provincium'), ['action' => 'delete', $provincium->PROVINCIAID], ['confirm' => __('Are you sure you want to delete # {0}?', $provincium->PROVINCIAID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Provincia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Provincium'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="provincia view content">
            <h3><?= h($provincium->PROVINCIAID) ?></h3>
            <table>
                <tr>
                    <th><?= __('PROVINCENAME') ?></th>
                    <td><?= h($provincium->PROVINCENAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('PROVINCIAID') ?></th>
                    <td><?= $this->Number->format($provincium->PROVINCIAID) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related State To Provincia') ?></h4>
                <?php if (!empty($provincium->state_to_provincia)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('STATEID') ?></th>
                            <th><?= __('COUNTRY') ?></th>
                            <th><?= __('STATENAME') ?></th>
                            <th><?= __('PROVINCIA') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($provincium->state_to_provincia as $stateToProvincia) : ?>
                        <tr>
                            <td><?= h($stateToProvincia->STATEID) ?></td>
                            <td><?= h($stateToProvincia->COUNTRY) ?></td>
                            <td><?= h($stateToProvincia->STATENAME) ?></td>
                            <td><?= h($stateToProvincia->PROVINCIA) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'StateToProvincia', 'action' => 'view', $stateToProvincia->STATEID]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'StateToProvincia', 'action' => 'edit', $stateToProvincia->STATEID]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StateToProvincia', 'action' => 'delete', $stateToProvincia->STATEID], ['confirm' => __('Are you sure you want to delete # {0}?', $stateToProvincia->STATEID)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
