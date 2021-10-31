<div class="right-side-conten ">
  <div class="search_content ">
    <h1 class="text-5xl font-bold">Wellcome To E-Banjar</h1>
    <h2 class="text-3xl">Search Any What You Want...</h2>
    <form class="flex w-full justify-center flex-col" action="<?= BASEURL ?>/activitys/search" method="POST">
      <span>
        <input class="w-5/6 p-2 border border-gray-300 rounded mt-2 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" placeholder="Search Here..." name="keyword" id="keyword" autocomplete="off" />
        <button class=" p-2 border border-gray-300 duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit" id="search">Search</button>
      </span>
    </form>
  </div>
  <div class="activity_wraper">
    <div class="activity_container px-4">
      <?php foreach ($data as $key => $value) : ?>
        <div class="activity_card <?= $key ?> shadow-lg mx-2">
          <img src="<?= BASEURL ?>/img/avatar/<?= $value['foto_kegiatan'] ?>" alt="<?= $value['foto_kegiatan'] ?>">
          <p><?= ($value['nama_kegiatan']) ?></p>
          <a class="duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" href="<?= BASEURL ?>/activitys/activity/<?= $value['nama_kegiatan'] ?>/<?= $value['id'] ?>">Lihat</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>