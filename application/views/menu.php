
  <!-- Hero -->
<div class="bg-[url('assets/img/background.png')] flex bg-no-repeat bg-cover relative bg-center ">
  <div class="mx-auto h-full px-4 py-28 md:py-40 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
    <div class="flex flex-col items-center justify-between lg:flex-row">
      <div class="">
        <div class="lg:max-w-xl lg:pr-5 mr-72">
          <h3 class="mb-6 max-w-lg text-5xl font-bold leading-snug text-white sm:text-5xl sm:leading-snug">
            Production Equipment
          </h3>
          <h4 class="mb-6 max-w-lg text-3xl font-bold leading-snug text-white sm:text-2xl sm:leading-snug">
            Trusted by 3000+ Customers
          </h4>
          <p class="text-base text-white">We make sure to meet photographer & filmmaker needs</p>
        </div>
        <div class="mt-10 flex flex-col items-center md:flex-row">
          <a href="#" class="mb-3 inline-flex h-12 w-full items-center justify-center rounded bg-blue-700 px-6 font-medium tracking-wide text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-blue-800">Open 24 Hours</a>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php foreach ($kategori as $key=> $ktg) : ?>
  <a name="<?= $key ?>"></a>
  <div class="mb-20">
    <div class="text-center border-b">
     <h4 class="mt-6 mb-1 text-3xl font-bold leading-snug text-white sm:text-2xl sm:leading-snug"><?= $key ?></h4>
    </div>
    <div class="grid grid-cols-4 justify-center">
<?php foreach ($ktg as $alt) : ?>
  <!-- Menu Kamera -->
<div class="ml-6 mt-10">
    <div class="mr-9 mb-6"></div>
      <div class="group border-gray-100/30 flex max-w-72 flex-col self-center overflow-hidden rounded-lg border bg-gray-700 shadow-md">
        <a class="relative mx-3 mt-3 d-flex h-60 overflow-hidden rounded-xl" href="<?= site_url('c_detail/index/'.$alt->id) ?>">
          <img class="peer absolute top-0 right-0 h-full w-full object-cover" src="<?= base_url() . '/uploads/' . $alt->image ?>" />
        </a>
          <div class="mt-4 px-5 pb-5">
            <a href="<?= site_url('c_detail/index/'.$alt->id) ?>">
              <h5 class="text-xl tracking-tight text-white"><?= $alt->nama_barang ?></h5>
            </a>
              <div class="mt-2 mb-5 flex items-center justify-between">
                <p>
                <span class="text-2xl font-bold text-white">Rp.<?= number_format($alt->harga,0,',','.') ?></span>
                </p>
              </div>
      <a href="<?= site_url('c_detail/index/'.$alt->id) ?>" class="hover:border-white/40 flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        Booking Now</a
      >
    </div>
  </div>
</div>

<?php endforeach ?>
</div>
</div>
<?php endforeach ?>

