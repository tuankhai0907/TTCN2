<!DOCTYPE html>
<html>
<head>
    <title>Quản lý đội bóng</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="logo.png" alt="Logo" class="logo-img">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('qlbongda.index') }}">Đội Bóng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cauthu.index') }}">Cầu thủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dịch vụ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Liên hệ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<style>
  .navbar {
    background-color: blue;
  }
  .navbar-nav {
    justify-content: center; /* Căn giữa các liên kết */
    text-align: center; /* Căn giữa nội dung liên kết */
  }
  .navbar {
    display: flex;
    justify-content: center;
    padding: 20px; /* Khoảng cách lề bên trong navbar */
    font-size: 40px; /* Kích thước chữ trong navbar */
  }
  
  .navbar-nav {
    width: 100%;
    justify-content: center;
  }
  
  .navbar-nav .nav-link {
    color: #000000;
    font-size: 16px;
    padding: 10px 15px;
    font-weight: bold;
  }
  
  .navbar-nav .nav-link:hover,
  .navbar-nav .nav-link:focus {
    background-color: #eaeaea;
  }
</style>
   

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>