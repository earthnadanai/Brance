
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติการทำงาน</title>
</head>
<body>
<br>
<div class="container">
  <div class="row">
    <div class="col">
     
    </div>
    <div class="col-md-6 ">
<div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
  <div class="card-header">ประวัติการทำงาน</div>
  <div class="card-body">
    <h5 class="card-title">

    <form action="../Welcome/workexp" method="post">
    <div class="form-group">
    <label for="nameProduct">อาชีพ : </label>
    <input class="form-control" type="text" name="career" placeholder="กรุณาใส่อาชีพ" required> 
    </div>
    <div class="form-group">
    <label for="price">เงินเดือน : </label>
    <input class="form-control" type="number" name="salary" placeholder="กรุณาใส่เงินเดือน" required> 
    </div>
    <div class="form-group">
    <label for="nameProduct">ชื่อบริษัท : </label>
    <input class="form-control" type="text" name="Companyname" placeholder="กรุณาใส่ชื่อบริษัท" required> 
    </div>
    <div class="form-group">
    <label for="nameProduct">ตำแหน่ง : </label>
    <input class="form-control" type="text" name="position" placeholder="กรุณาใส่ตำแหน่ง" required> 
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</h5>
  </div>
</div>
    </div>
    <div class="col">
  
  </div>
</div>
</div>

</body>
</html>