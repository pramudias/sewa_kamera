    <!-- Menu Section Pria Start -->
    <section class="mt-8 mb-8">
        <?php foreach ($alat as $alt) : ?>
         <div class="justify-self-center container py-24 px-8 bg-gray-700 mt-10 rounded-xl">
          <div class="grid grid-cols-2">
            <div class="ml-50 bg-gray-800 mb-24 rounded-xl items-center justify-self-center">
              <img src="<?= base_url() . '/uploads/' . $alt->image ?>" class="w-80 h-80 object-cover object-center">
            </div>
              <div class="ml-10">
                <p>
                  <span class="text-3xl font-bold text-white"><?= $alt->nama_barang ?></span>
                </p>
                <div class="border-b mr-9 mt-1"></div>
                <p class="mt-4">
                  <span class="text-1xl text-white">Rp.<?= number_format($alt->harga,0,',','.') ?> / <span class="font-bold">Day</span></span>
                </p>
                <div class="border-b mr-9 mt-1"></div>
                <p class="mt-4">
                  <span class="text-1xl font-bold text-white">Tersedia : <?= $alt->stok ?></span>
                </p>
                <div class="border-b mr-9 mt-1"></div>

                <?php if ($alt->kategori=='Kamera'): ?>
                  <div class="mt-1">
                    <p class="text-1xl font-bold text-white">Inlcude : </p>
                    <p> - Unit</p>
                    <p> - Strap</p>
                    <p> - Charger</p>
                    <p> - Battery x2</p>
                    <p> - Memory 32GB x2</p>

                <div class="border-b mr-9 mt-1"></div>
                    <p class="text-1xl font-bold text-white">infomation : </p>
                    <p>Nilai Deposit (dikembalikan setelah selesai sewa) = Rp.<?= number_format($alt->deposit,0,',','.') ?></p>
                </div>
                <?php else: ?>
                  <div class="mt-1">
                    <p class="text-1xl font-bold text-white">Inlcude : </p>
                    <p> - Unit</p>

                <div class="border-b mr-9 mt-1"></div>
                    <p class="text-1xl font-bold text-white">infomation : </p>
                    <p>Nilai Deposit (dikembalikan setelah selesai sewa) = Rp.<?= number_format($alt->deposit,0,',','.') ?></p>
                </div>
                <?php endif ?>

                <?php if (!$this->session->has_userdata('id')) : ?>
                  <!-- Jika Belum Login -->
                  <a href="<?= site_url('auth') ?>" class="mt-12 hover:border-white/40 flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>Booking Now</a>

                <?php else: ?>
                  <!-- Jika Sudah Login -->
                  <a href="https://wa.me/send?phone=085794569870&text=Apakah <?= $alt->nama_barang ?> masih tersedia" class="mt-12 hover:border-white/40 flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>Booking Now</a>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
    </section>
<?php endforeach ?>