<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/style_home.css">
  <link rel="stylesheet" href="../../assets/css/stye_navbar.css">
  <link rel="stylesheet" href="../../assets/css/style_activity.css">
  <link rel="stylesheet" href="../../assets/css/tailwind.css">
  <title>Document</title>
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
      <div class="right-side ">
        <div class="right-side-conten ">
          <div>
            <img src="" alt="">
          </div>
          <div>
            <h3>Judul</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur doloribus dolorem iure vel ab magni, veritatis dolores numquam! Nostrum deserunt laudantium odit, ipsa voluptates non necessitatibus. Odit inventore quae dicta!</p>
          </div>
          <div>
            <form>
              <textarea class="w-full p-2 border border-gray-300 rounded mt-1 duration-300 hover:shadow-xl" name="comment" id="comment" placeholder="Comment Here"></textarea>
              <button class="p-2 btn_rgs btn_register duration-500 w-1/6  px-4 bg-blue-500 rounded-md text-white text-sm" type="submit" name="feedback">Send</button>  
            </form>
          </div>
          <div class="shadow-2xl max-w w-full mx-auto mt-5 bg-white p-8 border border-gray-300">
            <div class="bg-gray-50 mb-2 flex">
              <div class="pr-4 border-r-2">
                <img src="../../assets/img/icon1.png" alt="person" width="50" height="50">
                <p class="text-sm font-semibold"></p>
              </div>
              <div class="pl-4">
                <p class="font-semibold">coment</p>
                <p class="font-extralight"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>