<div class="right-side">
  <div class="right-side-conten ">
    <form class="about_profile" action="<?= BASEURL ?>/activitys/updateData" method="POST" enctype="multipart/form-data">
      <div class="about_form">
        <div class="flex justify-between items-center border-b-2 pb-3">
          <input type="hidden" name="id" value="<?= $data['id'] ?>">
          <input type="hidden" name="foto_kegiatan_before" value="<?= $data['foto_kegiatan'] ?>">
          <input type="file" name="foto_kegiatan">
        </div>
        <div class="detail_profile">
          <label for="nama_kegiatan">Judul</label>
          <input class=" p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="text" name="nama_kegiatan" id="nama_kegiatan" placeholder="Judul kegiatan" value="<?= $data["nama_kegiatan"] ?>" />
        </div>
        <div class="detail_profile">
          <label for="deskripsi">Description</label>
          <textarea class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?= $data["deskripsi"] ?></textarea>
        </div>
        <div class="detail_profile">
          <label for="deskripsi">Waktu Kegitan</label>
          <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="date" name="waktu_kegiatan" id="waktu_kegiatan" placeholder="yyyy/mm/dd" value="<?= $data["waktu_kegiatan"] ?>"></input>
        </div>
      </div>
      <div class="mt-3">
        <button class="p-2 btn_register duration-500 w-full py-2 px-4 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit">update</button>
      </div>
      <div class="mt-3">
        <a class="text-sm font-black text-gray-600 block text-center" href="<?= BASEURL ?>/activitys/adminActivity">Cancel</a>
      </div>
    </form>
  </div>
</div>