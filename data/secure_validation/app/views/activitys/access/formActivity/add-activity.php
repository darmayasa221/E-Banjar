<div class="right-side">
  <div class="conten justify-center">
    <form class="flex flex-col items-center" action="<?= BASEURL ?>/activitys/toDo/add" method="POST" enctype="multipart/form-data">
      <h1 class="text-5xl font-bold"><?= $headline ?></h1>
      <br />
      <div class="flex flex-col w-1/2">
        <div class="border-b-2 pb-3">
          <input type="file" name="foto_kegiatan">
        </div>
        <div class="flex">
          <div class="justify-between font-bold flex flex-col w-1/4">
            <label for="nama_kegiatan">Judul</label>
            <label for="deskripsi">Description</label>
            <label for="waktu_kegiatan">Waktu Kegitan</label>
          </div>
          <div class=" flex flex-col w-3/4">
            <input class=" p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="text" name="nama_kegiatan" id="nama_kegiatan" placeholder="Judul kegiatan" />
            <textarea class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" name="deskripsi" id="deskripsi" placeholder="Deskripsi"></textarea>
            <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="date" name="waktu_kegiatan" id="waktu_kegiatan" placeholder="yyyy/mm/dd" />
          </div>
        </div>
      </div>
      <div class="mt-3">
        <button class="p-2 btn_register duration-500 w-full py-2 px-4 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit">Save?</button>
      </div>
      <div class="mt-3">
        <a id="cancel" class="text-sm font-black text-gray-600 block text-center" href="<?= BASEURL ?>/activitys/index">Cancel</a>
      </div>
    </form>
  </div>
</div>