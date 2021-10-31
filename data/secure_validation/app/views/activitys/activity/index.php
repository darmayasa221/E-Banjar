<div class="right-side-conten ">
  <div class="activity_img">
    <img src="<?= BASEURL ?>/img/avatar/<?= $data['foto_kegiatan'] ?>" alt="<?= $data['foto_kegiatan'] ?>" />
  </div>
  <div class="activity_description">
    <h3><?= $data['nama_kegiatan'] ?></h3>
    <p><?= $data['deskripsi'] ?></p>
    <p><?= $data['waktu_kegiatan'] ?></p>
  </div>
  <div class="mt-5">
    <form class="activity_comment">
      <textarea class="p-2 border border-gray-300 rounded  duration-300 hover:shadow-xl" name="comment" id="comment" placeholder="Comment Here"></textarea>
      <button class="p-2 btn_rgs btn_register duration-500  bg-blue-500 rounded-md text-white text-sm" type="submit" name="feedback">Send</button>
    </form>
  </div>
  <div class="shadow-2xl m-5 bg-white p-4 max-h-80 overflow-y-scroll">
    <div class="bg-gray-50 flex rounded">
      <div class=" border-r-2 flex flex-col items-center justify-center p-2">
        <img src="http://placehold.it/50x50" alt="person" width="50" height="50">
        <h1 class="text-sm font-semibold">Name</h1>
      </div>
      <div class="flex flex-col text-justify p-2">
        <p class="font-semibold">coment</p>
        <p class="font-extralight">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis cumque expedita, praesentium iusto rem numquam! Dolores illum adipisci suscipit provident at porro, eius sed quibusdam? Sit quas reiciendis ut rerum.</p>
      </div>
    </div>
  </div>
</div>