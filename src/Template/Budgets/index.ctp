<!-- File: src/Template/Budgets/index.ctp -->

<h1>Presupuestos</h1>
<?= $this->Html->link('Agregar Presupuesto', ['action' => 'add']) ?>
<table>   
        <th>Presupuesto</th>
        <th>Usuario</th>
        <th>Latitud Origen</th>
        <th>Longitud Destino</th>
        <th>Latitud Destino</th>
        <th>Longitud Destino</th>
        <th>Costo</th>
        <th>Fecha de entrega estimada</th>
    </tr>

    <!-- Here is where we iterate through our $users query object, printing out user info -->

    <?php foreach ($budgets as $budget): ?>
    <tr>       
        <td>
            <?= $this->Html->link($budget->id_budget, ['action' => 'view', $budget->id_budget]) ?>
        </td>
        <td><?= $budget->username ?></td>
        <td><?= $budget->source_latitude ?></td>
        <td><?= $budget->source_longitude ?></td>
        <td><?= $budget->destination_latitude ?></td>
        <td><?= $budget->destination_longitude ?></td>
        <td><?= $budget->cost ?></td>
        <td>
            <?= $budget->delivery_time_estimated->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit', $budget->id_budget]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
