

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Nombre Apellido</th>
      <th scope="col">mail</th>
      <th scope="col">Admin</th>
      <th scope="col">acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
      <th scope="row"><?= $user->id; ?></th>
      <td><?= $user->username; ?></td>
      <td><?= $user->nombre; ?></td>
      <td><?= $user->email; ?></td>
      <td><?= $user->isAdmin() ? 'SI' : 'NO'; ?></td>
      <td>
        <a href="<?=  base_url('user/delete/'. $user->id ) ;?>" class="btn btn-outline-danger btn-sm">
            <i class="fas fa-trash-alt"></i>
        </a>
      </td>
    </tr>

    <?php endforeach; ?>
    
  </tbody>
</table>

