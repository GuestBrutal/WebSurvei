<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Static Template</title>
    <link rel="stylesheet" href="/index.css">
</head>
<?=  $this->include('style/style') ?>
<body>
<?= $this->include('layout/header') ?>

    <div class="instansi mx-auto">
        <h3>PROFESIONALISME SDM</h3>

        <form method="post" action="/inputKBJ">
            <p>
                1.1.a.K1 waktu pelayanan (jam kerja layanan tanpa jeda waktu istirahat, layanan informasi, konsultasi dan pengaduan, customer service) sesuai dengan yang ditetapkan
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktu" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktu" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktu" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktu" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktu" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="waktu" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                2. 1.a.K1 kesigapan petugas pelayanan dalam memberikan pelayanan
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kesigapan" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kesigapan" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kesigapan" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kesigapan" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kesigapan" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kesigapan" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                3. 1.a.K1 sikap, perilaku dan atribut yang digunakan petugas layanan mencerminkan pelayanan yang berkualitas
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sikap" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sikap" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sikap" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sikap" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sikap" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sikap" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                4. 1.a.K1 tempat parkir aman, nyaman dan mudah diakses
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parkir" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parkir" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parkir" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parkir" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parkir" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parkir" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                5. 1.a.K1 sarana ruang tunggu nyaman
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tunggu" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tunggu" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tunggu" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tunggu" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tunggu" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tunggu" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                6. 1.a.P sarana toilet khusus pengguna layanan bersih, sehat dan memadai
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="toilet" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="toilet" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="toilet" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="toilet" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="toilet" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="toilet" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                7. 1.a.As sarana prasarana bagi pengguna layanan berkebutuhan khusus memadai
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="khusus" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="khusus" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="khusus" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="khusus" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="khusus" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="khusus" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                8. 1.c.P sarana prasarana penunjang lainnya: ruang laktasi/nursery, arena bermain anak, kantin/fotocopy/toko atk memadai
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="penunjang" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="penunjang" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="penunjang" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="penunjang" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="penunjang" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="penunjang" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            
            <input type="submit" value="Submit" />
        </form>
    </div>

</body>

</html>