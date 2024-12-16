<form clas>
  <div class="">
      <div class="ml-10 mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="nama_alat" class="block text-sm/6 font-medium text-white">Nama Alat</label>
              <input type="text" name="text" id="nama_alat" class="mt-1 rounded-md py-1.5 pl-1 w-80 " placeholder="Alat">
        </div>
        <div class="sm:col-span-4">
          <label for="kategori" class="block text-sm/6 font-medium text-white">Kategori</label>
              <div class="flex items-center mb-4">
                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-medium text-white ml-1 mt-1 dark:text-gray-300">Kamera</label>
            </div>
            <div class="flex items-center">
                <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-medium text-white ml-1 dark:text-gray-300">Lensa</label>
            </div>
        </div>

        <div class="">
          <label for="stok" class="block text-sm/6 font-medium text-white">Stok</label>
              <input type="number" name="text" id="stok" class="mt-1 rounded-md py-1.5 pl-1 w-16" placeholder=" -">
        </div>

        <!-- <div class="col-span-full">
          <label for="about" class="block text-sm/6 font-medium text-white">About</label>
          <div class="mt-2">
            <textarea name="about" id="about" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-white focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
          </div>
          <p class="mt-3 text-sm/6 text-white">Write a few sentences about yourself.</p>
        </div>
 -->
        
        <div class="col-span-full">
          <label for="cover-photo" class="block text-sm/6 font-medium text-white">Foto Alat</label>
          <div class="mt-2 mb-7 flex justify-center rounded-lg border border-dashed border-gray-900/25 w-80">
            <div class="text-center">
              <svg class="mx-auto size-12 text-white" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
              </svg>
              <div class="mt-4 flex text-sm/6 text-white">
                <label for="file-upload" class="w-32 relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                  <span>Upload a file</span>
                  <input id="file-upload" name="file-upload" type="file" class="sr-only">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs/5 text-white mb-1">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>


        <div class="sm:col-span-4 mb-10">
            <input type="button" class="inline-flex h-10 items-center justify-center rounded bg-blue-700 px-6 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-blue-800" value="Kembali" onclick="window.history.go(-1)">
            <a href="<?= site_url('TambahData') ?>" class=" inline-flex h-10 items-center justify-center rounded bg-blue-700 px-6 text-white shadow-md transition md:mr-4 md:mb-0 md:w-auto focus:outline-none hover:bg-blue-800">Simpan</a>
        </div>


        </div>
      </div>
    </div>
</div>
</form>
