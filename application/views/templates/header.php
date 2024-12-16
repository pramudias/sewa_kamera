<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SnapHire </title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,700;1,700&display=swap" rel="stylesheet"/>


    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Style CSS -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&display=swap');

    * {
      font-family: 'Exo', sans-serif;
    }
  </style>
    
  </head>
  <body class="bg-gray-800 text-white">
  <div class="bg-gray-800">
  <header class=" flex max-w-screen-xl flex-col overflow-hidden px-4 py-5 text-blue-900 md:mx-auto md:flex-row md:items-center">
    <a href="<?= site_url('home') ?>" class="flex cursor-pointer items-center whitespace-nowrap text-2xl font-black text-blue-500">
      SnapHire
    </a>
      <div class="flex flex-col items-center space-y-2 md:ml-auto md:flex-row md:space-y-0">
        <div class="text-gray-100 md:mr-12"><a href="#Kamera">Camera</a></div>
        <div class="text-gray-100 md:mr-12"><a href="#Lensa">Lens</a></div>
        <div class="text-gray-100 md:mr-8"><a href="<?= site_url('about') ?>">About Us</a></div>
        <div class="md:mr-12">
          <?php if (!$this->session->has_userdata('id')) : ?>
            <button class=" text-white rounded-full px-4 py-2 hover:bg-green-800 transition" onclick="openModal('modelLogin')"> Login 
            </button>
            <button class="ml-1  text-white rounded-full px-4 py-2 hover:bg-blue-800 transition" onclick="openModal('modelRegis')"> Registrasi 
            </button>

              <!-- MODAL UNTUK LOGIN -->

              <div id="modelLogin" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
                  <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
                      <div class="flex justify-end p-2">
                          <button onclick="closeModal('modelLogin')" type="button"
                              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                              </svg>
                          </button>
                      </div>
                        <div class="space-y-4 md:space-y-6">
                          <?= $this->session->flashdata('messageLogin'); ?>
                        </div>
                        <div class="top-40 p-6 pt-0 text-center">
                          <img class="w-20 h-24 ml-40 " src="<?= site_url('assets/img/logos2.png') ?>">
                              <form class="space-y-4 md:space-y-6" method="post" action="<?= ('auth'); ?>">
                                <div>
                                    <input type="email" name="email"class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email Adress" >
                                    <?= form_error('email','<small class="text-red-500">','</small>'); ?>
                                </div>
                                <div>
                                    <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                    <?= form_error('password','<small class="text-red-500">','</small>'); ?>
                                </div>

                                <button type="submit" class="transition w-full text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center rounded-lg transition ease-in delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-gray-900 duration-200 bg-gray-700  active:bg-gray-900 focus:outline-none focus:ring focus:ring-gray-300 ">Log In</button>
                            </form>
                        </div>
                    </div>
              </div>

              <!-- Modal Untuk Registrasi -->
              <div id="modelRegis" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
                <div class="relative top-20 mx-auto shadow-xl rounded-md bg-white max-w-md">
                    <div class="flex justify-end p-2">
                        <button onclick="closeModal('modelRegis')" type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                      <div class="p-6 pt-0 text-center">
                        <div class="space-y-4 md:space-y-6">
                          <?= $this->session->flashdata('messageRegis'); ?>
                        </div>
                        <img class="w-20 h-24 ml-40 " src="<?= site_url('assets/img/logos2.png') ?>">
                            <form class="space-y-4 md:space-y-6" method="post" action="<?= site_url('auth/registration'); ?>">
                              <div>
                                    <input type="name" name="nama"class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Full Name" value="<?= set_value('nama'); ?>">
                                    <?= form_error('nama','<small class="text-red-500">','</small>'); ?>
                                    
                                </div>
                                <div>
                                    <input type="email" name="email"class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email Adress" value="<?= set_value('email'); ?>">
                                    <?= form_error('email','<small class="text-red-500">','</small>'); ?>
                                </div>
                                <div>
                                    <input type="password" name="password1" id="password1" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <?= form_error('password1','<small class="text-red-500">','</small>'); ?>
                                </div>
                                <div>
                                  <input type="password" name="password2" id="password2" placeholder="Repeat Password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                
                                <button type="submit" class="transition w-full text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center rounded-lg transition ease-in delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-gray-900 duration-200 bg-gray-700  active:bg-gray-900 focus:outline-none focus:ring focus:ring-gray-300 ">Register Account</button>
                                <div class="flex items-center justify-center">
                                    <a href="<?= site_url('auth') ?>" class="text-sm font-medium text-white hover:underline">Already have an account? Login!</a>
                                </div>
                            </form>
                      </div>
                  </div>
              </div>
          <?php else: ?>
            <div class="">
              <!-- Menu toggle button -->
              <button class="peer relative z-50 block p-2 transition-colors duration-300 transform rounded-full focus:outline-1">
                <div class="relative">
                <img 
                    src="https://i.pravatar.cc/100?img=3" 
                    alt="User Avatar" 
                    class="w-16 h-16 rounded-full object-cover border-2 border-indigo-800 dark:border-blue-900 transition-transform duration-300 hover:scale-110"
                >
                <span class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
            </div>
              </button>

              <!-- Menu list -->
              <div
                class="hidden peer-focus:block absolute right-24 w-48 mt-2 z-50 overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800 border hover:block">
                <a href="<?= site_url('Profile') ?>"
                  class="block px-4 py-2 text-sm text-gray-800 transition-colors duration-300 transform border-b dark:text-gray-200 dark:border-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>
                <a href="<?= site_url('Profile') ?>"
                  class="block px-4 py-2 text-sm text-gray-800 transition-colors duration-300 transform border-b dark:text-gray-200 dark:border-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700">Riwayat Pinjam</a>
                <a href="<?= site_url('auth/logout') ?>"
                  class="block px-4 py-2 text-sm text-gray-800 transition-colors duration-300 transform dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Logout</a>
              </div>
            </div>
          <?php endif ?>
        </div>
      </div>
    </nav>
  </header>