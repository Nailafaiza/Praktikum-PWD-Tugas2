<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <link rel="icon" href="gambar/icon.png" type="png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
    table td, table th {
        padding-right: 40px;
        font-family : font2; !important 
    }
    h2{
        text-align : center;
        font-family : font2; !important 
    }
    body{
        font-family : font2; !important
    }
    </style>

</head>
<body>



<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_POST['daging']) || (is_array($_POST['daging']) && count($_POST['daging']) == 0)) {
            echo "
            <div class='modal fade show' id='warningModal' tabindex='-1' aria-labelledby='warningModalLabel' aria-hidden='true' style='display: block; background: rgba(0, 0, 0, 0.5); position: fixed; top: 0; left: 0; width: 100%; height: 100%;'>
            <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>
                <div class='modal-header' style='background-color: #FA812F; color: white;'>
                    <h5 class='modal-title' id='warningModalLabel'>Peringatan</h5>
                    <button type='button' class='btn-close' onclick='redirectToMenu();'></button>
                </div>
                <div class='modal-body'>
                    Anda harus memilih isian daging!
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn text-white' style='background-color: #FA812F;' onclick='redirectToMenu();'>Tutup</button>
                </div>
            </div>
            </div>
            </div>

            <script>
                function redirectToMenu() {
                    window.location.href = 'menu.php';
                }
            </script>
            ";
            exit;
        }
       
        $daging = $_POST['daging'];

        $menuUtama = $_POST['menuUtama'];
        $jenisroti = $_POST['jenisroti'] ;


       

        

        $toping = $_POST['toping'] ?? [];

        if (!empty($toping)){
            $topingTambahan = implode(", ", $toping);
        }else{
            $topingTambahan = '-';
        }

        $saus = $_POST['saus'];

        if (!empty($saus)){
            $sauss = implode(", ", $saus);
        }else{
            $sauss = '-';
        }

        $ukuranPatty = $_POST['ukuranPatty'] ?? '-' ;
        $sides = $_POST['sides'] ?? [] ;

        if (!empty($sides)){
            $sidess = implode(", ", $sides);
        }else{
            $sidess ='-';
        }

        $note = $_POST['note'];
    }

    $daftarMenuUtama = ["Burger", "Kebab"];
    $hargaMenuUtama = [ 'Burger' => 25000, 'Kebab' => 27000];
    $hargaMenu = $hargaMenuUtama[$menuUtama]?? 0;

    $daftarJenisRoti = ["Original", "Whole Wheat", "Charcoal", "Potato Bun", "Tortilla Wrap"];
    $hargaJenisRoti = [
        'Original' => 0,
        'Whole Wheat' => 2000,
        'Charcoal' => 2000,
        'Potato Bun' => 5000,
        'Tortilla Wrap' => 2000
    ];
    $hargaRoti = $hargaJenisRoti[$jenisroti]?? 0;

    $daftarToping = ["Keju","Selada","Tomat", "Bawang", "Jalapeno"];
    $daftarHargaToping =[
        'Keju' => 2000,
        'Selada' => 1000,
        'Telur' => 5000,
        'Patty' => 12000,
        'Jalapeno' => 0
    ];

    $hargaToping = 0;
    if (!empty($toping)){
        foreach ($toping as $tp){
            $hargaToping += $daftarHargaToping[$tp] ?? 0;
        }
    }


    $daftarUkuranPatty = ["Regular","Double Patty"];
    $hargaUkuranPatty = [
        'Regular' => 0,
        'Double Patty' => 7000
    ];
    $hargaPatty = $hargaUkuranPatty[$ukuranPatty]?? 0;

    $daftarMenuSides =['French Fries', 'Onion Rings', 'Cheese Ball','Waffle Fries','Ice Tea','Lemon Tea','Soda'];
    $daftarHargaSides = [
        'French Fries' => 12000,
        'Onion Rings' => 10000,
        'Cheese Ball' => 15000,
        'Waffle Fries' => 12000,
        'Ice Tea' => 5000,
        'Lemon Tea' => 5000,
        'Soda' => 7000
    ];

    $hargaSides = 0;
    if (!empty($sides)){
        foreach ($sides as $sd){
            $hargaSides += $daftarHargaSides[$sd] ?? 0;
        }
    }

    $totalHarga = $hargaMenu + $hargaRoti + $hargaToping + $hargaPatty + $hargaSides;
    $tax = 0.1 * ($hargaMenu + $hargaRoti + $hargaToping + $hargaPatty + $hargaSides);
    $totalBayar = $totalHarga + $tax;    
?>

    <h2>Pesanan Anda</h2>
    <hr>
    <br> 
   
    <table class="table table-hover">
        <tr>
            <th>Menu Utama</th>
            <td><?php echo htmlspecialchars($menuUtama);?></td>
        </tr>
        <tr>
            <th>Jenis Roti</th>
            <td><?php echo htmlspecialchars($jenisroti);?></td>
        </tr>
        <tr>
            <th>Isian Daging</th>
            <td><?php echo htmlspecialchars($daging);?></td>
        </tr>
        <tr>
            <th>Toping Tambahan</th>
            <td><?php echo htmlspecialchars($topingTambahan);?></td>
        </tr>
        <tr>
            <th>Saus</th>
            <td><?php echo htmlspecialchars($sauss);?></td>
        </tr>
        <tr>
            <th>Ukuran Patty</th>
            <td><?php echo htmlspecialchars($ukuranPatty);?></td>
        </tr>
        <tr>
            <th>Sides</th>
            <td><?php echo htmlspecialchars($sidess);?></td>
        </tr>
        <tr>
            <th>Tax</th>
            <td> 10%</td>
        </tr>
        <tr>
            <th>Note</th>
            <td><?php echo htmlspecialchars($note); ?></td>
        </tr>
        <tr>
            <th>Total Price</th>
            <td>
                <table>
                    <tr>
                        <td>Menu Utama</td>
                        <td><?php echo "Rp. " .($hargaMenu); ?></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Roti</td>
                        <td><?php echo "Rp. " .($hargaRoti); ?></td>
                    </tr>
                    <tr>
                        <td>Toping</td>
                        <td><?php echo "Rp. " . ($hargaToping); ?></td>
                    </tr>
                    <tr>
                        <td>Ukuran Patty</td>
                        <td><?php echo "Rp. " .($hargaPatty); ?></td>
                    </tr>
                    <tr>
                        <td>Sides</td>
                        <td><?php echo "Rp. " . ($hargaSides); ?></td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td><?php echo "Rp. " . ($tax); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b> <?php echo "Rp. " . ($totalBayar); ?> </b> </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <a href="menu.php" class="btn">Kembali ke Menu</a>

    <br> <hr>
    <footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center text-light rounded">
        <p class="ft">Alamat: Jl. Nin Aja Dulu Sampai Capek KM. 12 <br>
        <b class="ft">copyright &copy2025 NailaFaiza
      </div>
    </div>

  </div>
</footer>
</body>
</html>