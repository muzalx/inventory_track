<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Stok Barang</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Stok Barang
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div>
    <div class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-primary" role="alert">
                <i class="bi bi-info-circle-fill"></i> Saat ini belum ada permintaan barang Keluar
            </div>
            <div class="card mb-4">
            <div class="card-header">
                    <h5 class="card-title">List Barang</h5>
                    <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#AdditemModal">
                        Tambah Barang
                    </button>
                </div> <!-- /.card-header -->
                <div class="card-body"> <!--begin::Row-->
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tipe</th>
                                    <th>Merk</th>
                                    <th>Satuan</th>
                                    <th>quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (empty($data['showitems'])): ?>
                                    <tr>
                                        <td colspan="6" class="text-center">Data not found</td>
                                    </tr>
                                <?php else:
                                    $no = 1;
                                    foreach ($data['showitems'] as $key): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= htmlspecialchars($key['asset_name']) ?></td>
                                        <td><?= htmlspecialchars($key['asset_type']) ?></td>
                                        <td><?= htmlspecialchars($key['brand']) ?></td>
                                        <td><?= htmlspecialchars($key['unit']) ?></td>
                                        <td><?= htmlspecialchars($key['quantity']) ?></td>
                                    </tr>
                                    <?php endforeach;
                                endif; ?>
                            </tbody>
                        </table>
                    </div> <!-- ./card-body -->
                </div> <!-- /.card -->
            </div> <!-- /.col -->
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="AdditemModal" tabindex="-1" aria-labelledby="AddItem" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="AddItem">Tambah Barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL ?>/items/additem" method="POST">
        <div class="mb-3">
            <label for="asset_name" class="form-label">Nama Barang</label>
            <input type="text" name="asset_name" class="form-control" id="asset_name">
        </div>
        <div class="mb-3">
            <label for="asset_type" class="form-label">Tipe barang</label>
            <input type="text" name="asset_type" class="form-control" id="asset_type" placeholder="Elektronik, ATK, Umum dll.">
        </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Merk</label>
                <input type="text" name="brand" id="brand" class="form-control" aria-describedby="brand" placeholder="ASUS, Bindex, Joyko dll.">
            </div>
            <div class="mb-3">
                <label for="unit" class="form-label">Satuan</label>
                <select class="form-select" aria-label="unit" name="unit">
                  <option selected>Pilih satuan</option>
                  <option value="pcs">Pcs</option>
                  <option value="dus">Dus</option>
                  <option value="unit">Unit</option>
                  <option value="lembar">Lembar</option>
                  <option value="rim">Rim</option>
                  <option value="set">Set</option>
                  <option value="roll">Roll</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="qty" class="form-label">Jumlah</label>
                <input type="tel" name="qty" id="qty" class="form-control">
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