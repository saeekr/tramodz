<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAMODZ</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/members.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">TRAMODZ</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <!-- <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profil</span>
                    </a>
                </li> -->
                <li class="sidebar-item">
                    <a href="dashboard" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>DASHBOARD</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="members" class="sidebar-link">
                        <i class="lni lni-layout"></i>
                        <span>DATA ANGGOTA</span>
                    </a>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-dollar"></i>
                        <span>KEUANGAN (KAS)</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="background-color: #212121;">
                        <li class="sidebar-item">
                            <a href="income" class="sidebar-link">
                                <i class="fa-solid fa-arrow-right-to-bracket" style="color: #ffffff;"></i>Pemasukan
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="spending" class="sidebar-link"><i class="fa-solid fa-arrow-right-from-bracket fa-rotate-180" style="color: #ffffff;"></i>Pengeluaran
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-footer">
                <form action="{{url('/logout')}}" method="POST">
                    @csrf
                    <button class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>
        <div class="main p-3">
        </div>
        <div class="container">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

        hamBurger.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("expand");
        });
    </script>
</body>

</html>