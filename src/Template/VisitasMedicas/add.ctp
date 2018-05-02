<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VisitasMedica $visitasMedica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Visitas Medicas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="visitasMedicas form large-9 medium-8 columns content">
    <?= $this->Form->create($visitasMedica) ?>
    <fieldset>
        <legend><?= __('Add Visitas Medica') ?></legend>
        <?php
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('razon');
            echo $this->Form->control('num_afiliacion_paciente_fk');
            echo $this->Form->control('id_especialidad_fk');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
