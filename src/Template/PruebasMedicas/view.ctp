<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PruebasMedica $pruebasMedica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pruebas Medica'), ['action' => 'edit', $pruebasMedica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pruebas Medica'), ['action' => 'delete', $pruebasMedica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pruebasMedica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pruebas Medicas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pruebas Medica'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pruebasMedicas view large-9 medium-8 columns content">
    <h3><?= h($pruebasMedica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($pruebasMedica->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($pruebasMedica->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pruebasMedica->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Visita Medica Fk') ?></th>
            <td><?= $this->Number->format($pruebasMedica->id_visita_medica_fk) ?></td>
        </tr>
    </table>
</div>
