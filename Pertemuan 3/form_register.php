<?php
// array majors
$majors = [
    'SI' => 'Sistem Informasi',
    'TI' => 'Teknik Informatika',
    'BD' => 'Bisnis Digital'
];

// array skills
$skills = [
    'HTML' => 10,
    'CSS' => 10,
    'JavaScript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50
];

// array domisili
$domisiles = ['Jakarta', 'Bogor', 'Depok', 'Tanggerang', 'Bekasi'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Register</title>
</head>
<body>
<div class="container" style="background-color: beige">
<form method="POST" action="proses_register.php">
    <br>
    <h2 class="text-center">Form Registrasi IT Club</h2>
    <hr>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-clock-o"></i>
          </div>
        </div> 
        <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-id-card-o"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kelamin" id="kelamin_0" type="radio" class="custom-control-input" value="laki-laki" required="required"> 
        <label for="kelamin_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kelamin" id="kelamin_1" type="radio" class="custom-control-input" value="perempuan" required="required"> 
        <label for="kelamin_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="prodi">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select" required="required">
        <?php
        foreach($majors as $key => $value) {
            echo '<option value="' . $value . '">' . $value . '</option>';
        }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <?php
        foreach($skills as $key => $value) {
            echo '<input name="skill[]" id="skill_0" type="checkbox" class="ml-3" value="' . $key . '">'. $key;
        }
        ?> 
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select" required="required">
        <?php
        foreach($domisiles as $domisile) : ?>
            <option value="<?php echo $domisile ?>"><?php echo $domisile ?></option>;
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope-o"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </form>
</div>

</body>
</html>