<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/customize.css">
  <title>Search</title>
</head>

<body>
  <div class="container d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
    <div class="d-flex flex-row align-items-center menu">
      <a href="https://mail.google.com/mail/?authuser=0&ogbl" class=" menu-text">E-mail</a>
      <a href="https://www.google.co.jp/imghp?hl=en&authuser=0&ogbl" class=" menu-text">Images</a>
      <a href="https://accounts.google.com/SignOutOptions?hl=en&continue=https://www.google.com/"><i class="fas fa-jedi profile-icon" style="margin-left: 1rem;"></i></a>
    </div>
    <div class="row d-flex align-items-center justify-content-center">
      <h1 class="logo text-center mb-5"><i class="fab fa-old-republic mx-3"></i>SEARCH</h1>
      <div class="search col-11">
        <form action="https://www.google.co.jp/search" method="get">
          <input type="hidden" name="hl" value="ja">
          <input type="hidden" name="channel" value="nrow5">
          <i class=" fas fa-jedi search-icon"></i><input type="search" name="q" id="search" class="form-control rounded-pill search-input py-md-3 py-2 px-4" placeholder="Search the web" autocomplete="off">
          <input type="submit" id="submit" style="display:none;">
        </form>
      </div>
    </div>
  </div>
</body>

</html>