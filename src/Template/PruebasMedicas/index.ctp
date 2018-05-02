<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PruebasMedica[]|\Cake\Collection\CollectionInterface $pruebasMedicas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pruebas Medica'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pruebasMedicas index large-9 medium-8 columns content">
    <h3><?= __('Pruebas Medicas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_visita_medica_fk') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pruebasMedicas as $pruebasMedica): ?>
            <tr>
                <td><?= $this->Number->format($pruebasMedica->id) ?></td>
                <td><?= h($pruebasMedica->nombre) ?></td>
                <td><?= h($pruebasMedica->descripcion) ?></td>
                <td><?= $this->Number->format($pruebasMedica->id_visita_medica_fk) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pruebasMedica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pruebasMedica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pruebasMedica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pruebasMedica->id)]) ?>
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
