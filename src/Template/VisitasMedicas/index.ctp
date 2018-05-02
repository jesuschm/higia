<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VisitasMedica[]|\Cake\Collection\CollectionInterface $visitasMedicas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Visitas Medica'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="visitasMedicas index large-9 medium-8 columns content">
    <h3><?= __('Visitas Medicas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_afiliacion_paciente_fk') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_especialidad_fk') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($visitasMedicas as $visitasMedica): ?>
            <tr>
                <td><?= $this->Number->format($visitasMedica->id) ?></td>
                <td><?= h($visitasMedica->fecha) ?></td>
                <td><?= $this->Number->format($visitasMedica->num_afiliacion_paciente_fk) ?></td>
                <td><?= $this->Number->format($visitasMedica->id_especialidad_fk) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $visitasMedica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visitasMedica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visitasMedica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitasMedica->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
