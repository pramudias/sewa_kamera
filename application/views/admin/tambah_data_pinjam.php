<div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
  <main class="w-full flex-grow p-6">
    <div class="w-full mt-6">
      <input type="button" class="inline-flex h-10 items-center justify-center rounded bg-blue-700 px-6 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-blue-800" value="Kembali" onclick="window.history.go(-1)">

        <?php foreach ($kategori as $key=> $ktg) : ?>
          
          <div class="">
            <table class="w-full bg-gray-200">
              <p class="text-xl pb-3 flex items-center text-white mt-6">
                <i class="fas fa-list mr-3"></i> <?= $key ?>
              </p>
              <thead class="bg-gray-800 text-white">
                <tr>
                  <th class="w-1/3 text-left bg-gray-700 py-3 px-4 border-b border-black uppercase font-semibold text-sm">Alat</th>
                  <th class="w-1/3 text-left bg-gray-700 py-3 px-4 border-b border-black uppercase font-semibold text-sm">Harga Perhari</th>
                  <th class="text-left bg-gray-700 py-3 px-4 border-b border-black uppercase font-semibold text-sm">Stok</th>
                  <th class="text-center bg-gray-700 py-3 px-4 border-b border-black uppercase font-semibold text-sm">Aksi</th>
                </tr>
              </thead>
        <?php foreach ($ktg as $a) : ?>
  <!-- Menu Kamera -->
              <tbody class="text-gray-700">
                <tr>
                  <td class="w-1/3 text-left py-3 px-4 border-b border-black border-b border-black"><?= $a->nama_barang?></td>
                  <td class="w-1/3 text-left py-3 px-4 border-b border-black border-b border-black">Rp.<?= number_format($a->harga,0,',','.') ?></td>
                  <td class="text-left py-3 px-4 border-b border-black"><?= $a->stok?></td>
                  <td class="w-1/3 text-left py-3 px-4 border-b border-black text-center ">
                  
                  <a href="<?= site_url('PinjamAlat/index/'.$a->id) ?>" class="inline-flex h-10 items-center justify-center rounded bg-green-500 px-3 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-green-600">Pinjam</a></td>
                </tr>
              </tbody>
        <?php endforeach ?>
      </div>
    </div>
        <?php endforeach ?>
        </div>
      </div>
  </main>
</div>