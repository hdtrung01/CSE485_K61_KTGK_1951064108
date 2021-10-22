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
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="data:image/png;base64,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" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Thêm phương tiện</h3>

            <form class="px-md-2"  action ="checkadd.php" method="POST">

              <div class="form-outline mb-4" >
              
                <input type="text" id="id" class="form-control" name ="id" />
                <label class="form-label" for="form3Example1q">Mã phương tiện</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="name" class="form-control" name= "bienso" />
                <label class="form-label" for="form3Example1q">Biển số xe</label>
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
                    <label for="exampleDatepicker1" class="form-label">Năm sản xuất</label>
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
                    <label for="exampleDatepicker1" class="form-label">Model</label>
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

              <button type="submit" class="btn btn-success btn-lg mb-1" name ="add">Add</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>