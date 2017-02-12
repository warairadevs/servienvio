<!-- File: src/Template/Address/add.ctp -->

<h1>Agregar Dirección</h1>
<?php
    echo $this->Form->create();
    echo $this->Form->input('username', array('options' => $users));
    echo $this->Form->input('address_description');
    echo $this->Form->input('latitude');
    echo $this->Form->input('longitude');
    echo $this->Form->button(__('Guardar Cambios'));
    echo $this->Form->end();
?>
