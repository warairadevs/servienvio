<!-- File: src/Template/Users/edit.ctp -->

<h1>Editar Dirección para el usuario <?= h($addres->username) ?> </h1>
<?php
    echo $this->Form->create($addres);    
    echo $this->Form->input('address_description');
    echo $this->Form->input('latitude');
    echo $this->Form->input('longitude');    
    echo $this->Form->button(__('Guardar Cambios'));
    echo $this->Form->end();
?>
