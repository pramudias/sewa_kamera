<div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <p class="text-black w-full text-center">Data Booking</p>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>
        </header>
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <div class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center text-white">
                        <i class="fas fa-list mr-3"></i> Data Pinjam
                    </p>
                    <a href="<?= site_url('TambahPinjam') ?>" class=" inline-flex h-10 items-center justify-center rounded bg-blue-700 px-6 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-blue-800">+ Tambah Data Pinjam</a>
                    <div class="bg-white overflow-auto mt-6">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        No Pinjam
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        NIK
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Alat
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Tanggal Pinjam
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Waktu Pinjam
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Tanggal Pengembalian
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Terlambat
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Total Denda
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pinjam as $p): ?>
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap"><?= $p['no_pinjam']; ?></p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap"><?= $p['nik']; ?></p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap"><?= $p['nama_barang']; ?></p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap"><?= $p['tgl_pinjam']; ?></p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap"><?= $p['waktu_pinjam']; ?> Hari</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            <?= $p['tgl_pengembalian'] ?>
                                            <input type="hidden" name="tgl_pengembalian" id="tgl_pengembalian" value="<?= $p['tgl_pengembalian'] ?>">
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            <?php $selisih = 0; ?>
                                            <?php if ($p['status'] == 'Pinjam'): 
                                                $tgl1 = new DateTime($p['tgl_pinjam']);
                                                $tgl2 = new DateTime();
                                                $selisih = $tgl2->diff($tgl1)->format("%a");

                                                if ($selisih > $p['waktu_pinjam'])  {
                                                    $selisih -= $p['waktu_pinjam'];
                                                }
                                            ?>
                                            <?= $selisih ?> Hari
                                            <?php else: ?>
                                                -
                                            <?php endif ?>
                                        </p>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">Rp.<?= number_format($selisih * 5000, 0,',','.') ?></p>
                                    </td>
                                    <td>
                                        <?php if ($p['status'] == "Kembali") : ?>
                                            <span class="flex h-10 items-center justify-center rounded bg-green-500 px-1 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-green-500">
                                                Returned
                                            </span>
                                        <?php else: ?>
                                            <p>
                                                <a href="<?= base_url('Pinjam/ubahStatus/' . $p['no_pinjam']); ?>" class="flex h-10 items-center justify-center rounded bg-red-500 px-1 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-red-500">
                                                    Dipinjam
                                                </a>
                                            </p>
                                        <?php endif ?>
                                    </td>
                                    <td>
                                        <?php if ((isset($selisih) && $selisih > 0) && $p['status'] == 'Pinjam'): ?>
                                            <a href="" class="flex h-10 items-center justify-center rounded bg-red-500 px-1 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-red-500">
                                                Remind
                                            </a>
                                        <?php endif ?>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>