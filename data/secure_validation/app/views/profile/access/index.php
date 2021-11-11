<div class="right-side ">
  <div class="conten items-center justify-center">
    <div class="flex justify-center mb-10">
      <img class="img_usr shadow-2xl" src="<?= BASEURL ?>/img/src/<?= $data['avatar'] ?>" alt="profile">
    </div>
    <div class="w-1/2">
      <h2>Nama</h2>
      <p class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1"><?= $data['nama'] ?></p>
      <h2>NIK</h2>
      <p class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1"><?= $data['ktp'] ?></p>
      <h2>Alamat</h2>
      <p class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1"><?= $data['alamat'] ?></p>
      <h2>No Hp</h2>
      <p class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1"><?= $data['no_hp'] ?></p>
      <h2>Email</h2>
      <p class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1"><?= $data['email'] ?></p>
      <h2>Tanggal Lahir</h2>
      <p class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1"><?= $data['tgl_lahir'] ?></p>
      <h2>Jenis Kelamin</h2>
      <p class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1"><?= $data['kelamin'] ?></p>
      <h2>Access</h2>
      <p class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1"><?= $data['role_id'] ?></p>
    </div>
    <div class="mt-3">
      <a id="home" class="text-sm font-black text-gray-600 block text-center" href="<?= BASEURL ?>/home">return to first pages?</a>
    </div>
  </div>
</div>