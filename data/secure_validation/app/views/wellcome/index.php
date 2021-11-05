<div class="main_wraper ">
  <nav class="navbar_container">
    <div class="navbar font-bold">
      <a href="<?= BASEURL ?>/login">
        Login
      </a>
    </div>
  </nav>
  <main>
    <div class="conten wellcome">
      <div class="search_content ">
        <h1 class="text-5xl font-bold">Wellcome To E-Banjar</h1>
        <h2 class="text-3xl">Search Any What You Want...</h2>
        <form class="flex w-full flex-col" action="<?= BASEURL ?>/wellcome" method="GET">
          <span class="flex justify-center mt-2">
            <input class="mr-2 w-5/6 p-2 border border-gray-300 rounded duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" placeholder="Search Here..." name="keyword" id="keyword" autocomplete="off" />
            <button class="p-2 border border-gray-300 duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit" id="search">Search</button>
          </span>
        </form>
      </div>
      <div class="wrap_wel ">
        <div class="wel_act overflow-y-scroll w-1/2 flex flex-row">
          <div class="card_activity <?= $key ?>">
            <img src="" alt="">
            <p>teset</p>
          </div>
          <div class="card_activity <?= $key ?>">
            <img src="" alt="">
            <p>teset</p>
          </div>
          <div class="card_activity <?= $key ?>">
            <img src="" alt="">
            <p>teset</p>
          </div>
          <div class="card_activity <?= $key ?>">
            <img src="" alt="">
            <p>teset</p>
          </div>
          <div class="card_activity <?= $key ?>">
            <img src="" alt="">
            <p>teset</p>
          </div>
          <div class="card_activity <?= $key ?>">
            <img src="" alt="">
            <p>teset</p>
          </div>
          <div class="card_activity <?= $key ?>">
            <img src="" alt="">
            <p>teset</p>
          </div>
          <!-- <?php foreach ($data as $key => $value) : ?>
            <div class="card_activity <?= $key ?>">
              <img src="<?= BASEURL ?>/img/avatar/<?= $value['foto_kegiatan'] ?>" alt="<?= $value['foto_kegiatan'] ?>">
              <p><?= ($value['nama_kegiatan']) ?></p>
              <a class="w-1/2 duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" href="<?= BASEURL ?>/activitys/activity/<?= $value['nama_kegiatan'] ?>/<?= $value['id'] ?>">Lihat</a>
            </div>
          <?php endforeach; ?> -->
        </div>
      </div>
    </div>