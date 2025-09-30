<!DOCTYPE html>
<html lang="en">

<?php
$temp = [];
$json = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama    = $_POST['nama'];
  $nim     = $_POST['nim'];
  $prodi   = $_POST['prodi'];
  $jenkel  = $_POST['jenkel'];
  $alamat  = $_POST['alamat'];
  $hobi    = isset($_POST['hobi']) ? $_POST['hobi'] : [];


  $temp = [
    'nama'    => $nama,
    'nim'     => $nim,
    'prodi'   => $prodi,
    'jenkel' => $jenkel,
    'alamat' => $alamat,
    'hobi'   => $hobi
  ];

  $file = "biodata.json";
  $existing = [];

  if (file_exists($file)) {
    $jsonData = file_get_contents($file);
    $existing = json_decode($jsonData, true) ?? [];
  }

  $existing[] = $temp;

  file_put_contents($file, json_encode($existing, JSON_PRETTY_PRINT));
  header("Location: " . $_SERVER['PHP_SELF']);
  exit;
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">
    <div class="glitch-form-wrapper">
        <form class="glitch-card" action="" method="POST">
            <div class="card-header">
            <div class="card-title">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                    <path d="M12 11.5a3 3 0 0 0 -3 2.824v1.176a3 3 0 0 0 6 0v-1.176a3 3 0 0 0 -3 -2.824z"></path>
                </svg>
                <span>PENDAFTARAN</span>
            </div>

            <div class="card-dots"><span></span><span></span><span></span></div>
            </div>

            <div class="card-body">
            <div class="form-group">
                <input type="text" id="nama" name="nama" required="" placeholder=""/>
                <label for="nama" class="form-label" data-text="NAMA LENGKAP">NAMA LENGKAP</label>
            </div>

            <div class="form-group">
                <input type="text" id="nim" name="nim" required="" placeholder=""/>
                <label for="nim" class="form-label" data-text="NIM">NIM</label>
            </div>

            <div class="form-group">
                <select name="prodi" id="prodi">
                    <option value="Informatika">Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jenkel" class="form-label" data-text="Jenis_Kelamin">Jenis Kelamin</label>
                <br>
            </div>
            <div class="glitch-radio-wrapper">
                <label class="glitch-radio-container">
                    <input type="radio" name="jenkel" value="Pria" required/>
                    <div class="radio-circle">
                    <div class="radio-dot"></div>
                    <div class="pulse" style="--d:0s;"></div>
                    <div class="pulse" style="--d:0.3s;"></div>
                    </div>
                    <span class="radio-label" data-text="Pria">Pria</span>
                </label>

                <label class="glitch-radio-container">
                    <input type="radio" name="jenkel" value="Wanita" required/>
                    <div class="radio-circle">
                    <div class="radio-dot"></div>
                    <div class="pulse" style="--d:0s;"></div>
                    <div class="pulse" style="--d:0.3s;"></div>
                    </div>
                    <span class="radio-label" data-text="Wanita">Wanita</span>
                </label>
            </div>
            <br> <br>

            <div class="form-group">
                <label for="nim" class="form-label" data-text="Hobi">Hobi</label>
                <br>
            </div>
            <!-- From Uiverse.io by pharmacist-sabot --> 
            <div class="glitch-checkbox-wrapper">
                <label class="glitch-checkbox-container">
                    <input type="checkbox" name="hobi[]" value="Membaca"/>
                    <div class="checkbox-box">
                        <div class="checkbox-mark"></div>
                    </div>
                    <span class="checkbox-label" data-text="Membaca">Membaca</span>
                </label>

                <label class="glitch-checkbox-container">
                    <input type="checkbox" name="hobi[]" value="Berolahraga"/>
                    <div class="checkbox-box">
                        <div class="checkbox-mark"></div>
                    </div>
                    <span class="checkbox-label" data-text="Berolahraga">Berolahraga</span>
                </label>

                <label class="glitch-checkbox-container">
                    <input type="checkbox" name="hobi[]" value="Menonton Film"/>
                    <div class="checkbox-box">
                        <div class="checkbox-mark"></div>
                    </div>
                    <span class="checkbox-label" data-text="Menonton Film">Menonton Film</span>
                </label>
                
                <label class="glitch-checkbox-container">
                    <input type="checkbox" name="hobi[]" value="Bermain Game" />
                    <div class="checkbox-box">
                        <div class="checkbox-mark"></div>
                    </div>
                    <span class="checkbox-label" data-text="Bermain Game">Bermain Game</span>
                </label>
            </div>

            <br>
            <div class="form-group">
                <input type="textarea" id="alamat" name="alamat" required="" placeholder=""/>
                <label for="nim" class="form-label" data-text="Alamat">Alamat</label>
            </div>

            <button data-text="REGISTER" type="submit" class="submit-btn">
                <span class="btn-text">REGISTER</span>
            </button>
            </div>
        </form>
    </div>

    <?php
  $file = 'biodata.json';

  $jsonData = file_get_contents($file);
  $data = json_decode($jsonData, true) ?? [];
  if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
    $keyword = strtolower(trim($_GET['search']));
    $filtered = [];

    foreach ($data as $mhs) {
      if (
        strpos(strtolower($mhs['nama']), $keyword) !== false ||
        strpos(strtolower($mhs['nim']), $keyword) !== false ||
        strpos(strtolower($mhs['prodi']), $keyword) !== false ||
        strpos(strtolower($mhs['jenkel']), $keyword) !== false ||
        strpos(strtolower($mhs['alamat']), $keyword) !== false
      ) {
        $filtered[] = $mhs;
        continue;
      }
      foreach ($mhs['hobi'] as $ho) {
        if (strpos(strtolower($ho), $keyword) !== false) {
          $filtered[] = $mhs;
          break;
        }
      }
    }
    $data = $filtered;
  }

  ?>

  <h1 class="text-white text-center text-3xl  mb-10 font-bold">Data Mahasiswa</h1>
  <div class="relative overflow-x-auto p-5 flex justify-center">
    <div>

    <form method="GET" action="" class="flex justify-center mb-5">
        <!-- From Uiverse.io by pharmacist-sabot --> 
        <div class="glitch-input-wrapper">
            <div class="input-container">
                <input type="text" id="holo-input" class="holo-input" name="search" placeholder="" required=""
                value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>"/>

                <label for="holo-input" class="input-label" data-text="Cari Mahasiswa">Cari Mahasiswa</label>

                <button data-text="Cari" type="submit" class="submit-btn">
                    <span class="btn-text">CARI</span>
                </button>

                <div class="input-border"></div>
                <div class="input-scanline"></div>
                <div class="input-glow"></div>

                <div class="input-data-stream">
                <div class="stream-bar" style="--i: 0;"></div>
                <div class="stream-bar" style="--i: 1;"></div>
                <div class="stream-bar" style="--i: 2;"></div>
                <div class="stream-bar" style="--i: 3;"></div>
                <div class="stream-bar" style="--i: 4;"></div>
                <div class="stream-bar" style="--i: 5;"></div>
                <div class="stream-bar" style="--i: 6;"></div>
                <div class="stream-bar" style="--i: 7;"></div>
                <div class="stream-bar" style="--i: 8;"></div>
                <div class="stream-bar" style="--i: 9;"></div>
                </div>

                <div class="input-corners">
                <div class="corner corner-tl"></div>
                <div class="corner corner-tr"></div>
                <div class="corner corner-bl"></div>
                <div class="corner corner-br"></div>
                </div>
            </div>
        </div>

      <table class="tampil">
        <thead>
          <tr>
            <th scope="col" class="px-6 py-3">
              Nama
            </th>
            <th scope="col" class="px-6 py-3">
              NIM
            </th>
            <th scope="col" class="px-6 py-3">
              Prodi
            </th>
            <th scope="col" class="px-6 py-3">
              Jenis Kelamin
            </th>
            <th scope="col" class="px-6 py-3">
              Hobi
            </th>
            <th scope="col" class="px-6 py-3">
              Alamat
            </th>
          </tr>
        </thead>
        <tbody class="p-5 text-center">
          <?php
          foreach ($data as $mhs) {
            echo  "<tr class='border border-purple-500 '>";
            echo "<td>{$mhs['nama']}</td>";
            echo "<td>{$mhs['nim']}</td>";
            echo "<td>{$mhs['prodi']}</td>";
            echo "<td>{$mhs['jenkel']}</td>";
            echo "<td>";
            foreach ($mhs['hobi'] as $ho) {
              echo "$ho<br>";
            }
            echo "</td>";
            echo "<td>{$mhs['alamat']}</td>";

            echo  "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>