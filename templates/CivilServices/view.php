<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CivilService $civilService
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Civil Service'), ['action' => 'edit', $civilService->SERVICEID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Civil Service'), ['action' => 'delete', $civilService->SERVICEID], ['confirm' => __('Are you sure you want to delete # {0}?', $civilService->SERVICEID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Civil Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Civil Service'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="civilServices view content">
            <h3><?= h($civilService->SERVICEID) ?></h3>
            <table>
                <tr>
                    <th><?= __('SERVICENAME') ?></th>
                    <td><?= h($civilService->SERVICENAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('SERVICEID') ?></th>
                    <td><?= $this->Number->format($civilService->SERVICEID) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cives') ?></h4>
                <?php if (!empty($civilService->cives)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('CIVISID') ?></th>
                            <th><?= __('PRAENOMEN') ?></th>
                            <th><?= __('NOMEN') ?></th>
                            <th><?= __('COGNOMEN') ?></th>
                            <th><?= __('ISPATRICIAN') ?></th>
                            <th><?= __('PASSWORDHASH') ?></th>
                            <th><?= __('PREFFEREDWORDGENDER') ?></th>
                            <th><?= __('GENDER') ?></th>
                            <th><?= __('EMAIL') ?></th>
                            <th><?= __('DOB') ?></th>
                            <th><?= __('DATEJOINED') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($civilService->cives as $cives) : ?>
                        <tr>
                            <td><?= h($cives->CIVISID) ?></td>
                            <td><?= h($cives->PRAENOMEN) ?></td>
                            <td><?= h($cives->NOMEN) ?></td>
                            <td><?= h($cives->COGNOMEN) ?></td>
                            <td><?= h($cives->ISPATRICIAN) ?></td>
                            <td><?= h($cives->PASSWORDHASH) ?></td>
                            <td><?= h($cives->PREFFEREDWORDGENDER) ?></td>
                            <td><?= h($cives->GENDER) ?></td>
                            <td><?= h($cives->EMAIL) ?></td>
                            <td><?= h($cives->DOB) ?></td>
                            <td><?= h($cives->DATEJOINED) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cives', 'action' => 'view', $cives->CIVISID]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cives', 'action' => 'edit', $cives->CIVISID]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cives', 'action' => 'delete', $cives->CIVISID], ['confirm' => __('Are you sure you want to delete # {0}?', $cives->CIVISID)]) ?>
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
