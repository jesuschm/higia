<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especialidade $especialidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Especialidade'), ['action' => 'edit', $especialidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Especialidade'), ['action' => 'delete', $especialidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $especialidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Especialidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Especialidade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="especialidades view large-9 medium-8 columns content">
    <h3><?= h($especialidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($especialidade->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($especialidade->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($especialidade->id) ?></td>
        </tr>
    </table>
</div>
