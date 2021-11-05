<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../../assets/css/style_navbar.css">
  <link rel="stylesheet" href="../../../../assets/css/style_home.css">
  <link rel="stylesheet" href="../../../../assets/css/style_profile.css">
  <link rel="stylesheet" href="../../../../assets/css/tailwind.css">
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
              Tambah Kegiatan 
            </a>
          </li>
          <li class="duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m">
            <a>
              Pencarian Masyarakat
            </a>
          </li>
          <li class="duration-300 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m">
            <a>
              Tambah Masyarakat
            </a>
          </li>
        </ul>
      </div>
      <div class="right-side">
        <div class="right-side-conten ">
          <form class="about_profile">
            <div class="about_form">
              <div class="detail_profile">
                <label for="name">Nama</label>
                <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="text" value="I Made Darma Yasa">
              </div>
              <div class="detail_profile">
                <label for="name">Passowrd</label>
                <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="text" value="asdwki13">
              </div>
              <div class="detail_profile">
                <label for="name">NIK</label>
                <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="number" value="1122334455667788">
              </div>
              <div class="detail_profile">
                <label for="name">No Hp</label>
                <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="number" value="085111222333">
              </div>
              <div class="detail_profile">
                <label for="name">Alamat</label>
                <input class="p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl transform hover:-translate-y-1 focus:-translate-y-1" type="text" value="denpasar, renon no 10">
              </div>
            </div>
            <div class="mt-3">
              <button class="p-2 btn_register duration-500 w-full py-2 px-4 bg-blue-500 hover:bg-green-500 rounded-md text-white text-m" type="submit" name="login">Save?</button>
            </div>
            <div class="mt-3">
              <a class="text-sm font-black text-gray-600 block text-center" href="../data_people_sv.php">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>
</html>