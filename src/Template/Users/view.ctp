<!-- File: src/Template/Users/view.ctp -->

<h1>Usuario: <?= h($user->username) ?></h1>
<p>Nombre <?= h($user->name) ?></p>
<p>Apellido <?= h($user->lastName) ?></p>
<p>Email: <?= h($user->email) ?></p>
<p>Telefono <?= h($user->phone) ?></p>
<p>Password <?= h($user->password) ?></p>
<p><small>Fecha de nacimiento: <?= $user->bornDate->format(DATE_RFC850) ?></small></p>
