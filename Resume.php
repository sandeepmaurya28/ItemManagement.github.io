<!DOCTYPE html>
<html>
<head>
    <title>Resume Upload</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <div class="row col-xs-12   text-center">
        <button type="button" class="btn btn-primary btn-sm" style="margin-top: 20%;" data-toggle="modal" data-target="#ResumeModal">
            Add Your Data
        </button>

        <div class="modal fade" id="ResumeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Data Upload</h4>
                    </div>
                    <div class="modal-body ">
                         <div class="row">
                             <form  id="myform" action="" class="form-inline" method="POST" enctype="multipart/form-data" >
                                 <div class="form-group form-inline">
                                     <label for="">Name:</label>
                                     <input type="text" name="Name" class="name form-control">
                                 </div>
                                 <div class="form-group form-inline">
                                     <label for="">Email:</label>
                                     <input type="email" name="Email" class="email form-control">
                                 </div>
                                 <div class="form-group form-inline">
                                     <label for="">Upload File</label>
                                     <input type="file" id="resume" name="Resume" value="Browse" class="resume form-control">
                                 </div>
                                 <button id="AddDetails" style="margin-top: 4%;"  type="button" class="btn btn-sm btn-success">Submit</button>
                             </form>
                         </div>
                        <div class="row">
                            <table class="table table-bordered table-hover">
                                <thead class="btn-primary">

                                <th>Name</th>
                                <th>Email</th>
                                <th>Resume</th>
                                </thead>
                                <tbody id="tableBody"></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
              function SendData(form_data) {

                 $.ajax({
                     enctype:'multipart/form-data',
                     processData:false,
                     contentType:false,

                     type:"POST",
                     data:form_data,
                     url:"/Data.php" ,

                     success:function (data) {
                         if(data==404){
                             alert("Something went wrong");
                         }   else{

                          var obj=JSON.parse(data);

                             var test="<tr>";
                             var count=0;
                            $.each(obj,function (k,v) {
                                count++;
                                if(count==3){
                                    test+="<td><a  download='download' target='_blank' href='content/"+v+"'>Download File</a></td>";
                                } else{
                                    test+="<td>"+v+"</td>";
                                }


                            })   ;
                             test+="</tr>";
                             $("#tableBody").append(test);
                         }

                     }
                 });
              }
              $("#AddDetails").on("click",function () {
                  var name= $(".name").val();
                  var email=$(".email").val();
                  var resume=$(".resume").val();
                  if(name==null || name==""){
                      alert("Name can not be empty!");
                      return false;
                  };
                  if(email==null || email==""){
                      alert("Email can not be empty!");
                      return false;
                  };
                  if(resume==null || resume==""){
                      alert("Choose a file to upload!");
                      return false;
                  };

                  var form_data = new FormData(document.getElementById("myform"));
                      form_data.append("file",resume);
                   SendData(form_data);
              });
    });
</script>
</body>
</html>
