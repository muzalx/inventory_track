<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Barang Masuk</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Barang Masuk
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div>
    <div class="app-content">
    <div class="row">
        <div class="col-md-12">
            <!-- <div class="alert alert-primary" role="alert">
                <i class="bi bi-info-circle-fill"></i> Saat ini belum ada permintaan barang Keluar
            </div> -->
            <div class="card mb-4">
            <div class="card-header">
                    <h5 class="card-title">Permintaan Barang Masuk</h5>
                </div> <!-- /.card-header -->
                <div class="card-body"> <!--begin::Row-->
                    <div class="table-responsive">
                        <table class = "table m-10">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID Permintaan</th>
                                    <th>Pemohon</th>
                                    <th>Dibuat pada</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($data['showStockIn'])): ?>
                                    <tr>
                                        <td colspan="6" class="text-center">No data found</td>
                                    </tr>
                                    <?php else: ?>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data['showStockIn'] as $stock): ?>
                                    <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= htmlspecialchars($stock['id']) ?></td>
                                            <td><?= htmlspecialchars($stock['user_name']) ?></td>
                                            <td><?= htmlspecialchars($stock['created_at']) ?></td>
                                            <td><button class="btn btn-info" onclick="showDetailModal(<?= $stock['id'] ?>)">Detail</button></td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div> <!-- ./card-body -->
                </div> <!-- /.card -->
            </div> <!-- /.col -->
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Stock Details </h5>
        <div id="status-head"></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalBody">
        <div id="status-body"></div>
        <!-- Dynamic content will be inserted here -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <script>
        function showDetailModal(id) {
            $.ajax({
                url: '<?= BASE_URL ?>/stockin/getStockDetailById/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    if (Array.isArray(data)) {
                        $('#status-head').empty();
                        $('#modalBody').empty();  // Kosongkan modal body sebelum diisi ulang
                        if (data[0].status == 'pending'){
                            $('#status-head').append(
                                '<span class="badge text-bg-warning">'+data[0].status+'</span>'
                            );
                        }else if (data[0].status == 'approve'){
                            $('#status-head').append(
                                '<span class="badge text-bg-success">'+data[0].status+'</span>'
                            );
                        }else if(data[0].status == 'revoke'){
                            $('#status-head').append(
                                '<span class="badge text-bg-danger">'+data[0].status+'</span>'
                            );
                        }else {
                            '';
                        }
                        data.forEach(function(item) {
                            $('#modalBody').append(
                                '<p>Pemohon: ' + item.user_name + '</p>' +
                                '<p>Nama Barang: ' + item.asset_name + '</p>' +
                                '<p>Merk: ' + item.merk + '</p>' +
                                '<p>Tipe: ' + item.tipe + '</p>' +
                                '<p>Satuan: ' + item.satuan + '</p>' +
                                '<p>Jumlah: ' + item.quantity + '</p>' +
                                '<p>Approved At: ' + (item.approved_at ? item.approved_at : 'N/A') + '</p>' +
                                '<p>Approved By: ' + (item.approved_by ? item.approved_by : 'N/A') + '</p>' +
                                '<hr>'
                            );
                        });
                    }else{
                        // Jika data adalah objek tunggal, langsung tampilkan
                        $('#status-head').empty();
                        $('#modalBody').empty();
                        $('#status-head').append(
                            '<h2>'+data.status+'</h2>'
                        );
                        $('#modalBody').append(
                            '<p>Pemohon: ' + data.user_name + '</p>' +
                            '<p>Nama Barang: ' + data.asset_name + '</p>' +
                            '<p>Merk: ' + data.tipe + '</p>' +
                            '<p>Tipe: ' + data.merk + '</p>' +
                            '<p>Satuan: ' + data.satuan + '</p>' +
                            '<p>Jumlah: ' + data.quantity + '</p>' +
                            '<p>Status: ' + data.status + '</p>' +
                            '<p>Approved At: ' + (data.approved_at ? data.approved_at : 'N/A') + '</p>'
                        );
                    }
                    // Show modal
                    $('#detailModal').modal('show');
                }
            });
        }
    </script>
</main>