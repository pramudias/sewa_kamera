  <footer class="bg-gray-400 text-black text-center pl-4 pb-4">
    <div class="pl-4 flex justify-start justify-center ">
      <a href="https://www.instagram.com/pramudias___" class="m-4 opacity-100 hover:opacity-50"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="message-circle" class="m-4 opacity-100 hover:opacity-50"></i></a>
      <a href="https://www.facebook.com/profile.php?id=100011410627901" class="m-4 opacity-100 hover:opacity-50"><i data-feather="facebook"></i></a>
    </div>

    <div class="mb-5 text-sm">
      <a href="#home" class="pl-3 pr-4 opacity-100 hover:opacity-50">Home</a>
      <a href="<?= site_url('about') ?>" class="pl-3 pr-4 opacity-100 hover:opacity-50">About Us</a>
      <a href="#menu" class="pl-3 pr-4 opacity-100 hover:opacity-50">Menu</a>
      <a href="https://wa.me/send?phone=085794569870" class="pl-3 pr-4 opacity-100 hover:opacity-50">Kontak</a>
    </div>

    <div class="text-xs">
      <p>Created by <a href="" class="font-bold">SnapHire</a>. | &copy;2024</p>
    </div>
  </footer>
    <script>
      feather.replace();
    </script>

    <!-- javascript -->
    <script src="assets/js/script.js"></script>
    <!--  -->
    <script type="text/javascript">
    window.openModal = function(modalId) {
        document.getElementById(modalId).style.display = 'block'
        document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
    }

    window.closeModal = function(modalId) {
        document.getElementById(modalId).style.display = 'none'
        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
    }
    <?php if ($this->session->flashdata('messageLogin')): ?>
      openModal('modelLogin');
    <?php endif ?>
    <?php if ($this->session->flashdata('messageRegis')): ?>
      openModal('modelRegis');
    <?php endif ?>
    // Close all modals when press ESC
    document.onkeydown = function(event) {
        event = event || window.event;
        if (event.keyCode === 27) {
            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
            let modals = document.getElementsByClassName('modal');
            Array.prototype.slice.call(modals).forEach(i => {
                i.style.display = 'none'
            })
        }
    };
</script>
  </body>
</html>

