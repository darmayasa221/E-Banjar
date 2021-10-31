<div class="right-side">
  <div class="right-side-conten ">
    <form class="about_profile" action=" <?= BASEURL ?>/people/result" method="POST" enctype="multipart/form-data">
      <div class="about_form">
        <div class="flex justify-between items-center border-b-2 pb-3">
          <input type="file" name="avatar">
        </div>
        <div class="detail_profile">
          <label for="nama">Nama</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="nama" type="text" value="I Made Darma Yasa">
        </div>
        <div class="detail_profile">
          <label for="ktp">NIK</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="ktp" type="number" value="1122334455667788">
        </div>
        <div class="detail_profile">
          <label for="alamat">Alamat</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="alamat" type="text" value="denpasar, renon no 10">
        </div>
        <div class="detail_profile">
          <label for="no_hp">No Hp</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="no_hp" type="number" value="085111222333">
        </div>
        <div class="detail_profile">
          <label for="email">Email</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="email" type="text" value="denpasar, renon no 10">
        </div>
        <div class="detail_profile">
          <label for="tgl_lahir">Tanggal Lahir</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="tgl_lahir" type="date" value="denpasar, renon no 10">
        </div>
        <div class="detail_profile">
          <label for="kelamin">Jenis Kelamin</label>
          <select class=" justify-self-start p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="kelamin" id="kelamin">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="mt-3">
        <button class="p-2 btn_register duration-500 w-full py-2 px-4 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit">Save?</button>
      </div>
      <div class="mt-3">
        <a class="text-sm font-black text-gray-600 block text-center" href="<?= BASEURL ?>/people/adminIndex">Cancel</a>
      </div>
    </form>
  </div>
</div>