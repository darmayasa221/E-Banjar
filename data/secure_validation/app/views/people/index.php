<div class="right-side">
  <div class="conten">
    <div class="search flex text-center flex-col content-center mb-5">
      <h1 class="text-5xl font-bold">Wellcome To E-Banjar</h1>
      <h2 class="text-3xl">Cari Masyarakat E-Banjar</h2>
      <form class="flex w-full flex-col" action="<?= BASEURL ?>/people/index" method="POST">
        <span class="flex justify-center mt-2">
          <input class="mr-2 w-5/6 p-2 border border-gray-300 rounded duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" placeholder="Search Here..." name="keyword" id="keyword" autocomplete="off" />
          <button class="p-2 border border-gray-300 duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit" id="search">Search</button>
        </span>
      </form>
    </div>
    <div class="tabel flex content-center px-3">
      <table class="shadow-2xl w-full rounded overflow-hidden">
        <thead class="text-center bg-blue-500 flex text-white w-full">
          <tr class="flex w-full">
            <th class="py-4 w-1/4">Nama</th>
            <th class="py-4 w-1/4">No HP</th>
            <th class="py-4 w-1/5">Tanggal Lahir</th>
            <th class="py-4 w-full">Alamat</th>
          </tr>
        </thead>
        <tbody class=" border border-fuchsia-600 text-left flex flex-col items-center justify-between overflow-y-scroll w-full">
          <?php foreach ($data as $key => $value) : ?>
            <tr class='<?= $key ?> border-b-2 border-fuchsia-600 flex w-full'>
              <td class=' text-center border-r-2 border-fuchsia-600 w-1/4'><?= $value["nama"] ?></td>
              <td class=' text-center border-r-2 border-fuchsia-600 w-1/4'><?= $value["no_hp"] ?></td>
              <td class=' text-center border-r-2 border-fuchsia-600 w-1/5'><?= $value["tgl_lahir"] ?></td>
              <td class=' text-center border-r-2 border-fuchsia-600 w-full'><?= $value["alamat"] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- <div class="search_content">
    <h1 class="text-5xl font-bold">Wellcome To E-Banjar</h1>
    <h2 class="text-3xl">Cari Masyarakat E-Banjar</h2>
    <form class="flex w-full justify-center flex-col" action="<?= BASEURL ?>/people/index" method="POST">
      <span>
        <input class="w-5/6 p-2 border border-gray-300 rounded mt-2 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" placeholder="Search Here..." name="keyword" id="keyword" autocomplete="off" />
        <button class=" p-2 border border-gray-300 duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit" id="search">Search</button>
      </span>
    </form>
  </div> -->
</div>