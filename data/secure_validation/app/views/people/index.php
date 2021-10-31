<div class="right-side-conten ">
  <div class="search_content">
    <h1 class="text-5xl font-bold">Wellcome To E-Banjar</h1>
    <h2 class="text-3xl">Cari Masyarakat E-Banjar</h2>
    <form>
      <input class="w-full p-2 border border-gray-300 rounded mt-2 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" placeholder="Search Here..." />
    </form>
  </div>
  <div class="about-peoples">
    <table class="shadow-2xl w-full rounded overflow-hidden">
      <thead class="text-center bg-blue-500 flex text-white w-full">
        <tr class="flex w-full mb-4">
          <th class="p-4 w-1/4">Nama</th>
          <th class="p-4 w-1/6">No HP</th>
          <th class="p-4 w-full">Alamat</th>
        </tr>
      </thead>
      <tbody class=" border border-fuchsia-600 text-left flex flex-col items-center justify-between overflow-y-scroll w-full">
        <?php
        foreach ($data as $key => $value) {
          echo "
          <tr class='{$key} border-b-2 border-fuchsia-600 flex w-full'>
            <td class=' text-center border-r-2 border-fuchsia-600 w-1/4'>{$value["nama"]}</td>
            <td class=' text-center border-r-2 border-fuchsia-600 w-1/6'>{$value["no_hp"]}</td>
            <td class=' border-r-2 border-fuchsia-600 w-full'>{$value["alamat"]}</td>
          </tr>
          ";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>