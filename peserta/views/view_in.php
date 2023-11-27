<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel = "stylesheet" href = "./assets/style_search.css">
</head>
<body>

    <section class="layout">
        <div class="text">Dashboard</div>
        <div class="search">
            <form method="GET" action="../peserta/search.php">
                <input type="text" placeholder="Masukan NIM" name="searchData" id="search" value="<?= @$search ?>" autocomplete="off" class="search_field">
                <button type="submit" class="search_data">Search</button>
            </form>
        </div>
    </section>

</body>
<script src="./assets/script.js"></script>
<footer>
    -2022 SBD Kel.2-
</footer>

</html>