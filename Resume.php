<!--

 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 3/3/2017
 * Time: 3:14 PM

-->
<!DOCTYPE html>
<html>
<head>
    <title>Resume Upload</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<style>
    #CustomValueModal{
        position: fixed;
        z-index: 100;

        top: 12%;
        left: 15%;
        background-color:#fff;
        box-shadow: 1px 3px 5px 1px #adaeaf;
        border: 1px solid #eee;
        border-top:4px solid #3992de;
        width:70%;
        height:480px;
        padding: 10px;
    }
    #DataDetails{
        max-height: 230px;
        overflow-x: hidden;
        overflow-y: auto;
    }
    #remove{
        color: #c9302c;
    }
    ::-webkit-scrollbar {
        width: 8px;
    }
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px #9d9d9d;
        border-radius: 6px;
    }
    ::-webkit-scrollbar-thumb {
        border-radius: 6px;
        -webkit-box-shadow: inset 0 0 6px #9d9d9d;
    }
</style>
<div class="container">
    <div class="row col-xs-12   text-center">
        <!--First page button only-->
        <button type="button" class="btn btn-primary btn-sm"  id="showPopUp" style="margin-top: 20%;"  >
            Add Your Data
        </button>

        <!--modal-->
        <div id="CustomValueModal" hidden >
            <p>Data Upload     <span class="glyphicon glyphicon-remove pull-right" id="remove"></span></p>
            <hr>

            <div class="row col-xs-12  col-sm-12">
                <form  id="myform" action="" class="form-inline" method="POST" enctype="multipart/form-data" >
                    <div class="form-group form-inline">
                        <label for="">Name:</label>
                        <input type="text" name="Name" class="name form-control">
                    </div>
                    <div class="form-group form-inline">
                        <label for="">Email:</label>
                        <input type="email" name="Email" class="email form-control">
                    </div>
                    <div class="form-group form-inline ">
                        <label for="">Upload File</label>
                        <input type="file" id="resume" name="Resume" value="Browse" class="resume form-control">
                    </div>
                    <button id="AddDetails" style="margin-top: 2%;margin-bottom: 2%;"  type="button" class="btn btn-sm btn-success">Submit</button>
                </form>
            </div>
            <div class="row col-xs-12  col-sm-12" id="DataDetails" >
                <table class="table table-bordered table-hover">
                    <thead class="btn-primary">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Uploaded File</th>
                    </thead>
                    <!--For Submitted  Data Rendering -->
                    <tbody id="tableBody"></tbody>
                </table>
            </div>


        </div>
        <!--End of Modal-->
    </div>
</div>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Resume.js"></script>
</body>
</html>