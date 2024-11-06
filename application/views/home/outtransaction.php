<div class="steps-wrapper">
    <div class="steps-container1 thq-section-padding">
      <div class="steps-max-width thq-section-max-width">
        <div class="steps-container2 thq-grid-2">
          <div class="steps-section-header">
            <h2 class="thq-heading-2">
              Form Permintaan Barang Keluar
            </h2>
            <form method="POST" action="<?= base_url('transaction/submitRequestOut') ?>">
            <table style="width: 30rem;">
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Quantity</th>
                    <th>Action</th>
                  </tr>
                  <tbody id="itemsOutTable">

                  </tbody>
            </table>
            <div class="steps-actions">
              <button
                class="thq-button-animated thq-button-filled steps-button"
              >
                <span class="thq-body-small">Kirim Permintaan Barang Keluar</span>
              </button>
            </div>
            </form>
          </div>
          <div class="steps-container3">
            <div class="form-group">
              <form action="" method="POST" id="addItemOutForm">
                <label for="nama_barang">Nama Barang</label>
                <select class="form-control" id="nama_barang" name="nama_barang" required>
                  <option value="">Pilih Barang</option>
                  <?php foreach ($assets as $asset): ?>
                  <option value="<?= $asset['id'] ?>"
                                data-brand="<?= $asset['brand'] ?>"
                                data-type="<?= $asset['asset_type'] ?>"
                                data-unit="<?= $asset['unit'] ?>">
                    <?= $asset['asset_name'] ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </div>
        
                <!-- Merk -->
                <div class="form-group">
                    <label for="merk">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk" disabled>
                </div>
                        
                <!-- Type -->
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" disabled>
                </div>
                        
                <!-- Satuan -->
                <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" class="form-control" id="satuan" name="satuan" disabled>
                </div>
                        
                <!-- Jumlah -->
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="tel" class="form-control" id="jumlah" name="jumlah" required>
                </div>
                        
                <!-- Submit Button -->
                <button type="submit" class="submit-btn">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <script>
    let itemOutIndex = 1;

    // Handle form submit to add item into the table
    document.getElementById('addItemOutForm').addEventListener('submit', function(e) {
        e.preventDefault();
    
        // Get values from the form
        const itemName = document.getElementById('nama_barang').selectedOptions[0].text;
        const itemBrand = document.getElementById('merk').value;
        const itemType = document.getElementById('type').value;
        const itemUnit = document.getElementById('satuan').value;
        const itemQuantity = document.getElementById('jumlah').value;
    
        // Insert hidden inputs to send data via POST
        const form = document.querySelector('form');
        form.insertAdjacentHTML('beforeend', `
            <input type="hidden" name="items[${itemOutIndex}][name]" value="${itemName}">
            <input type="hidden" name="items[${itemOutIndex}][brand]" value="${itemBrand}">
            <input type="hidden" name="items[${itemOutIndex}][type]" value="${itemType}">
            <input type="hidden" name="items[${itemOutIndex}][unit]" value="${itemUnit}">
            <input type="hidden" name="items[${itemOutIndex}][quantity]" value="${itemQuantity}">
        `);
    
        // Insert the item into the table
        const table = document.getElementById('itemsOutTable');
        const row = table.insertRow();
        row.innerHTML = `
            <td>${itemOutIndex++}</td>
            <td>${itemName}</td>
            <td>${itemUnit}</td>
            <td>${itemQuantity}</td>
            <td><button class="btn btn-danger btn-sm" onclick="removeItemOut(this)"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/delete-forever.png" alt="delete-forever"/></button></button></td>
        `;
    
        // Reset the form
        document.getElementById('addItemOutForm').reset();
    
        // Close modal using JavaScript native
        const modal = document.getElementById('addItemOutModal');
        modal.style.display = 'none';  // Assume modal can be hidden by changing display property
    });

    // Auto-fill the brand, type, and unit when item is selected
    document.getElementById('nama_barang').addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        document.getElementById('merk').value = selectedOption.getAttribute('data-brand');
        document.getElementById('type').value = selectedOption.getAttribute('data-type');
        document.getElementById('satuan').value = selectedOption.getAttribute('data-unit');
    });

    // Function to remove an item from the table
    function removeItemOut(button) {
        const row = button.closest('tr');
        row.remove();
    }
    </script>

</steps-wrapper>
<hero-wrapper>
    <div class="hero-header78">
      <div class="hero-content1">
        <h1 class="hero-text1 thq-heading-1">
          <span>Track Status</span>
        </h1>
      </div>
      <div class="hero-actions">
      <table style="width: 30rem;">
                <tr>
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th>Quantity</th>
                  <th>Status</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Pulpen</td>
                  <td>Box</td>
                  <td>21</td>
                  <td>Approve</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Spidol</td>
                    <td>Box</td>
                    <td>20</td>
                    <td><button>Revoke</td>
                </tr>
          </table>
      </div>
    </div>
</hero-wrapper>