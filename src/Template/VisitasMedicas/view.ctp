<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VisitasMedica $visitasMedica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Visitas Medica'), ['action' => 'edit', $visitasMedica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Visitas Medica'), ['action' => 'delete', $visitasMedica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitasMedica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Visitas Medicas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visitas Medica'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="visitasMedicas view large-9 medium-8 columns content">
    <h3><?= h($visitasMedica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($visitasMedica->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Afiliacion Paciente Fk') ?></th>
            <td><?= $this->Number->format($visitasMedica->num_afiliacion_paciente_fk) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Especialidad Fk') ?></th>
            <td><?= $this->Number->format($visitasMedica->id_especialidad_fk) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($visitasMedica->fecha) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Razon') ?></h4>
        <?= $this->Text->autoParagraph(h($visitasMedica->razon)); ?>
    </div>
</div>
