<?php if (!$data == null) {
  $err_username = $data['username'];
  $err_password = $data['password'];
} else {
  $err_username = '';
  $err_password = '';
} ?>
<div class="mx-2 min-h-screen bg-gray-50 flex flex-col justify-center">
  <div class="max-w-md w-full- mx-auto text-3xl font-bold">E-Banjar</div>
  <div class="shadow-2xl max-w-md w-full mx-auto mt-4 bg-white p-8 border border-gray-300">
    <form method="POST" action="<?= BASEURL ?>/auth/login">
      <div class="mt-2">
        <label class="text-sm font-black text-gray-600 block" for="email">Username</label>
        <input class="w-full p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="text" name="email" id="email">
        <p id="err_username" class="text-red-600"><?= $err_username ?></p>
      </div>
      <div class="mt-2">
        <label class="text-sm font-black text-gray-600 block" for="password">Password</label>
        <input class="w-full p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="password" name="password" id="password">
        <p id="err_password" class="text-red-600"><?= $err_password ?></p>
      </div>
      <div class="mt-3">
        <button class="p-2 btn_rgs btn_register duration-500 w-full py-2 px-4 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit">Login</button>
      </div>
      <div class="mt-3">
        <a class="text-sm font-black text-gray-600 block text-center" href="<?= BASEURL ?>/wellcome">return to first pages?</a>
      </div>
    </form>
  </div>
</div>