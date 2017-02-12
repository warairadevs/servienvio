<!-- File: src/Template/Budgets/add.ctp -->

<h1>Agregar Presupuesto</h1>
<?php
    echo $this->Form->create();
    echo $this->Form->input('username', array('options' => $users));
    echo $this->Form->input('cost');
    echo $this->Form->input('delivery_time_estimated');
    echo $this->Form->input('source_latitude');
    echo $this->Form->input('source_longitude');
    echo $this->Form->input('destination_latitude');
    echo $this->Form->input('destination_longitude');
    echo $this->Form->button(__('Guardar Cambios'));
    echo $this->Form->end();
?>
