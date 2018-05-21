<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente[]|\Cake\Collection\CollectionInterface $pacientes
 */
?>
<!--<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nuevo Paciente'), ['action' => 'add']) ?></li>
    </ul>
</nav>-->
<div class="pacientes index large-10 medium-9 columns content">
    <h3><?= __('Pacientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('num_afiliacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_documento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_documento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_nacimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $paciente): ?>
            <tr>
                <td><?= $this->Number->format($paciente->num_afiliacion) ?></td>
                <td><?= h($paciente->nombre) ?></td>
                <td><?= h($paciente->apellidos) ?></td>
                <td><?= h($paciente->id_documento) ?></td>
                <td><?= h($paciente->tipo_documento) ?></td>
                <td><?= h($paciente->fecha_nacimiento) ?></td>
                <td><?= h($paciente->sexo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paciente->num_afiliacion]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paciente->num_afiliacion]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paciente->num_afiliacion], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->num_afiliacion)]) ?>
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
