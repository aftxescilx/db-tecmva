<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipopreparatorium $tipopreparatorium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tipopreparatoria'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipopreparatoria form content">
            <?= $this->Form->create($tipopreparatorium) ?>
            <fieldset>
                <legend><?= __('Add Tipopreparatorium') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('estatus');
                    echo $this->Form->control('idUsuarioCrea');
                    echo $this->Form->control('fechaCrea');
                    echo $this->Form->control('idUsuarioModifica');
                    echo $this->Form->control('fechaModifica');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
