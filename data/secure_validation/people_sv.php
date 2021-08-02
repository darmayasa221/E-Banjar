<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/style_navbar.css">
  <link rel="stylesheet" href="../../assets/css/style_home.css">
  <link rel="stylesheet" href="../../assets/css/style_people.css">
  <link rel="stylesheet" href="../../assets/css/tailwind.css">
  <title>E-Banjar</title>
</head>
<body>
  <nav class="navbar_container">
    <div class="navbar_logout font-bold">
      <a class="" href="#">
        Logout
      </a>
    </div>
    <div class="navbar_profile">
      <div class="profile_img">
        <img src="http://placehold.it/50x50" alt="your profile"/>
      </div>
      <div class="ml-7 font-bold">
        <h3>
          Your Name
        </h3>
      </div>
    </div>
  </nav>
  <main>
    <div class="main_container">
      <div class="left-side ">
        <ul class="border-4 border-light-blue-500 border-opacity-50">
          <li class="duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m">
            <a href="profile_sv.php">
              Profile
            </a>
          </li>
          <li class="duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m">
            <a>
              Kegiatan Masyarakat 
            </a>
          </li>
          <li class="duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m">
            <a>
              Pencarian Masyarakat
            </a>
          </li>
        </ul>
      </div>
      <div class="right-side">
        <div class="right-side-conten ">
          <div class="search_content">
            <h1 class="text-5xl font-bold">Wellcome To E-Banjar</h1>
            <h2 class="text-3xl">Cari Masyarakat E-Banjar</h2>
            <form>
              <input class="w-full p-2 border border-gray-300 rounded mt-2 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" placeholder="Search Here..."/>
            </form>
          </div>
          <div class="about-peoples">
            <table class="shadow-2xl w-full rounded overflow-hidden" >
              <thead class="text-center bg-blue-500 flex text-white w-full">
                <tr class="flex w-full mb-4">
                  <th class="p-4 w-1/4">Nama</th>
                  <th class="p-4 w-1/6">No HP</th>
                  <th class="p-4 w-full">Alamat</th>
                </tr>
              </thead>
              <tbody class=" border border-fuchsia-600 text-left flex flex-col items-center justify-between overflow-y-scroll w-full">
                <tr class="border-b-2 border-fuchsia-600 flex w-full  ">
                  <td class=" text-center border-r-2 border-fuchsia-600 w-1/4">Dogs</td>
                  <td class=" text-center border-r-2 border-fuchsia-600 w-1/6">Cats</td>
                  <td class=" border-r-2 border-fuchsia-600 w-full">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, deserunt. Quidem quas culpa similique nobis officia laboriosam voluptatibus reiciendis veniam eveniet obcaecati, libero commodi possimus, rem ut, est consequuntur porro!</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>