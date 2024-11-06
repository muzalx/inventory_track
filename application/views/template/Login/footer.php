<script src="<?= base_url('public/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('public/js/popper.js') ?>"></script>
  <script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('public/js/main.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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