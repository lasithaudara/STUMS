<section class="content-panel">
          <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form id="frm" class="form-horizontal style-form" onsubmit="return false">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Student Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="name" id="txtName">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Registration No.</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="regNo" id="txtRegNo">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">EP No.</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="EPNo" id="txtEPNo">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="password" id="txtPassword">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Address</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="address" id="txtAddress">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact No.</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="contactNo" id="txtContactNo">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Department</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="dept" id="txtDept">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Year</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="year" id="txtYear">
                              </div>
                          </div>
                          
                        <div class="row">
                            
                            <div class="col-md-12"><span class="pull-right"><button type="submit" name="register" class="btn btn-theme03" id="btnRegister"><i class="fa fa-check"></i> Add</button></span></div>
                        </div>
                          
                          <div id="status_text" ></div>
                          
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
          </section><!--/content-panel -->

<script src="assets/js/jquery.js"></script>
<script>
  //on the click of the submit button 
  $("#frm").submit(function() {
   //get the form values

   var name = $('#txtName').val();     
   var regNo = $('#txtRegNo').val();
   var EPNo = $('#txtEPNo').val();
   var pswd = $('#txtPassword').val();
   var adrs = $('#txtAddress').val();
   var cntct = $('#txtContactNo').val();
   var dept = $('#txtDept').val(); 
   var year = $('#txtYear').val();



   //make the postdata
   var postData = 'name='+name+'&password='+pswd+'&regno='+regNo+'&epno='+EPNo+'&address='+adrs+'&contactno='+cntct+'&deprt='+dept+'&year='+year;

   //call register.php script in the background, when it returns it will call the success function if the request was successful or the error one if there was an issue (like a 404, 500 or any other error status)

   $.ajax({
      url : "studentRegisterCtrl.php",
      type: "POST",
      data : postData,
      success: function(data)
      {
          //if success then just output the text to the status div then clear the form inputs to prepare for new data
          //$("#status_text").html(data);
          //$('#name').val('');
          //$('#brand').val('');
          if (data==1) {
            alert("SUCCESS!");
          }else{
            alert(data);
          }

      }
  });
   });
</script>