<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gradient-to-r from-gray-100 to-gray-500 ">
<section >
    <div class="mb-20 flex flex-col items-center justify-center px-6 py-10 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center text-2xl font-semibold text-gray-900 dark:text-white">
        <img class="w-40 h-30" src="<?= site_url('assets/img/logos.png') ?>">
      </a>

      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Sign Up
              </h1>
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
</section>
</body>
</html>