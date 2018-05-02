<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente $paciente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paciente'), ['action' => 'edit', $paciente->num_afiliacion]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paciente'), ['action' => 'delete', $paciente->num_afiliacion], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->num_afiliacion)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientes view large-9 medium-8 columns content">
    <h3><?= h($paciente->num_afiliacion) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($paciente->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($paciente->apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Documento') ?></th>
            <td><?= h($paciente->id_documento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Documento') ?></th>
            <td><?= h($paciente->tipo_documento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($paciente->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Afiliacion') ?></th>
            <td><?= $this->Number->format($paciente->num_afiliacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($paciente->fecha_nacimiento) ?></td>
        </tr>
    </table>
</div>
