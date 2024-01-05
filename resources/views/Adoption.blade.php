<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Adopsi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffebcd; /* Warna Background - Orange Muda */
        }

        .pet-card {
            border: 1px solid #ffcc80; /* Warna Border - Orange Tua */
            border-radius: 10px;
            margin: 10px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .btn-save {
            background-color: #ffa07a; /* Warna Tombol - Light Salmon */
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .btn-primary {
            background-color: #ff8c00; /* Warna Tombol Primer - Dark Orange */
            border-color: #ff8c00;
        }
    </style>
</head>
<body>

    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div class="pet-card">
                    <img src="images/cat 1.jpg" alt="Hewan Peliharaan 1" class="img-fluid">
                    <h2 class="text-2xl font-semibold text-orange-800">Coco</h2>
                    <p>Jenis: Kucing</p>
                    <p>Umur: 7 Bulan</p>
                    <p class="text-gray-700">Deskripsi: Kucing jantan yang ditemukan sejak usia nya 1 bulan. Coco sangat aktif dan suka bermain dengan teman teman nya.</p>
                    <a href="/adopsi/biodata-pet/1" class="btn btn-primary">See</a>
                    <a href="/adopsi/formulir" class="btn btn-primary">Adopsi</a>
                    <button class="btn btn-save" onclick="savePet(1)">Simpan</button>
                </div>
            </div>

            <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div class="pet-card">
                    <img src="images/cat 3.jpg" alt="Blacky" class="img-fluid">
                    <h2 class="text-2xl font-semibold text-orange-800">Blacky</h2>
                    <p>Jenis: Kucing</p>
                    <p>Umur: 1 tahun</p>
                    <p class="text-gray-700">Deskripsi: Blacky adalah kucing jantan sangat ceria, ia selalu senang jika dimandikan. Blacky sangat manja ketika sedang sakit.</p>
                    <a href="/adopsi/biodata-pet/2" class="btn btn-primary">See</a>
                    <a href="/adopsi/formulir" class="btn btn-primary">Adopsi</a>
                    <button class="btn btn-save" onclick="savePet(1)">Simpan</button>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3">
                <div class="pet-card">
                    <img src="images/cat.jpg" alt="Manies" class="img-fluid">
                    <h2 class="text-2xl font-semibold text-orange-800">Luna</h2>
                    <p>Jenis: Kucing</p>
                    <p>Umur: 5  Bulan</p>
                    <p class="text-gray-700">Deskripsi: Luna adalah kucing betina yang sangat lucu. Luna juga sering diberikan vitamin yang membuat bulu nya tumbuh dengan bagus.</p>
                    <a href="/adopsi/biodata-pet/2" class="btn btn-primary">See</a>
                    <a href="/adopsi/formulir" class="btn btn-primary">Adopsi</a>
                    <button class="btn btn-save" onclick="savePet(2)">Simpan</button>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3">
                <div class="pet-card">
                    <img src="images/dog 2.jpg" alt="Hewan Peliharaan 1" class="img-fluid">
                    <h2 class="text-2xl font-semibold text-orange-800">Roxy</h2>
                    <p>Jenis: Anjing</p>
                    <p>Umur: 2 Bulan</p>
                    <p class="text-gray-700">Deskripsi: Roxy adalah anjing yang lucu dan imut. Roxy sangat menyukai daging cincang yang dicampurkan dengan wortel, itu lah mengapa Roxy sangat berisi tubuhnya.</p>
                    <a href="/adopsi/biodata-pet/2" class="btn btn-primary">See</a>
                    <a href="/adopsi/formulir" class="btn btn-primary">Adopsi</a>
                    <button class="btn btn-save" onclick="savePet(2)">Simpan</button>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3">
                <div class="pet-card">
                    <img src="images/dog 1.jpg" alt="Hewan Peliharaan 3" class="img-fluid">
                    <h2 class="text-2xl font-semibold text-orange-800">Milo</h2>
                    <p>Jenis: Anjing</p>
                    <p>Umur: 5 Bulann</p>
                    <p class="text-gray-700">Deskripsi: Milo adalah anjing betina yang sangat lucu. Milo sangat suka bermain dengan teman teman nya.</p>
                    <a href="/adopsi/biodata-pet/3" class="btn btn-primary">See</a>
                    <a href="/adopsi/formulir" class="btn btn-primary">Adopsi</a>
                    <button class="btn btn-save" onclick="savePet(3)">Simpan</button>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3">
                <div class="pet-card">
                    <img src="images/dog 3.jpg" alt="Hewan Peliharaan 3" class="img-fluid">
                    <h2 class="text-2xl font-semibold text-orange-800">Puppy</h2>
                    <p>Jenis: Anjing</p>
                    <p>Umur: 3 Bulan </p>
                    <p class="text-gray-700">Deskripsi: Puppy adalah anjing betina. Puppy sangat suka makan hati ayam yang dicampur dengan brokoli</p>
                    <a href="/adopsi/biodata-pet/3" class="btn btn-primary">See</a>
                    <a href="/adopsi/formulir" class="btn btn-primary">Adopsi</a>
                    <button class="btn btn-save" onclick="savePet(3)">Simpan</button>
                </div>
            </div>

            <!-- Tambahkan kartu hewan lainnya sesuai kebutuhan -->
        </div>
    </div>

    <script>
        function savePet(petId) {
            console.log('Menyimpan data hewan:', petId);
            window.location.href = "/adopsi/simpan";
        }
    </script>

</body>
</html>
