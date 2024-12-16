

<div class="col-span-full mt-6">
<h5 class="ml-10 text-xl tracking-tight text-white"><?= $alat->nama_barang ?></h5>
  
  <label for="cover-photo" class="mt-10 block text-sm/6 font-medium text-white ml-10">Foto</label>
    <div class="ml-10 mt-2 mb-7 flex justify-center rounded-lg border border-dashed border-gray-900/25 w-80">
      <img class="w-20 h-24  " src="<?= base_url() . '/uploads/' . $alat->image ?>" class="w-80 h-80 object-cover object-center">
</div>
  
<form action="<?= base_url('Pinjam/pinjamAct/' . $alat->id); ?>" method="post">
  <div class="">
      <div class="ml-10 mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="nama" class="block text-sm/6 font-medium text-white">Nama</label>
              <input type="text" name="nama" class=" rounded-md py-1.5 pl-1 w-80 " placeholder="Nama">
        </div>
        <div class="sm:col-span-4">
          <label for="nik" class="block text-sm/6 font-medium text-white">NIK</label>
              <input type="number" name="nik" class=" rounded-md py-1.5 pl-1 w-80 " placeholder="NIK">
        </div>
        <div class="sm:col-span-4">
          <label for="nohp" class="block text-sm/6 font-medium text-white">No Handphone Aktif</label>
              <input type="number" name="nohp" class=" rounded-md py-1.5 pl-1 w-80 " placeholder="+62">
        </div>
        <div class="sm:col-span-4">
          <label for="waktupinjam" class="block text-sm/6 font-medium text-white">Waktu Pinjam</label>
              <input type="number" name="waktupinjam" class=" rounded-md py-1.5 pl-1 w-10 ">
          <label class=" text-sm/6 font-medium text-white">Hari</label>
        </div>
        

        <div class="sm:col-span-4 mb-10 text-center">
            <input type="button" class="inline-flex h-10 items-center justify-center rounded bg-blue-700 px-6 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-blue-800" value="Kembali" onclick="window.history.go(-1)">
            <button type="submit" class=" inline-flex h-10 items-center justify-center rounded bg-blue-700 px-6 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-blue-800">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<!-- Inlcude Information -->
<div class="mt-10 text-white">
    <p class="text-1xl font-bold">Kamera Include :</p>
    <p> - Unit</p>
    <p> - Strap</p>
    <p> - Charger</p>
    <p> - Battery x2</p>
    <p> - Memory 32GB x2</p>
    <p> - Tas</p>
    <p class="text-1xl font-bold mt-10">Lensa Include :</p>
    <p> - Unit</p>
    <p> - Tas</p>
</div>
