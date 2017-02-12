<!-- File: src/Template/Users/index.ctp -->

<h1>Usuarios</h1>
<?= $this->Html->link('Agregar Usuario', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Usuario</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Fecha de Nacimiento</th>
    </tr>

    <!-- Here is where we iterate through our $users query object, printing out user info -->

    <?php foreach ($users as $user): ?>
    <tr>       
        <td>
            <?= $this->Html->link($user->username, ['action' => 'view', $user->username]) ?>
        </td>
        <td><?= $user->name ?></td>
        <td><?= $user->lastName ?></td>
        <td><?= $user->email ?></td>
        <td><?= $user->phone ?></td>        
        <td>
            <?= $user->bornDate->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit', $user->username]) ?>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $user->username],
                ['confirm' => 'Are you sure?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
