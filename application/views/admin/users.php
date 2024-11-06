<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Users</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            users
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div>
    <div class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">List Akun</h5>
                    <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#AdduserModal">
                        Tambah User
                    </button>
                </div> <!-- /.card-header -->
                <div class="card-body"> <!--begin::Row-->
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nip</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php $no= 1;
                            foreach ($data['showusers'] as $user): ?> 
                            <tbody>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?=htmlspecialchars($user['name']) ?></td>
                                    <td><?=htmlspecialchars($user['email']) ?></td>
                                    <td><?=htmlspecialchars($user['nip']) ?></td>
                                    <td>
                                        <?php
                                            // Mapping role_id ke nama role
                                            switch ($user['role_id']) {
                                                case 1:
                                                    echo 'Super Admin';
                                                    break;
                                                case 2:
                                                    echo 'Admin';
                                                    break;
                                                default:
                                                    echo 'User';
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?= BASE_URL ?>/users/edit/<?= $user['id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= BASE_URL ?>/users/delete/<?= $user['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus pengguna ini?')">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div> <!-- ./card-body -->
                </div> <!-- /.card -->
            </div> <!-- /.col -->
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="AdduserModal" tabindex="-1" aria-labelledby="AddUser" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="AddUser">Tambah User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL ?>/users/adduser" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Nama</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Nama">
            <?php if (isset($errors['username'])): ?>
                <p style="color:red;"><?= $errors['username'] ?></p>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            <?php if (isset($errors['email'])): ?>
                <p style="color:red;"><?= $errors['email'] ?></p>
            <?php endif; ?>
        </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="inputPassword5" class="form-control" aria-describedby="Password">
                <?php if (isset($errors['password'])): ?>
                <p style="color:red;"><?= $errors['password'] ?></p>
            <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="tel" name="nip" id="nip" class="form-control" placeholder="NIP">
                <?php if (isset($errors['nip'])): ?>
                <p style="color:red;"><?= $errors['nip'] ?></p>
            <?php endif; ?>
            </div>
            <div class="mb-3">
            <label for="nip" class="form-label">Role</label>
            <select class="form-select" aria-label="Select Role" name="role">
              <option selected>Select Role</option>
              <?php foreach($data['showroles'] as $role): ?>
              <option value="<?=$role['id']?>?>"><?=$role['role_name']?></option>
              <?php endforeach;?>
            </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
    </div>
  </div>
</div>
</main>