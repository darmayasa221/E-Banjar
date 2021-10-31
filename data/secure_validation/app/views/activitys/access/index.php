<div class="right-side-conten">
  <div class="about-peoples">
    <table class="shadow-2xl w-full rounded overflow-hidden">
      <thead class="text-center bg-blue-500 flex text-white w-full">
        <tr class="flex w-full mb-4">
          <th class="p-4 w-1/6">Foto</th>
          <th class="p-4 w-1/4">Judul</th>
          <th class="p-4 w-1/3">Deskripsi</th>
          <th class="p-4 w-1/6">Tanggal</th>
          <th class="mr-5 p-4 w-1/8">Edit/Delete</th>
        </tr>
      </thead>
      <tbody class=" border border-fuchsia-600 text-left flex flex-col items-center justify-between overflow-y-scroll w-full">
        <?php foreach ($data as $key => $value) : ?>
          <tr class="<?= $key ?> border-b-2 border-fuchsia-600 flex w-full">
            <td class=" flex justify-center p-4 text-center border-r-2 border-fuchsia-600 w-1/6">
              <img src="<?= BASEURL ?>/img/avatar/<?= $value['foto_kegiatan'] ?>" alt="<?= $value['foto_kegiatan'] ?>">
            </td>
            <td class=" p-4 text-center border-r-2 border-fuchsia-600 w-1/4"><?= ($value['nama_kegiatan']) ?></td>
            <td class=" border-r-2 border-fuchsia-600 w-1/3"><?= $value['deskripsi'] ?></td>
            <td class="p-4 text-center w-1/6 border-r-2 border-fuchsia-600"><?= $value['waktu_kegiatan'] ?></td>
            <td class=" p-4 text-center w-1/8">
              <div class="flex flex-col items-center justify-center h-full">
                <button class=" m-2 w-full duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" onclick="location.href='<?= BASEURL ?>/activitys/form/<?= $value['nama_kegiatan'] ?>/<?= $value['id'] ?>';">Edit</button>
                <button class=" m-2 w-full duration-300 bg-blue-500 hover:bg-red-500 rounded-md text-white text-m" onclick="location.href='<?= BASEURL ?>/activitys/remove/<?= $value['id'] ?>';">Delete</button>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>