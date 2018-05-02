<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PruebasMedica $pruebasMedica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pruebasMedica->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pruebasMedica->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pruebas Medicas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pruebasMedicas form large-9 medium-8 columns content">
    <?= $this->Form->create($pruebasMedica) ?>
    <fieldset>
        <legend><?= __('Edit Pruebas Medica') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('id_visita_medica_fk');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
