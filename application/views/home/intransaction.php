<steps-wrapper class="steps-wrapper">
          <!--Steps component-->
          <div class="steps-container1 thq-section-padding">
            <div class="steps-max-width thq-section-max-width">
              <div class="steps-container2 thq-grid-2">
                <div class="steps-section-header">
                  <h2 class="thq-heading-2">
                    Form Permintaan Barang Masuk
                  </h2>
                  <form method="POST" action="<?= base_url('transaction/requestInTransaction') ?>">
                    <table style="width: 30rem;">
                          <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Quantity</th>
                            <th>Action</th>
                          </tr>
                          <tbody id="itemsInTable">

                          </tbody>
                    </table>
                    <div class="steps-actions">
                      <button type="submit"
                        class="thq-button-animated thq-button-filled steps-button"
                      >
                        <span class="thq-body-small">Kirim Permintaan Barang Masuk</span>
                      </button>
                    </div>
                  </form>
                  <!-- <p class="thq-body-large">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Suspendisse varius enim in eros elementum tristique. Duis
                    cursus, mi quis viverra ornare, eros dolor interdum nulla,
                    ut commodo diam libero vitae erat.
                  </p> -->
                </div>
                <div class="steps-container3">
                    <form id="addItemInForm">
                        <!-- Nama Barang -->
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" id="nama_barang" name="nama_barang" required>
                        </div>
            
                        <!-- Merk -->
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" id="merk" name="merk" required>
                        </div>
            
                        <!-- Type -->
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" id="type" name="type" required>
                        </div>
            
                        <!-- Satuan -->
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <select id="satuan" name="satuan" required>
                                <option value="pcs">Pcs</option>
                                <option value="box">Box</option>
                                <option value="kg">Kg</option>
                                <option value="liter">Liter</option>
                            </select>
                        </div>
            
                        <!-- Jumlah -->
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="tel" id="jumlah" name="jumlah" required>
                        </div>
            
                        <!-- Submit Button -->
                        <button type="submit" class="submit-btn">Tambah</button>
                    </form>
                </div>
              </div>
            </div>
          </div>

          <script>
            let itemInIndex = 1;

            // Handle form submit to add item into the table
            document.getElementById('addItemInForm').addEventListener('submit', function(e) {
                e.preventDefault();
            
                // Get values from the form
                const itemName = document.getElementById('nama_barang').value;
                const itemBrand = document.getElementById('merk').value;
                const itemType = document.getElementById('type').value;
                const itemUnit = document.getElementById('satuan').value;
                const itemQuantity = document.getElementById('jumlah').value;
            
                // Insert hidden inputs to send data via POST
                const form = document.querySelector('form');
                form.insertAdjacentHTML('beforeend', `
                    <input type="hidden" name="items[${itemInIndex}][name]" value="${itemName}">
                    <input type="hidden" name="items[${itemInIndex}][brand]" value="${itemBrand}">
                    <input type="hidden" name="items[${itemInIndex}][type]" value="${itemType}">
                    <input type="hidden" name="items[${itemInIndex}][unit]" value="${itemUnit}">
                    <input type="hidden" name="items[${itemInIndex}][quantity]" value="${itemQuantity}">
                `);
            
                // Insert the item into the table
                const table = document.getElementById('itemsInTable');
                const row = table.insertRow();
                row.innerHTML = `
                    <td>${itemInIndex++}</td>
                    <td>${itemName}</td>
                    <td>${itemUnit}</td>
                    <td>${itemQuantity}</td>
                    <td><button class="btn btn-danger btn-sm" onclick="removeItemIn(this)"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/delete-forever.png" alt="delete-forever"/></button></td>
                `;
            
                // Reset the form
                document.getElementById('addItemInForm').reset();
            
                // Close modal
                $('#addItemInModal').modal('hide');
            });

            // Function to remove an item from the table
            function removeItemIn(button) {
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