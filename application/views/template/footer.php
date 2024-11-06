<footer-wrapper class="footer-wrapper">
          <!--Footer component-->
          <footer class="footer-footer1 thq-section-padding">
            <div class="footer-max-width thq-section-max-width">
              <div class="footer-credits">
                <div class="thq-divider-horizontal"></div>
                <div class="footer-row">
                  <span class="thq-body-small">
                    <span class="footer-content2 thq-body-small">
                      <span>© <?= Date('Y') ?> Company Name. All Rights Reserved.</span>
                    </span>
                  </span>
                  <div class="footer-footer-links3">
                    <span class="thq-body-small">
                      <span>Privacy Policy</span>
                    </span>
                    <span class="thq-body-small">
                      <span>Terms of Service</span>
                    </span>
                    <span class="thq-body-small">
                      <span>Cookie Policy</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </footer-wrapper>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
    <?php if (!empty($flash_message['title']) && !empty($flash_message['text']) && !empty($flash_message['icon'])): ?>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
          Swal.fire({
              position: "center",
              title: "<?php echo $flash_message['title']; ?>",
              text: "<?php echo $flash_message['text']; ?>",
              icon: "<?php echo $flash_message['icon']; ?>"
          });
      </script>
    <?php endif; ?>
  </body>
</html>