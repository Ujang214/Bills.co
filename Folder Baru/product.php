<!DOCTYPE html>
<html>

<head>
    <title>Bills.co | Brand Thrifting Terbaik</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f0f0f0;
        }

        .container {
            margin: 0;
            /* Menghapus margin */
            padding: 0;
            /* Menghapus padding */
        }

        .produk-container {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: scroll;
            margin: 0;
            /* Menghapus margin samping kiri dan kanan */
            padding: 0;
            /* Menghapus padding samping kiri dan kanan */
        }

        .produk-card {
            flex: 0 0 auto;
            width: 250px;
            margin-right: 20px;
        }

        .produk-card .card-footer {
            text-align: center;
            /* Pusatkan tombol Beli Sekarang */
        }

        .dark-mode {
            background-color: #333;
            color: #fff;
        }

        .dark-mode .card-title,
        .dark-mode .card-text {
            color: #fff;
            /* Atur warna teks untuk mode gelap */
        }

        .navbar.active {
            background-color: #333;
            color: #fff;
        }

        .produk-card:hover {
            transform: scale(0.9);
            /* Perkecil kartu saat dihover */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            /* Tambahkan bayangan saat dihover */
        }

        .contact-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 20vh;
        }

        .social-icons {
            color: black;
            font-size: 36px;
            margin: 10px;
        }

        .contact-text {
            font-size: 18px;
            margin: 10px;
            font-weight: bold
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Bills.co</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#tshirt">T-shirt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#jaket">Jaket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#crewneck">Crewneck</a>
                </li>
                <li class="nav-item">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="darkModeToggle">
                        <label class="custom-control-label" for="darkModeToggle">Dark Mode</label>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <h2 id="tshirt">T-shirt</h2>
        <div class="produk-container">
            <!-- Produk T-shirt -->
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <div class="produk-card">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1622445275463-afa2ab738c34?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHRzaGlydHxlbnwwfHwwfHx8MA%3D%3D<?php echo $i; ?>"
                            class="card-img-top" alt="T-shirt <?php echo $i; ?>">
                        <div class="card-body">
                            <h5 class="card-title">T-shirt
                                <?php echo $i; ?>
                            </h5>
                            <p class="card-text">$20.00</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <h2 id="jaket">Jaket</h2>
        <div class="produk-container">
            <!-- Produk Jaket -->
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <div class="produk-card">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1620780006725-00bda327a039?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Y3Jld25lY2t8ZW58MHx8MHx8fDA%3D<?php echo $i; ?>"
                            class="card-img-top" alt="Jaket <?php echo $i; ?>">
                        <div class="card-body">
                            <h5 class="card-title">Jaket
                                <?php echo $i; ?>
                            </h5>
                            <p class="card-text">$50.00</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <h2 id="crewneck">Crewneck</h2>
        <div class="produk-container">
            <!-- Produk Crewneck -->
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <div class="produk-card">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1627637454030-5ddd536e06e5?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGphY2tldHxlbnwwfHwwfHx8MA%3D%3D<?php echo $i; ?>"
                            class="card-img-top" alt="Crewneck <?php echo $i; ?>">
                        <div class="card-body">
                            <h5 class="card-title">Crewneck
                                <?php echo $i; ?>
                            </h5>
                            <p class="card-text">$30.00</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container-fluid">
        <div class="contact-container">
            <div class="contact-text">Hubungi Kami Disini:</div>
            <div class="social-icons">
                <a href="https://www.facebook.com/ddn.hrynto">
                    <i class="fa fa-facebook"></i>
                </a>
            </div>
            <div class="social-icons">
                <a href="https://www.instagram.com/ddungg21_">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
            <div class="social-icons">
                <a href="https://api.whatsapp.com/send?phone=6288289274111">
                    <i class="fa fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>

    <script>
        // Dark mode toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;

        darkModeToggle.addEventListener('change', () => {
            body.classList.toggle('dark-mode');
        });

        // Navbar yang aktif saat digulir
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('active');
            } else {
                navbar.classList.remove('active');
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>