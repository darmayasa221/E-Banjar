<div class="main_wraper ">
  <nav class="navbar_container">
    <div class="navbar font-bold">
      <a id="login" href="<?= BASEURL ?>/auth">
        Login
      </a>
    </div>
  </nav>
  <main>
    <div class="conten wellcome">
      <div class="search_content ">
        <h1 class="text-5xl font-bold">Wellcome To E-Banjar</h1>
        <?php if (is_null($param) || $param === '') {
          echo '<h2 class="text-3xl">Search Any What You Want...</h2>';
        } else {
          echo "<h2 class='text-3xl'>You Search <i>$param</i> </h2>";
        }; ?>
        <form class="flex w-full flex-col" action="<?= BASEURL ?>/wellcome/search" method="GET">
          <span class="flex justify-center mt-2">
            <input class="mr-2 w-5/6 p-2 border border-gray-300 rounded duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" placeholder="Search Here..." name="keyword" id="keyword" autocomplete="off" />
            <button class="p-2 border border-gray-300 duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit" id="search">Search</button>
          </span>
        </form>
      </div>
      <div class="wrap_wel ">
        <div class="wel_act overflow-y-scroll w-1/2 flex flex-row">
          <?php foreach ($data as $key => $value) : ?>
            <div class="card_activity <?= $key ?>">
              <img src="<?= BASEURL ?>/img/src/<?= $value['foto_kegiatan'] ?>" alt="<?= $value['foto_kegiatan'] ?>">
              <p><?= ($value['nama_kegiatan']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>