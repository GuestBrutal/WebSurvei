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
        <h3>SISTEM INFORMASI PELAYANAN PUBLIK</h3>

        <form method="post" action="/inputKBJ">
            <p>
                1.1.a.K1 sistem informasi pelayanan publik dalam (SIPP) secara online telah memuat informasi tentang unit pelayanan secara transparan. (sipp harus memuat profil penyelenggara, pelaksana, 
                standar pelayanan maklumat pelayanan, pengelolaan pengaduan dan penilaian kinerja lembaga
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sipp" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sipp" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sipp" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sipp" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sipp" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sipp" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                2. 1.a.K1 pemutahiran informasi pelayanan publik dilakukan secara terus-menerus
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemutahiran" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemutahiran" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemutahiran" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemutahiran" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemutahiran" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemutahiran" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                3. 1.a.K1 informasi non elektronik mendukung pelayanan secara transparan            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="transparan" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="transparan" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="transparan" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="transparan" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="transparan" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="transparan" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                4. 1.a.K1 layanan konsultasi dan informasi tatap muka langsung mudah diakses
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="konsultasi" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="konsultasi" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="konsultasi" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="konsultasi" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="konsultasi" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="konsultasi" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>
            <p>
                5. 1.a.K1 layanan pengaduan tatap muka langsung memudahkan pengguna layanan
            </p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pengaduan" id="inlineRadio0" value="0" />
                <label class="form-check-label" for="inlineRadio0">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pengaduan" id="inlineRadio1" value="1" />
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pengaduan" id="inlineRadio2" value="2" />
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pengaduan" id="inlineRadio3" value="3" />
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pengaduan" id="inlineRadio4" value="4" />
                <label class="form-check-label" for="inlineRadio4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pengaduan" id="inlineRadio5" value="5" />
                <label class="form-check-label" for="inlineRadio5">5</label>
            </div>     
            <input type="submit" value="Submit" />
        </form>
    </div>

</body>

</html>