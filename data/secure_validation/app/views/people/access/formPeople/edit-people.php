<div class="right-side">
  <div class="right-side-conten ">
    <form class="about_profile" action=" <?= BASEURL ?>/people/toDo/update" method="POST" enctype="multipart/form-data">
      <h1 class="text-5xl font-bold"><?= $headline ?></h1>
      <br />
      <div class="about_form">
        <div class="flex justify-between items-center border-b-2 pb-3">
          <input type="hidden" name="avatar_before" value="<?= $data['avatar'] ?>">
          <input type="hidden" name="date_created" value="<?= $data['date_created'] ?>">
          <input type="file" name="avatar">
        </div>
        <div class="detail_profile">
          <label for="nama">Nama</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="nama" type="text" value="<?= $data['nama'] ?>">
        </div>
        <div class="detail_profile">
          <label for="ktp">NIK</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="ktp" type="number" value="<?= $data['ktp'] ?>">
        </div>
        <div class="detail_profile">
          <label for="alamat">Alamat</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="alamat" type="text" value="<?= $data['alamat'] ?>">
        </div>
        <div class="detail_profile">
          <label for="no_hp">No Hp</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="no_hp" type="number" value="<?= $data['no_hp'] ?>">
        </div>
        <div class="detail_profile">
          <label for="email">Email</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="email" type="text" value="<?= $data['email'] ?>">
        </div>
        <div class="detail_profile">
          <label for="tgl_lahir">Tanggal Lahir</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="tgl_lahir" type="date" value="<?= $data['tgl_lahir'] ?>">
        </div>
        <div class="detail_profile">
          <label for="kelamin">Jenis Kelamin</label>
          <select class=" justify-self-start p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="kelamin" id="kelamin">
            <option value="<?= $data['kelamin'] ?>" hidden><?= $data['kelamin'] ?></option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
        <div class="detail_profile">
          <label for="role_id">Jenis Kelamin</label>
          <select class=" justify-self-start p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="kelamin" id="kelamin">
            <option value="<?= $data['role_id'] ?>" hidden><?= $data['role_id'] ?></option>
            <option value="1">Admin</option>
            <option value="2">User</option>
          </select>
        </div>
      </div>
      <div class="mt-3">
        <button class="p-2 btn_register duration-500 w-full py-2 px-4 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit">Update?</button>
      </div>
      <div class="mt-3">
        <a class="text-sm font-black text-gray-600 block text-center" href="<?= BASEURL ?>/people">Cancel</a>
      </div>
    </form>
  </div>
</div>