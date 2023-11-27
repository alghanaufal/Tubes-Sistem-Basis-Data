<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="./assets/style_form.css">
</head>
<body>
    <div class="card">
        <br>
        <a href="./index.php" class="back-btn">Kembali</a>
        <br>
        <form action="" method="POST">
            <div class="form-group">
                <b>Hasil</b>
                <div class="radio">
                    <input type="radio" name="hasil_pendaftaran" id="rl" class="rl" value="Lolos" <?= @$user['hasil_pendaftaran'] == 'LoLos' ? 'checked' : '' ?>>
                    <label for="rl">Lolos</label>
                    <input type="radio" name="hasil_pendaftaran" id="fc" class="fc" value="Gagal" <?= @$user['hasil_pendaftaran'] == 'Gagal' ? 'checked' : '' ?>>
                    <label for="fc">Gagal</label>
                </div>
            </div>
            <div class="form-group">
                <b>Id Pembimbing</b>
                <input type="text" name="id_pembimbing" value="<?= @$user['id_pembimbing'] ?>">
            </div>
            <div class="form-group">
                <b>Program</b>
                <select name="program">
                    <option value="Bangkit">Bangkit</option>
                    <option value="Indonesian International Student Mobility Awards (IISMA)">Indonesian International Student Mobility Awards (IISMA)</option>
                    <option value="Kampus Mengajar">Kampus Mengajar</option>
                    <option value="GERILYA">GERILYA</option>
                    <option value="Magang">Magang</option>
                    <option value="KKN">KKN</option>
                    <option value="Pejuang Muda">Pejuang Muda</option>
                    <option value="Pertukaran Mahasiswa">Pertukaran Mahasiswa</option>
                    <option value="Proyek Kemanusiaan">Proyek Kemanusiaan</option>
                    <option value="Riset atau Penelitian">Riset atau Penelitian</option>
                    <option value="Studi Independen">Studi Independen</option>
                    <option value="Wirausaha">Wirausaha</option>
            </div>
            <div class="form-group">
                <b>SKS MBKM</b>
                <input type="text" placeholder="SKS MBKM" name="konfersi_SKS_MBKM" value="<?= @$user['konfersi_SKS_MBKM'] ?>">
            </div>
            
            <button type="submit" class="save-btn">Save</button>
            
        </form>
    </div>
</body>

<footer>
    -2022 SBD Kel.2-
</footer>
</html>