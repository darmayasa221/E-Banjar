<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/tailwind.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
  <title>E-Banjar</title>
</head>

<body>
  <div class="main_wraper ">
    <nav class="navbar_container">
      <div class="navbar font-bold">
        <a id="logout" href="<?= BASEURL ?>/auth/logout">
          Logout
        </a>
      </div>
      <div class="navbar_profile">
        <div class="profile_img">
          <img src="<?= BASEURL ?>/img/src/<?= $data['avatar'] ?>" alt="<?= $data['avatar'] ?>" />
        </div>
        <div class="ml-7 font-bold">
          <h3>
            <?= $data['nama'] ?>
          </h3>
        </div>
      </div>
    </nav>
    <main>