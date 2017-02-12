<!-- File: src/Template/Budgets/view.ctp -->
<h1>Budget: <?= h($budget->id_budget) ?></h1>
<p>Usuario: <?= h($budget->username) ?></p>
<p>Origen <?= h($budget->source_address) ?></p>
<p>Destino <?= h($budget->destination_address) ?></p>
<p>Costo: <?= h($budget->cost) ?></p>
<p>Fecha de entrega estimada <?= $budget->delivery_time_estimated->format(DATE_RFC850) ?></p>
