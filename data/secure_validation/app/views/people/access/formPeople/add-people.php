<div class="right-side">
  <div class="conten justify-center">
    <form class="flex flex-col items-center" action=" <?= BASEURL ?>/people/toDo/add" method="POST" enctype="multipart/form-data">
      <h1 class="text-5xl font-bold"><?= $headline ?></h1>
      <br />
      <div class="flex flex-col w-1/2">
        <div class="border-b-2 pb-3">
          <!-- <input type="hidden" name="date_created" value="<?= $data['date_created'] ?>"> -->
          <input type="file" name="avatar">
        </div>
        <div class="flex">
          <div class="justify-between font-bold flex flex-col w-1/4">
            <label for="nama">Nama</label>
            <label for="ktp">NIK</label>
            <label for="alamat">Alamat</label>
            <label for="no_hp">No Hp</label>
            <label for="email">Email</label>
            <label for="tgl_lahir">Tanggal Lahir</label>
            <label for="kelamin">Jenis Kelamin</label>
            <label for="role_id">access</label>
          </div>
          <div class=" flex flex-col w-3/4">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="nama" type="text" placeholder="Nama Lengkap">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="ktp" minlength="16" maxlength="17" type="number" placeholder="NO KTP">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="alamat" type="text" placeholder="Alamat Lengkap">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="no_hp" minlength="12" maxlength="15" type="number" placeholder="081123123123">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="email" type="email" placeholder="test@xyz.com">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="tgl_lahir" type="date">
            <select class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="kelamin" id="kelamin">
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
            <select class=" justify-self-start p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="role_id" id="role_id">
              <option value="1">Admin</option>
              <option value="2">User</option>
            </select>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <button class="p-2 btn_register duration-500 w-full py-2 px-4 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit">Save?</button>
      </div>
      <div class="mt-3">
        <a id="cancel" class="text-sm font-black text-gray-600 block text-center" href="<?= BASEURL ?>/people/peoples">Cancel</a>
      </div>
    </form>
  </div>
</div>