<div  id="contact_id" class="modal fade show">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Contact Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Forms
      ================================================== -->
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              <form>
                <fieldset>
                  
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
                  </div>

                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>

                  <div class="form-group">
                    <label for="Content">Description</label>
                    <textarea class="form-control" id="content" rows="3"></textarea>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
         

        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="send_contact()">Send</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cancel()">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
  

function send_contact()
{
 var name = $("#name").val();
 var email = encodeURIComponent($("#email").val());
 var content = $("#content").val();

 if(name.length > 0 && email.length > 0 && content.length > 0) {
   jQuery.ajax({
      type: "POST",
      url: "send-contact.php",
      data: "name=" + name +"&email=" + email +"&content=" + content,
      dataType: "text",
      success: function (data) {
        // confirmation message here
        $("#contact_id").modal("hide"); 

      },
      error: function (xhr, ajaxOptions, thrownError) {
          //alert(thrownError);
      }
  });
 }
}

function cancel() {
  $("#contact_id").modal("hide"); 
}
</script>