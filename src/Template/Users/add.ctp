<!-- File: src/Template/Users/add.ctp -->

<h1>Agregar usuario</h1>
<?php
    echo $this->Form->create();
    echo $this->Form->input('username');
    echo $this->Form->input('name');
    echo $this->Form->input('lastName');
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->input('phone');
    echo $this->Form->input('bornDate');
    echo $this->Form->button(__('Guardar Cambios'));
    echo $this->Form->end();
?>
