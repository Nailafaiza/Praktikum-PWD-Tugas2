<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr. Burger</title>
    <link rel="icon" href="gambar/icon.png" type="png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

  <div class="wrapper">
    <div class="image">
      <img src="gambar/burger3.png" class="img-fluid" alt="burger" width="1200px" height="500px">
      <div class="content">
        <h1>Mr. Burger</h1>
        <a href="#menu" class="button">Beli Sekarang!</a>
      </div>
    </div>
  </div>
    
  <br>
  <h3>Katalog</h3> 
  <hr>

  <div class="container">
    <div class="row">
      <div class="col">
        <figure>
          <img src="gambar/burger.png" alt="burger" class="rounded" width="120px" height="120px">
          <figcaption align="center">Burger</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/kebab.png" alt="kebab" class="rounded" width="120px" height="120px">
          <figcaption align="center">Kebab</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/tortillaa.png" alt="tortillaa" class="rounded" width="120px" height="120px">
          <figcaption align="center">Tortilla Wrap</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/wholeWheat.png" alt="whole" class="rounded" width="120px" height="120px">
          <figcaption align="center">Whole Wheat</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/charcoal.png" alt="whole" class="rounded" width="120px" height="120px">
          <figcaption align="center">Charcoal</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/original.png" alt="whole" class="rounded" width="120px" height="120px">
          <figcaption align="center">Original</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/potatoBun.png" alt="whole" class="rounded" width="120px" height="120px">
          <figcaption align="center">Potato Bun</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/kentang.png" alt="whole" class="rounded" width="120px" height="120px">
          <figcaption align="center">French Fries</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/onion.png" alt="whole" class="rounded" width="120px" height="120px">
          <figcaption align="center">Onion Rings</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/cheese.png" alt="whole" class="rounded" width="120px" height="120px">
          <figcaption align="center">Cheese Ball</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/waffleFries.png" alt="whole" class="rounded" width="120px" height="120px">
          <figcaption align="center">Waffle Fries</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/iceTea.png" alt="whole" class="rounded" width="120px" height="120px">
          <figcaption align="center">Ice Tea</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/lemon.png" alt="whole" class="rounded" width="120px" height="120px">
          <figcaption align="center">Lemon Tea</figcaption>
        </figure>
      </div>
      <div class="col">
        <figure>
          <img src="gambar/soda.png" alt="whole" class="rounded" width="120px" height="120px">
          <figcaption align="center">Soda</figcaption>
        </figure>
      </div>
    </div>
  </div>

  <br>

  <div id="menu">
    <h3>Pilih Menu</h3> 
    <hr>

    <form action="pesanan.php" method="POST">
      <label for="menuutama" class="label-text">Menu Utama</label>
      <select class="form-select" name="menuUtama">
        <option value="Burger">Burger</option>
        <option value="Kebab">Kebab</option>
      </select>

      <br>

      <label for="jenisroti" class="label-text">Jenis Roti</label>
      <select class="form-select" name = "jenisroti">
        <option value="Original">Original</option>
        <option value="Whole Wheat">Whole Wheat</option>
        <option value="Charcoal">Charcoal</option>
        <option value="Potato Bun">Potato Bun</option>
        <option value="Tortilla Wrap">Tortilla Wrap</option>
      </select>

      <br>
      <label for="isianDaging" class="label-text">Isian Daging</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name= "daging" value="Sapi"checked>
          <label class="label-text" for="flexCheckDefault">Sapi</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name = "daging" value="Ayam">
          <label class="label-text" for="flexCheck">Ayam</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name = "daging" value="Vegetarian">
          <label class="label-text" for="flexCheckD">Vegetarian</label>
      </div>

      <br>

    <label class="label-text">Toping Tambahan</label>
    <span class="optional text-muted ms-2" disabled>optional</span>
    <div class="d-flex flex-wrap gap-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="toping[]" value="Keju">
        <label class="label-text" for="topingKeju">Keju</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name = "toping[]" value="Selada">
        <label class="label-text" for="topingSelada">Selada</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name = "toping[]" value="Telur">
        <label class="label-text" for="topingTelur">Telur</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name = "toping[]" value="Patty">
        <label class="label-text" for="topingPatty">Patty</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name = "toping[]" value="Jalapeno">
        <label class="label-text" for="topingJalapeno">Jalapeno</label>
      </div>
    </div>

      <br>

      <label class="label-text">Saus</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="saus[]" value="Mayonaise" checked>
        <label class="label-text" for="sausMayo">Mayonaise</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name= "saus[]" value="Barbeque">
        <label class="label-text" for="sausBBQ">BBQ</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name= "saus[]" value="Mustard">
        <label class="label-text" for="sausMustard">Mustard</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name= "saus[]" value="Sambal">
        <label class="label-text" for="sausSambal">Sambal</label>
      </div>

      <br>

      <label class="label-text">Ukuran Patty</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="ukuranPatty" value="Regular" required>
        <label class="label-text" for="regular">Regular</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="ukuranPatty" value="Double Patty" required>
        <label class="label-text" for="doublePatty">Double Patty</label>
      </div>
      
      <br>
      <label class="label-text">Sides</label>
      <span class="optional text-muted ms-2" disabled>optional</span>
      <div class="d-flex gap-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="sides[]" value= "French Fries">
          <label class="label-text" for="sideFrenchFries">French Fries</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="sides[]" value ="Onion Rings">
          <label class="label-text" for="sideOnionRings">Onion Rings</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="sides[]" value="Cheese Ball">
          <label class="label-text" for="sideCheeseBall">Cheese Ball</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="sides[]" value="Waffle Fries">
          <label class="label-text" for="sideWaffleFries">Wafffle Fries</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="sides[]" value="Ice Tea">
          <label class="label-text" for="sideIceTea">Ice Tea</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name ="sides[]" value = "Lemon Tea">
          <label class="label-text" for="sideLemonTea">Lemon Tea</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="sides[]" value ="Soda">
          <label class="label-text" for="sideSoda">Soda</label>
        </div>
      </div>

      <br>

      <label class="label-text" >Note</label>
      <textarea class="form-control" rows="5" name = "note" placeholder="Write your additional note here"></textarea>
      
      <br>

      <button class="btn" type="reset">Reset</button>
      <button class="btn" type="submit">Submit</button>
    </form>
  </div>

<hr>

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