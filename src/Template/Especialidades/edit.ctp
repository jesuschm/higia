<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especialidade $especialidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $especialidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $especialidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Especialidades'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="especialidades form large-9 medium-8 columns content">
    <?= $this->Form->create($especialidade) ?>
    <fieldset>
        <legend><?= __('Edit Especialidade') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
