<?php include './controllers/bikes.php'; ?>


<section class="content" id="editModal">
      <div class="container-fluid">
        <style>
          #cimg {
            max-width: 50%;
            object-fit: contain;
          }
        </style>
        <div class="col-lg-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h5 class="card-title">Create Bike</h5>
            </div>
            <div class="card-body">
              <form id="bike"  method="post" action="./controllers/bikes.php">
                <div class="row">
                  <input type="hidden" name="id" value="">
                  <input type="hidden" name="agent_username" value="Christella">
                  <input type="hidden" name="agent_id" value="1199770157108019">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="" class="control-label">Bike Name #</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="bi bi-phone"></i></span>
                        </div>
                        <input type="text" name="name" class="form-control" value="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="" class="control-label">Bike ID</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        </div>
                        <input type="text" class="form-control" name="bike_id" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="control-label">Bike Owner</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                        </div>
                        <input type="text" class="form-control" name="owner" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="control-label">Bike Status</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="bi bi-twitter"></i></span>
                        </div>
                        <input type="text" class="form-control" name="status" value="">
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="type">Bike Use</label>
                      <select name="Use_type" id="type" class="custom-select" value="" required="">
                        <option value="Promenade">Promenade</option>
                        <option value="Transport (Taxi)">Transport (Taxi)</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="" class="control-label">Motif</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="bi bi-file"></i></span>
                        </div>
                        <input type="text" class="form-control" name="approved_motif" value="">
                      </div>
                    </div>

                  </div>
                </div>
              </form>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary btn-sm" form="bike">Save</button>
              <a class="btn btn-primary btn-sm" href="./?page=bikes">Cancel</a>
            </div>
          </div>
        </div>

        <script>
          // function displayImg(input,_this) {
          //     if (input.files && input.files[0]) {
          //         var reader = new FileReader();
          //         reader.onload = function (e) {
          //         	$('#cimg').attr('src', e.target.result);
          //         }

          //         reader.readAsDataURL(input.files[0]);
          //     }
          // }
          // function start_loader() {
          //     // Add your loading indicator logic here
          //     console.log("Loading started");
          // }

          // function end_loader() {
          //     // Add your loading indicator logic here
          //     console.log("Loading ended");
          // }

          // $(document).ready(function () {
          //   $('.select')
          //   $('#bike').submit(function (e) {
          //     e.preventDefault();
          //     start_loader();
          //     $.ajax({
          //       url: _base_url_ + "classes/Content.php?f=bike",
          //       data: new FormData($(this)[0]),
          //       cache: false,
          //       contentType: false,
          //       processData: false,
          //       method: 'POST',
          //       type: 'POST',
          //       dataType: 'json',
          //       error: err => {
          //         alert_toast("An error occured", 'error')
          //         console.log(err);
          //         end_loader();
          //       },
          //       success: function (resp) {
          //         if (resp != undefined) {
          //           if (resp.status == 'success') {
          //             location.href = _base_url_ + "admin/?page=bikes";
          //           } else {
          //             alert_toast("An error occured, " + resp.msg, 'error')
          //             console.log(resp);
          //             console.log("Status:" + resp.status)
          //           }
          //           end_loader();
          //         }
          //       }
          //     })
          //   })
            
          // })

        </script>
      </div>
    </section>