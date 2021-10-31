<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../assets/css/style_home.css">
  <link rel="stylesheet" href="../../../assets/css/style_navbar.css">
  <link rel="stylesheet" href="../../../assets/css/style_activity.css">
  <link rel="stylesheet" href="../../../assets/css/tailwind.css">
  <title>Kegiatan Masyarakat</title>
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
          <div class="activity_img">
            <img src="http://placehold.it/500x250" alt="activity"/>
          </div>
          <div class="activity_description">
            <h3>Judul</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam placeat eum reprehenderit minima odit nisi tenetur aut magnam, odio distinctio. Aspernatur enim repellat ipsum nihil minima eveniet iusto dolor magni! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur doloribus dolorem iure vel ab magni, veritatis dolores numquam! Nostrum deserunt laudantium odit, ipsa voluptates non necessitatibus. Odit inventore quae dicta!</p>
          </div>
          <div class="mt-5">
            <form class="activity_comment">
              <textarea class="p-2 border border-gray-300 rounded  duration-300 hover:shadow-xl" name="comment" id="comment" placeholder="Comment Here"></textarea>
              <button class="p-2 btn_rgs btn_register duration-500  bg-blue-500 rounded-md text-white text-sm" type="submit" name="feedback">Send</button>  
            </form>
          </div>
          <div class="shadow-2xl m-5 bg-white p-4 max-h-80 overflow-y-scroll">
            <div class="bg-gray-50 flex rounded">
              <div class=" border-r-2 flex flex-col items-center justify-center p-2">
                <img src="http://placehold.it/50x50" alt="person" width="50" height="50">
                <h1 class="text-sm font-semibold">Name</h1>
              </div>
              <div class="flex flex-col text-justify p-2">
                <p class="font-semibold">coment</p>
                <p class="font-extralight">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis cumque expedita, praesentium iusto rem numquam! Dolores illum adipisci suscipit provident at porro, eius sed quibusdam? Sit quas reiciendis ut rerum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>