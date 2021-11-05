<div class="right-side">
  <div class="conten justify-center">
    <form class="flex flex-col items-center" action=" <?= BASEURL ?>/people/toDo/update" method="POST" enctype="multipart/form-data">
      <div class="flex justify-center mb-10">
        <img class="shadow-2xl" src="http://placehold.it/200x200" alt="profile">
      </div>
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
          </div>
          <div class=" flex flex-col w-3/4">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" disabled name="nama" type="text" placeholder="Nama Lengkap">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" disabled name="ktp" type="number" placeholder="NO KTP">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="alamat" type="text" placeholder="Alamat Lengkap">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="no_hp" type="number" placeholder="081123123123">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="email" type="text" placeholder="test@xyz.com">
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="tgl_lahir" type="date">
            <select class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" disabled name="kelamin" id="kelamin">
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
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
<!-- <div class="right-side ">
  <div class="right-side-conten ">
    <form class="about_profile">
      <div class="flex justify-center mb-10">
        <img class="shadow-2xl" src="http://placehold.it/200x200" alt="profile">
      </div>
      <div class="about_form">
        <div class="flex justify-between items-center border-b-2 pb-3">
          <input type="file">
          <input class="btn_register duration-500 py-2 px-4 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit" value="Upload">
        </div>
        <div class="detail_profile">
          <label for="name">Nama</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="text" value="I Made Darma Yasa">
        </div>
        <div class="detail_profile">
          <label for="name">NIK</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="number" value="1122334455667788">
        </div>
        <div class="detail_profile">
          <label for="name">No Hp</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="number" value="085111222333">
        </div>
        <div class="detail_profile">
          <label for="name">Alamat</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="text" value="denpasar, renon no 10">
        </div>
      </div>
      <div class="mt-3">
        <button class="p-2 btn_register duration-500 w-full py-2 px-4 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit" name="login">Save?</button>
      </div>
      <div class="mt-3">
        <a class="text-sm font-black text-gray-600 block text-center" href="<?= BASEURL ?>/home">return to first pages?</a>
      </div>
    </form>
  </div>
</div> -->