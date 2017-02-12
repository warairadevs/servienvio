<!-- File: src/Template/Users/edit.ctp -->

<h1>Editar usuario <?= h($user->username) ?></h1>

<?php
    echo $this->Form->create($user);   
    echo $this->Form->input('name');
    echo $this->Form->input('lastName');
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->input('phone');
    echo $this->Form->input('bornDate');
    echo $this->Form->input('active');
    echo $this->Form->button(__('Guardar Cambios'));
    echo $this->Form->end();
?>
