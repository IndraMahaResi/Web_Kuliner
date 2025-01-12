<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title>Tentang Kami</title>
    <style>
        body {
            background: linear-gradient(120deg, #f3eac2, #f9f5f1);
            color: #6f4e37;
            font-family: 'Roboto', sans-serif;
        }

        h1, h2 {
            color: #6f4e37;
            font-family: 'Playfair Display', serif;
        }

        .about-container {
            text-align: center;
            padding: 50px 20px;
        }

        .gallery-container {
            margin-top: 40px;
        }

        .gallery-item {
            margin-bottom: 20px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-weight: bold;
        }

        footer {
            background-color: #6f4e37;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- About Section -->
        <div class="about-container">
            <h1 class="my-4">Tentang Kami</h1>
            <p>Kami adalah platform yang menyediakan informasi tentang kuliner tradisional Indonesia.</p>
            <p>Visi kami adalah untuk melestarikan dan mempromosikan kekayaan kuliner Indonesia kepada dunia.</p>
        </div>

        <!-- Gallery Section -->
        <div class="gallery-container">
            <h2 class="text-center mb-4">Galeri Kuliner Tradisional</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/rendang.jpg" class="card-img-top" alt="Rendang">
                        <div class="card-body text-center">
                            <h5 class="card-title">Rendang</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/nasgor.jpg" class="card-img-top" alt="Nasi Goreng">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nasi Goreng</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/sate.jpg" class="card-img-top" alt="Sate Ayam">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sate Ayam</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/gado.jpg" class="card-img-top" alt="Gado-gado">
                        <div class="card-body text-center">
                            <h5 class="card-title">Gado-gado</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/bakso.jpg" class="card-img-top" alt="Bakso">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bakso</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/pempek.jpg" class="card-img-top" alt="Pempek">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pempek</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
