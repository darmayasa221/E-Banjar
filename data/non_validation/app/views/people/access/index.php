<div class="right-side">
  <div class="conten">
    <h1 class="text-3xl text-center">Cari Masyarakat E-Banjar</h1>
    <div class="search flex content-center mb-5">
      <form class="flex w-full flex-col" action="<?= BASEURL ?>/people/index/search" method="GET">
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
            <th class="py-4 w-1/6">Nama</th>
            <th class="py-4 w-1/6">NIK</th>
            <th class="py-4 w-1/6">Email</th>
            <th class="py-4 w-1/6">No HP</th>
            <th class="py-4 w-1/12">L/P</th>
            <th class="py-4 w-1/5">Alamat</th>
            <th class="py-4 w-1/12">Edit/Delete</th>
          </tr>
        </thead>
        <tbody class=" border border-fuchsia-600 text-left flex flex-col items-center justify-between overflow-y-scroll w-full">
          <?php foreach ($data as $key => $value) : ?>
            <tr class="<?= $key ?> border-b-2 border-fuchsia-600 flex w-full">
              <td class="text-center border-r-2 border-fuchsia-600 w-1/6"><?= $value['nama'] ?></td>
              <td class=" text-center border-r-2 border-fuchsia-600 w-1/6"><?= $value['ktp'] ?></td>
              <td class=" text-center border-r-2 border-fuchsia-600 w-1/6"><?= $value['email'] ?></td>
              <td class=" text-center border-r-2 border-fuchsia-600 w-1/6"><?= $value['no_hp'] ?></td>
              <td class=" text-center border-r-2 border-fuchsia-600 w-1/12"><?= $value['kelamin'] ?></td>
              <td class=" border-r-2 border-fuchsia-600 w-1/5"><?= $value['alamat'] ?></td>
              <td class=" text-center border-r-2 border-fuchsia-600 w-1/12">
                <div class="flex flex-col items-center justify-center h-full">
                  <button id="edit" class=" m-2 w-full duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" onclick="location.href='<?= BASEURL ?>/people/people/<?= $value['ktp'] ?>/<?= $value['nama'] ?>';">Edit</button>
                  <button id="delete" class=" m-2 w-full duration-300 bg-blue-500 hover:bg-red-500 rounded-md text-white text-m" onclick="location.href='<?= BASEURL ?>/people/toDo/remove/<?= $value['ktp'] ?>';">Delete</button>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>