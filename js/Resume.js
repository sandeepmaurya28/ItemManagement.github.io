$(document).ready(function () {
    //  Ajax Request Function
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
                    // Data Binding
                    $("#tableBody").append(test);
                }

            }
        });
    }

    // Form Submitting Function
    $("#AddDetails").on("click",function () {
        var name= $(".name").val();
        var email=$(".email").val();
        var resume=$(".resume").val();
        if(name==null || name==""){
            alert("Name can not be empty!");
            $(".name").focus();
            return false;
        };
        if(email==null || email=="" ){
            alert("Email can not be empty!");
            $(".email").focus();
            return false;
        };
        if(!validateEmail(email)){
           alert("Email is Invalid");
            $(".email").focus();
            return false;
        }
        if(resume==null || resume==""){
            alert("Choose a file to upload!");
            $(".resume").focus();
            return false;
        };

        var form_data = new FormData(document.getElementById("myform"));
        form_data.append("file",resume);
        SendData(form_data);
    });

    // modal open
    $("#showPopUp").on("click",function () {
           $("#CustomValueModal").show();
    })

    //Close POPUPS
    $("#remove").on("click",function () {
        $("#CustomValueModal").hide();
        $("#tableBody").empty();
    });

    //Email Validation  Function

    function validateEmail(sEmail) {
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(sEmail)) {
            return true;
        }
        else {
            return false;
        }
    }





});