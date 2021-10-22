<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

            <h2 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Sửa phương tiện:</h2>
            <form class="px-md-2"  action ="checkedit.php" method="POST">

<div class="form-outline mb-4" >

<input type="text" id="id" class="form-control" name ="oldid" />
  <label class="form-label" for="form3Example1q">Mã phương tiện cần sửa</label>
</div>
  <input type="text" id="id" class="form-control" name ="id" />
  <label class="form-label" for="form3Example1q">Mã phương tiện mới</label>
</div>
<div class="form-outline mb-4">
  <input type="text" id="name" class="form-control" name= "bienso" />
  <label class="form-label" for="form3Example1q">Biển số xe mới</label>
</div>

<div class="row">
  <div class="col-md-6 mb-4">

    <div class="form-outline datepicker">
      <input
        type="text"
        class="form-control"
        id="year"
        name = "year"
      />
      <label for="exampleDatepicker1" class="form-label">Năm sản xuất mới</label>
    </div>
  </div>
  <div class="row">
  <div class="col-md-6 mb-4">

    <div class="form-outline datepicker">
      <input
        type="text"
        class="form-control"
        id="model"
        name = "model"
      />
      <label for="exampleDatepicker1" class="form-label">Model mới</label>
    </div>
  </div>

<div class="col-md-6 mb-4">
      
      <select class="select" id= "ctype" name = "ctype">
      <option value="1" disabled>Loại xe</option>
      <option value="2">Bình thường</option>
        <option value="3">Bán Tải</option>
        <option value="4">limousine</option>
        <option value="5">Xe tải</option>
        <option value="6">container</option>
      </select>
      <label for="exampleDatepicker1" class="form-label">Loại xe</label>
    </div>
<div class="mb-4">

  <select class="select" name= "status">
    <option value="1" disabled>Tình trạng</option>
    <option value="2">Tốt</option>
    <option value="3">Hư hỏng nhẹ</option>
    <option value="4">Hư hỏng nặng</option>
    <option value="5">Hỏng hoàn toàn </option>
  </select>
  <label for="exampleDatepicker1" class="form-label">Tình trạng</label>
</div>


<div class="row mb-4 pb-2 pb-md-0 mb-md-5">
  <div class="col-md-6">
  <div class="form-outline">
      <input type="text" id="age" class="form-control" name ="drate" />
      <label class="form-label" for="form3Example1w">Giá theo ngày</label>
    </div>
    <div class="form-outline">
      <input type="text" id="phone" class="form-control" name= "wrate" />
      <label class="form-label" for="form3Example1w">Giá theo tuần</label>
    </div>
   
    

  </div>
</div>

<button type="submit" class="btn btn-success btn-lg mb-1" name ="add">Sửa</button>

</form>

            </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>