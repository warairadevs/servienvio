<!-- File: src/Template/Budgets/edit.ctp -->

<h1>Editar Presupuesto <?= h($budget->id_budget) ?> para el usuario <?= h($budget->username) ?> </h1>
<?php
    echo $this->Form->create($budget);    
    echo $this->Form->input('cost');
    echo $this->Form->input('delivery_time_estimated');
    echo $this->Form->input('source_latitude');
    echo $this->Form->input('source_longitude');
    echo $this->Form->input('destination_latitude');
    echo $this->Form->input('destination_longitude');    
    echo $this->Form->button(__('Guardar Cambios'));
    echo $this->Form->end();
?>
