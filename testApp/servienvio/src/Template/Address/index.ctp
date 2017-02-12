<!-- File: src/Template/Address/index.ctp -->

<h1>Direcciones</h1>
<?= $this->Html->link('Agregar Direccción', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Usuario</th>
        <th>Dirección</th>
        <th>Descripción</th>
        <th>Latitud</th>
        <th>Longitud</th>
    </tr>

    <!-- Here is where we iterate through our $address query object, printing out address info -->

    <?php foreach ($address as $addres): ?>
    <tr>              
        <td><?= $addres->username ?></td>
        <td><?= $this->Html->link($addres->address_description, ['action' => 'view', $addres->id_address]) ?></td>
        <td><?= $addres->latitude ?></td>
        <td><?= $addres->longitude ?></td>
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit', $addres->id_address]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
