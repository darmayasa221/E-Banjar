<div class="right-side-conten">
  <div class="about-peoples">
    <table class="shadow-2xl w-full rounded overflow-hidden">
      <thead class="text-center bg-blue-500 flex text-white w-full">
        <tr class="flex w-full mb-4">
          <th class="p-4 w-1/5">Nama</th>
          <th class="p-4 w-1/5">NIK</th>
          <th class="p-4 w-1/6">Email</th>
          <th class="p-4 w-1/6">No HP</th>
          <th class="p-4 w-1/8">L/P</th>
          <th class="p-4 w-1/2">Alamat</th>
          <th class="p-4 w-1/7">Edit/Delete</th>
        </tr>
      </thead>
      <tbody class=" border border-fuchsia-600 text-left flex flex-col items-center justify-between overflow-y-scroll w-full">
        <?php foreach ($data as $key => $value) : ?>
          <tr class="<?= $key ?> border-b-2 border-fuchsia-600 flex w-full">
            <td class=" p-4 text-center border-r-2 border-fuchsia-600 w-1/5"><?= $value['nama'] ?></td>
            <td class=" p-4 text-center border-r-2 border-fuchsia-600 w-1/5"><?= $value['ktp'] ?></td>
            <td class=" p-4 text-center border-r-2 border-fuchsia-600 w-1/6"><?= $value['email'] ?></td>
            <td class=" p-4 text-center border-r-2 border-fuchsia-600 w-1/6"><?= $value['no_hp'] ?></td>
            <td class=" p-4 text-center border-r-2 border-fuchsia-600 w-1/8"><?= $value['kelamin'] ?></td>
            <td class=" border-r-2 border-fuchsia-600 w-1/2"><?= $value['alamat'] ?></td>
            <td class=" p-4 text-center border-r-2 border-fuchsia-600 w-1/7">
              <div class="flex flex-col items-center justify-center h-full">
                <button class=" m-2 w-full duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" onclick="location.href='<?= BASEURL ?>/people/people/<?= $value['ktp'] ?>/<?= $value['nama'] ?>';">Edit</button>
                <button class=" m-2 w-full duration-300 bg-blue-500 hover:bg-red-500 rounded-md text-white text-m" onclick="location.href='<?= BASEURL ?>/people/toDo/remove/<?= $value['ktp'] ?>';">Delete</button>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>