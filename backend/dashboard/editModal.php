 <!-- edit modal -->

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
                <h5 class="card-title">Manage Consumer</h5>
            </div>
            <div class="card-body">
                <form id="agent">
                    <div class="row">
                    <input type="hidden" name="id" value="1">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="control-label">Name #</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="bi bi-phone"></i></span>
                                    </div>
                                    <input type="text" name="name" class="form-control" value="Mr Client">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label for="" class="control-label">Phone Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="phone_number" value="1234567890">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">National ID</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="bi bi-twitter"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="national_id" value="1234567890123456">
                                </div>
                            </div>
                            <p><i><span style="color: red;">*</span>you have to re set agent location.</i></p>						<div class="form-group col-6">
                                <label for="type">Province</label>
                                <select name="" id="provincecode" onchange="showResult();" class="custom-select" value="" required="">
                                                                <option value="Kigali City" data-id="1">Kigali City</option>
                                                                    <option value="South Provice" data-id="2">South Provice</option>
                                                                    <option value="Wester Provice" data-id="3">Wester Provice</option>
                                                                    <option value="North�Provice" data-id="4">North�Provice</option>
                                                                    <option value="East  Provice" data-id="5">East  Provice</option>
                                                                    <option></option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="type">District</label>
                                <select name="district" id="districtcode" onchange="showResult2();" class="custom-select" value="" required="">
                                    <option></option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="type">Sector</label>
                                <select name="sector" id="sectorcode" onchange="showResult3();" class="custom-select" value="" required="">
                                    <option></option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="type">Cell</label>
                                <select name="cell" id="codecell" onchange="showResult4();" class="custom-select" value="" required="">
                                    <option></option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="type">Village</label>
                                <select name="village" id="CodeVillage" class="custom-select" value="" required="">
                                    <option></option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-sm" form="agent">Update</button>
                <a class="btn btn-primary btn-sm" href="./?page=agents">Cancel</a>
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
          $(document).ready(function () {
            $('.select')
            $('#bike').submit(function (e) {
              e.preventDefault();
              start_loader();
              $.ajax({
                url: _base_url_ + "classes/Content.php?f=bike",
                data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
                error: err => {
                  alert_toast("An error occured", 'error')
                  console.log(err);
                  end_loader();
                },
                success: function (resp) {
                  if (resp != undefined) {
                    if (resp.status == 'success') {
                      location.href = _base_url_ + "admin/?page=bikes";
                    } else {
                      alert_toast("An error occured, " + resp.msg, 'error')
                      console.log(resp);
                      console.log("Status:" + resp.status)
                    }
                    end_loader();
                  }
                }
              })
            })
            $('.summernote').summernote({
              height: 200,
              toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ol', 'ul', 'paragraph', 'height']],
                ['table', ['table']],
                ['view', ['link', 'undo', 'redo', 'fullscreen', 'codeview', 'help']]
              ]
            })
          })

        </script>
      </div>
    </section>