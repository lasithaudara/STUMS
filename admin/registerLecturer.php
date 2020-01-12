<section class="content-panel">
          <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form id="frm" class="form-horizontal style-form" onsubmit="return false">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Lecturer Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="name" id="txtName">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="contact" id="txtContact">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">E-Mail</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="email" id="txtEmail">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Department</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="department" id="txtDepartment">
                              </div>
                          </div>

                          <div class="row">
                            
                            <div class="col-md-12"><span class="pull-right"><button type="submit" name="register" class="btn btn-theme03" id="btnRegister"><i class="fa fa-check"></i> Add</button></span></div>
                        </div>

                          
                          
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
   var contact = $('#txtContact').val();
   var email = $('#txtEmail').val();
   var dept = $('#txtDepartment').val();
   



   //make the postdata
   var postData = 'name='+name+'&contact='+contact+'&email='+email+'&dept='+dept;

   //call register.php script in the background, when it returns it will call the success function if the request was successful or the error one if there was an issue (like a 404, 500 or any other error status)

   $.ajax({
      url : "registerLecturerCtrl.php",
      type: "POST",
      data : postData,
      success: function(data)
      {
          
          if (data==1) {
            alert("SUCCESS!");
          }else{
            alert(data);
          }

      }
  });
   });
</script>