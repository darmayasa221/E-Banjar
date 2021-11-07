<div class="right-side">
  <div class="conten items-center  justify-center">
    <div class="activity_img">
      <img src="<?= BASEURL ?>/img/src/<?= $data['foto_kegiatan'] ?>" alt="<?= $data['foto_kegiatan'] ?>" />
    </div>
    <div class="activity_description w-1/2 flex flex-col text-center py-4">
      <h3><?= $data['nama_kegiatan'] ?></h3>
      <div class="border-t-2 border-light-blue-500 border-opacity-50">
        <p><?= $data['deskripsi'] ?></p>
        <p class="font-bold py-5"> Waktu Kegiatan : <?= $data['waktu_kegiatan'] ?></p>
      </div>
    </div>
    <div class="mt-3">
      <a class="text-sm font-black text-gray-600 block text-center" href="<?= BASEURL ?>/activitys/index">Back</a>
    </div>
  </div>
</div>