<div class="right-side">
  <div class="conten justify-center">
    <form class="flex flex-col items-center" action=" <?= BASEURL ?>/people/toDo/update" method="POST" enctype="multipart/form-data">
      <div class="flex justify-center mb-10">
        <img class="img_usr shadow-2xl" src="<?= BASEURL ?>/img/src/<?= $data['avatar'] ?>" alt="profile">
      </div>
      <div class="flex flex-col w-1/2">
        <div class="border-b-2 pb-3">
          <input type="hidden" name="avatar_before" value="<?= $data['avatar'] ?>">
          <input type="hidden" name="role_id" value="<?= $data['role_id'] ?>">
          <input type="hidden" name="date_created" value="<?= $data['date_created'] ?>">
          <input type="hidden" name="ktp" value="<?= $data['ktp'] ?>">
          <input type="hidden" name="nama" value="<?= $data['nama'] ?>">
          <input type="hidden" name="kelamin" value="<?= $data['kelamin'] ?>">
          <input type="hidden" name="alamat" value="<?= $data['alamat'] ?>">
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
          </div>
          <div class="flex flex-col w-3/4">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" disabled name="nama" type="text" value=<?= $data['nama'] ?> />
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" disabled name="ktp" type="number" value=<?= $data['ktp'] ?> />
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" disabled name="alamat" type="text" placeholder="Alamat Lengkap" value=<?= $data['alamat'] ?> />
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="no_hp" type="number" placeholder="081123123123" value=<?= $data['no_hp'] ?> />
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="email" type="email" placeholder="test@xyz.com" value=<?= $data['email'] ?> />
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="tgl_lahir" type="date" value=<?= $data['tgl_lahir'] ?> />
            <select class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" disabled name="kelamin" id="kelamin">
              <option value="<?= $data['kelamin'] ?>"><?= $data['kelamin'] ?></option>
            </select>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <button class="p-2 btn_register duration-500 w-full py-2 px-4 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit">Save?</button>
      </div>
      <div class="mt-3">
        <a class="text-sm font-black text-gray-600 block text-center" href="<?= BASEURL ?>/home">Cancel</a>
      </div>
    </form>
  </div>
</div>