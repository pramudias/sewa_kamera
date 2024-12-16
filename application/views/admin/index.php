    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <p class="text-black w-full text-center">Dashboard</p>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="z-50 absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <a href="<?= site_url('auth/logout') ?>" class="block px-4 py-2 account-link hover:text-white">LogOut</a>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.php" class="text-black text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>
        </header>
            <div class="w-full overflow-x-hidden border-t flex flex-col text-white">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-white pb-6">Dashboard</h1>
    
                <div class="px-4 md:px-10 mx-auto w-full text-black">
                <div>
                  <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                      <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                          <div class="flex flex-wrap">
                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                              <h5 class="text-blueGray-400 uppercase font-bold text-xs">AVAILABLE</h5>
                              <span class="font-semibold text-xl text-blueGray-700">
                                  <?php
                                    $where = ['stok != 0'];
                                    $totalstok = $this->m_booking->total('stok', $where);
                                    echo $totalstok;
                                    ?>
                              </span>
                            </div>
                            <div class="relative w-auto pl-4 flex-initial">
                              <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-green-500">
                                <i class="fas fa-check"></i>
                              </div>
                            </div>
                           </div>
                          </div>
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                          <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                              <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                <h5 class="text-blueGray-400 uppercase font-bold text-xs">Returned</h5>
                                <span class="font-semibold text-xl text-blueGray-700">
                                  <?= $this->ModelPinjam->total(['status' => 'Kembali'])->num_rows(); ?>
                                </span>
                              </div>
                              <div class="relative w-auto pl-4 flex-initial">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                                <i class="fas fa-chart-bar"></i>
                                </div>
                              </div>
                            </div>
                           </div>
                          </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                          <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                            <div class="flex-auto p-4">
                              <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                  <h5 class="text-blueGray-400 uppercase font-bold text-xs">Not returned</h5>
                                  <span class="font-semibold text-xl text-blueGray-700">
                                    <?= $this->ModelPinjam->total(['status' => 'Pinjam'])->num_rows(); ?>
                                  </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                    <i class="fa fa-minus"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                          <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                              <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                <h5 class="text-blueGray-400 uppercase font-bold text-xs">USERS</h5>
                                <span class="font-semibold text-xl text-blueGray-700">
                                    <?= $this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?>
                                </span>
                              </div>
                              <div class="relative w-auto pl-4 flex-initial">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                <i class="fas fa-users"></i>
                                </div>
                              </div>
                            </div>
                           </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Data Alat
                    </p>
                    <div class="bg-white overflow-auto ">
                        <table class="min-w-full bg-gray-200 ">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left bg-gray-700 py-3 px-4 border-b border-black uppercase font-semibold text-sm">Alat</th>
                                    <th class="w-1/3 text-left bg-gray-700 py-3 px-4 border-b border-black uppercase font-semibold text-sm">Harga</th>
                                    <th class="text-left bg-gray-700 py-3 px-4 border-b border-black uppercase font-semibold text-sm">Stok</th>
                                    <th class="text-center bg-gray-700 py-3 px-4 border-b border-black uppercase font-semibold text-sm">Aksi</th>

                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <?php foreach ($alat as $a): ?>
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4 border-b border-black border-b border-black"><?= $a['nama_barang']; ?></td>
                                    <td class="w-1/3 text-left py-3 px-4 border-b border-black border-b border-black">Rp.<?= number_format($a['harga']); ?></td>
                                    <td class="text-left py-3 px-4 border-b border-black"><?= $a['stok']; ?></td>
                                    <td class="w-1/3 text-left py-3 px-4 border-b border-black text-center ">
                                        <!-- <a href="<?= site_url('PinjamAlat') ?>" class="inline-flex h-10 items-center justify-center rounded bg-green-500 px-3 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-green-600">Pinjam</a> -->
                                        <a href="<?= site_url('EditData') ?>" class="inline-flex h-10 items-center justify-center rounded bg-yellow-500 px-3 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-yellow-600">Edit</a>
                                        <a href="" class="inline-flex h-10 items-center justify-center rounded bg-red-700 px-1 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-red-800">Hapus</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <a href="<?= site_url('TambahData') ?>" class="mt-5 inline-flex h-10 items-center justify-center rounded bg-blue-700 px-6 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-blue-800">+ Tambah Data Alat</a>
                </div>

                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Data User
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-gray-200">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 bg-gray-700 border-b border-black uppercase font-semibold text-sm">Nama</th>
                                    <th class="w-1/3 text-left py-3 px-4 bg-gray-700 border-b border-black uppercase font-semibold text-sm">Phone</th>
                                    <th class="text-left py-3 px-4 bg-gray-700 border-b border-black uppercase font-semibold text-sm">Email</th>
                                    <th class="text-center py-3 px-4 bg-gray-700 border-b border-black uppercase font-semibold text-sm">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <?php foreach ($anggota as $a) : ?>
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4 border-b border-black"><?= $a['nama']; ?></td>
                                    <td class="w-1/3 text-left py-3 px-4 border-b border-black">085283162798</td>
                                    <td class="text-left py-3 px-4 border-b border-black"><?= $a['email']; ?></td>
                                    <td class="w-1/3 text-left py-3 px-4 border-b border-black text-center ">
                                        <a href="#" class="inline-flex h-10 items-center justify-center rounded bg-yellow-500 px-3 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-yellow-600">Edit</a>
                                        <a href="#" class="inline-flex h-10 items-center justify-center rounded bg-red-700 px-1 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-red-800">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <a href="<?= site_url('TambahUser') ?>" class="mt-5 inline-flex h-10 items-center justify-center rounded bg-blue-700 px-6 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-blue-800">+ Tambah User</a>
                </div>
            </main>
        