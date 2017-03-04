<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 3/3/2017
 * Time: 6:55 PM
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>User Info</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
<body>
<style>
    input,textarea{
        margin-bottom: 1%;
    }
    p{
        cursor: pointer;
        margin-bottom: 3px;
    }
    p:hover{
        color: #2e6da4;
    }
    hr{
        margin: 12px;
    }
    #CustomValueModal{
        position: fixed;
        z-index: 100;
        display: none;
        top: 30%;
        left: 33%;
        background-color:#fff;
        box-shadow: 1px 3px 5px 1px #adaeaf;
        border: 1px solid #eee;
        border-top:4px solid #3992de;
        width:400px;
        height:251px;
        padding: 10px;
    }
    #form3{
        margin-top: 3%;

    }
    #form3body{
        min-height: 500px;
        max-height:500px;
        overflow-x: hidden;
        overflow-y: auto;
    }
    .pencil{
        color: #3c763d;
    }
    .remove{
        color:darkred;
    }
      label{
          font-size: 12px;
      }
    .table>thead>tr>th,.table>tbody>tr>td{
        padding: 2px;
    }
    .main{
        padding: 20px;
        border: 1px solid #eee;
        box-shadow: 3px 4px 13px 0px #eee;
        margin-top: 2%;
    }

</style>
<div class="alert-danger col-sm-10 text-center" hidden id="error" style="position: fixed;top: 8%;left:30%;width: 54%; ">erroror</div>
<div id ="form1"     class="container">


    <div class="row col-xs-12 col-sm-offset-1 col-sm-10 main">
        <h4>Customer Details </h4>
        <hr>
        <div class="col-xs-12 col-sm-offset-2 col-sm-10" style="padding: 3%;border: 1px solid #eee;">

            <form action="" method="get" class="text-center">
                <div class="form-group form-inline form_div">

                    <div class="col-xs-4 ">
                        <label for="" class="pull-right">Customer Name :</label>
                    </div>
                    <div class="col-xs-6">
                        <input type="text" id="CustomerName" class="form-control pull-left"  required style="width: 100%;">
                    </div>
                </div>
                <div class="form-group form-inline form_div">
                    <div class="col-xs-4 ">
                        <label for="" class="pull-right">Address :</label>
                    </div>
                    <div class="col-xs-6">
                                            <textarea class="pull-left" id="address"  id="" cols="42" rows="6">
                        </textarea>
                    </div>


                </div>
                <div class="form-group form-inline form_div">
                           <div class="col-xs-4 ">
                               <label class="pull-right" for="">Address To :</label>

                           </div>
                       <div class="col-xs-6">
                           <input type="text" required id="AddressTo" class="form-control pull-left" style="width: 100%;">

                       </div>
                </div>
            </form>
        </div>


            <h4>Report Details</h4>
            <hr>
            <div class="col-xs-12 col-sm-offset-2 col-sm-10" style="padding: 3%; padding-top:0%;border:1px solid #eee;">

                <div class="form-group">
                    <div class="col-xs-12 text-center">
                        <h5>Select A Profile</h5>
                    </div>
                    <div class="col-xs-4">
                        <label for="" class="pull-right">Profile :</label>
                    </div>
                    <div class="col-xs-6">

                        <select id="profile"  class="form-control" id="">
                            <option value="0">Select Profile</option>
                            <option value="1">profile 1</option>
                            <option value="2">profile 2</option>
                            <option value="3">profile 3</option>
                            <option value="4">profile 4</option>
                        </select>
                    </div>
                </div>

            </div>



            <div class=" col-xs-12 col-sm-offset-2 col-sm-10" >
                <hr>
                <button class="btn btn-sm btn-primary pull-right" id="Form1Save">Next</button>
            </div>
        </div>

    </div>
</div>

<div id="form2" hidden  class="container" style="position: relative; z-index: 0;">

    <div class="row col-xs-12 col-sm-offset-1 col-sm-10">
        <h4>Add items to the Quotation</h4>
        <hr>
        <div class="col-xs-12 col-sm-offset-2 col-sm-10" style="padding: 2%;border: 1px solid #eee;">

            <form action="" class="form-inline">
                <div class="form-group ">
                         <label>Category</label>
                    <br>
                    <select name="" class="form-control" id="Category">
                        <option value="Category1">Category1</option>
                        <option value="Category2">Category2</option>
                        <option value="Category3">Category3</option>
                        <option value="Category4">Category4</option>
                    </select>
                </div>
                <div class="form-group " >
                    <label for="">Item Name</label> <br>
                    <select name="" class="form-control" id="ItemName">
                        <option value="item1">item1</option>
                        <option value="item2">item2</option>
                        <option value="item3">item3</option>
                        <option value="item4">item4</option>
                    </select>
                </div>
                <div class="form-group" style="width: 15%;">
                    <label for="">Item Code</label> <br>
                    <input type="text" style="width: 90%;" id="itemCode" class="form-control">
                </div>
                <div class="form-group" style="width:8%;">
                    <label for="">Qty</label> <br>
                    <input type="text" style="width: 90%;"  id="qty" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Unit</label> <br>
                    <select name="" class="form-control" id="unit">
                        <option value="INR">INR</option>
                        <option value="US">US</option>

                    </select>
                </div>
                <div class="form-group" style="width: 15%;">
                    <label for="">Price</label> <br>
                    <input type="text"style="width: 90%;"  id="price" class="form-control">
                </div>
                <div class="form-group" style="width: 12%;">
                    <label for="">Total</label> <br>
                    <input type="text" style="width: 90%;"  id="total"class="form-control">
                </div>

                  <button type="button" style="margin-top: 3%;" id="Item" class="btn btn-info btn-sm">Add</button>

            </form>
        </div>
    </div>

    <div class="row col-xs-12 col-sm-offset-1 col-sm-10">
        <h4>Quotation Item List</h4>
        <hr>
        <div class="col-xs-12 col-sm-offset-2 col-sm-10 table-responsive" style="border: 1px solid #eee; padding: 0;max-height: 354px; overflow-y: auto;overflow-x: hidden;">
                <table class="table table-bordered scroll">
                    <thead style="background-color: #286090;color:#fff;  ">
                      <tr>
                    <th>SI No.</th>
                        <th>Item Name</th>

                        <th>Item Code.</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Total</th>
                          <th colspan="2">Action</th>
                      </tr>
                    </thead>

                          <tbody  id="ItemList" >

                          </tbody>


                </table>
            <h4 class="text-center">Add Custom Values</h4>
            <hr>
            <div class="col-sm-5 text-right">
                     <p>Add a Custom Total</p>
                     <p id="CustomValue">Add a Custom Value</p>
                     <p>Add an Offer</p>
                     <p>Add a Details</p>
                     <p>Add Suject</p>
            </div>
            <div class="col-sm-7" style="border: 1px solid #eee;min-height: 115px;max-height: 115px; padding: 0px;">
                <table class="table table-bordered">
                    <tbody id="">

                    <tr >
                        <td>Grand Total :</td>
                        <td id="grandTotal" data-value="0">0</td>
                        <td class="unit">INR</td>
                        <td><span class="glyphicon glyphicon-pencil pencil" ></span></td>
                        <td><span class="glyphicon glyphicon-remove remove" ></span></td>
                    </tr>
                    <tr >
                        <td>Total</td>
                         <td id="finalTotal" data-value="0">0</td>
                         <td class="unit">INR</td>
                        <td><span class="glyphicon glyphicon-pencil pencil" ></span></td>
                        <td> <span class="glyphicon glyphicon-remove remove" ></span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-center">INR FiveThousands only</p>
        </div>

    </div>
    <div class="row col-xs-12 col-sm-offset-1 col-sm-10">
        <hr>
        <button class="btn btn-primary btn-sm pull-right" style="margin-right: 20%;" id="form2Save">Next</button>
    </div>


 
</div>
<div id="form3"  hidden class="container">
       <div class="row col-xs-12 col-sm-offset-2 col-sm-10 " >
           <div class="col-xs-12 text-left" style="padding: 2%;border:1px solid #eee;" id="form3body">
                <p> Test Company Name</p>
                <p>Test Address 1</p>
                <p>Test Address 2</p>
                <p>City</p>
               <h4 class="text-center">Quotation</h4>
               <hr>
              <p>To </p>
              <p id="addressTo">Purchase Manager </p>

               <table class="table">
                   <thead>
                   <tr>
                       <th>No.</th>
                       <th>Item Code</th>
                       <th>Description</th>
                       <th>Qty</th>
                       <th>Unit Price</th>
                       <th>Total</th>
                   </tr>
                   </thead>
                   <tbody id="finalItemList"></tbody>
               </table>
           </div>


       </div>
    <hr style="margin-bottom: 3%;">
    <div class="pull-right">
        <button class="btn btn-primary">Back</button>
        <button class="btn btn-primary">Save & Open</button>
        <button class="btn btn-primary">Save & Email</button>
        <button class="btn btn-primary">Cancel</button>
    </div>

</div>
<div id="CustomValueModal" >
    <p>Add Custom Summery Value</p>
    <hr>
    <div class="form-group form-inline">
        <label for="">Customer Name :</label>
        <input type="text" id="Customer" class="form-control">
    </div>
    <div class="form-group form-inline">
        <input type="radio"  name="gender" value="0"> &nbsp;&nbsp;By percetage
        <br>
        <input type="radio" name="gender" value="1" >&nbsp;&nbsp;By price
        <input type="text" style="width: 25%;margin-left: 20%; " id="inputRate" class="form-control ">

    </div>
    <hr>
    <div class="pull-right">

        <button class="btn btn-primary" id="AddValue">Add</button>
        <button class="btn btn-danger" id="Cancel" >Cancel</button>
    </div>
</div>

<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/toWords.js"></script>
<script>
  $(document).ready(function () {
      var Customer={};
      var ItemNumber=0;
      var ItemKey=new Array();

      $("#CustomValue").on("click",function () {
                  $("input[type=checkbox]:checked").val();

                   if(!$("input[type=checkbox]:checked").val()){
                        ShowError("Select Item To Update Custom Value");
                       return false;
                   }
                  $("#CustomValueModal").toggle();
                  $("#Customer").prop("value",Customer.name);

      });
      $("#Cancel").on("click",function () {
             $("#CustomValueModal").hide();
      });
      function ShowError(error) {
          $("#error").html(error).show().fadeOut(3000);

      }
      $("#Form1Save").on("click",function () {

               var name=$("#CustomerName").val();
               var Address=$("#address").val();
              var AddressTo=$("#AddressTo").val();
             var profile=$("#profile option:selected").val();
              if(name==null || name == ""){
                  ShowError("Enter Name");
                  return false;
              }
              if(Address==null || Address == ""){
                  ShowError("Enter Address");
                  return false;
              }if(AddressTo==null || AddressTo == ""){
                  ShowError("Enter Address To");
              return false;
              }
              if(profile==null || profile == "" || profile == 0){
                  ShowError("Select Profile");
                  return false;
              }
              Customer.name=name;
              Customer.Address=Address;
              Customer.AddressTo=AddressTo;
              Customer.Profile=profile;
               localStorage.setItem("Customer",JSON.stringify(Customer));
               $("#form1").hide();
               $("#form2").show();
      });
      $("body").on("blur","#qty,#price",function () {

          var qty=$("#qty").val();
              if(qty==undefined || !$.isNumeric(qty))qty=0;


          var price=$("#price").val();
          if(price==undefined || !$.isNumeric(price))price=0;
          var updatetotal=parseInt(qty)*parseInt(price);
          $("#total").text(updatetotal);
          $("#total").prop("value",updatetotal);
      });
      $("#Item").on("click",function () {
                 var category=$("#Category option:selected").val();
                var itemName=$("#ItemName option:selected").val();
                var itemCode=$("#itemCode").val();
                var qty=$("#qty").val();
                var price=$("#price").val();
                var unit=$("#unit option:selected").val();

              var total=$("#total").val();

            if(itemCode==null || itemCode==""){
                ShowError("Enter Item Code");
                return false;
            } else if(qty==null || qty==""){
                ShowError("Enter Qty");
              return false;
          } else if(price==null || price == "" || !$.isNumeric(price)){
                  ShowError("Enter Price ");
                return false;
            }
           AddNewItem(itemName,itemCode,qty,price,total,unit,category);
              UpdateGrand(total);


      });
      function AddNewItem(itemName,itemCode,qty,price,total,unit,category) {

          var key=itemCode+itemName;
          var table="<tr id='"+key+"' data-key='"+ItemNumber+"' >";
          table+="<td><input type='checkbox' value='"+ItemNumber+"'></td>";
          table+="<td>"+itemName+"</td>";
          table+="<td>"+itemCode+"</td>";
          table+="<td>"+qty+"</td>";
          table+="<td>"+price+"</td>";
          table+="<td>"+total+"</td>";
          table+="<td><span class='glyphicon glyphicon-pencil pencil' ></span></td>";
          table+="<td><span  class='glyphicon glyphicon-remove remove'></span></td>";
          table+="</tr>";
               ItemNumber++;
          ItemKey.push({category:category,itemName:itemName,code:itemCode,qty:qty,price:price,unit:unit,total:total,tax:0});
          $("#ItemList").append(table);
      }

      function UpdateTotal() {
          
      }
      
     function UpdateGrand(total) {

         var updategrand=$("#grandTotal");
         var grand= parseInt(updategrand.data("value"));
         if(grand==undefined)grand=0;
         grand+=parseInt(total);
         updategrand.text(grand);
         updategrand.data("value",grand);
         $("#finalTotal").data("value",grand);
         $("#finalTotal").text(grand);

     }


     $("#AddValue").on("click",function () {
            var selected=$("input[type=radio]:checked").val();
            var name=$("#Customer").val();
            var inputRate=$("#inputRate").val();
         if(selected==undefined){
               $("input[type=radio]").focus();

         } else if(inputRate==undefined || inputRate==null || inputRate==""){
             $("input[id=inputRate]").focus();
         } else if(name==undefined || name==null || name==""){
             $("input[id=Customer]").focus();
         } else{
            if(parseInt(selected)==0){
                       inputRate=parseInt(inputRate);
                        var updategrand=$("#grandTotal");
                         var grand=  parseInt(updategrand.data("value"));
                           inputRate=inputRate*grand/100;
                           inputRate=parseInt(inputRate);
                     AddCustomValue(inputRate);
            }else if(parseInt(selected)==1){
                   inputRate=parseInt(inputRate);
                    AddCustomValue(inputRate);
            }
         }
     });

      function  AddCustomValue(total) {
          var updategrand=$("#grandTotal");
          var grand= parseInt(updategrand.data("value"));
          if(grand==undefined)grand=0;
          grand+=parseInt(total);
          updategrand.text(grand);
          updategrand.data("value",grand);
          var key=parseInt($("input[type=checkbox]:checked").val());
          ItemKey[key].tax=parseInt(total);


      }
      $("#form2Save").on("click",function () {
            $("#form2").hide();
            $("#form3").show();
             var to="<address>"+Customer.AddressTo+"<br>"+Customer.name+"<br>"+Customer.Address+"</address>";

            $("#addressTo").html(to);
             ListItem();
      });
      function ListItem() {
         $.each(ItemKey,function (k,v) {
             var key= ++k;
             var table="<tr><td>"+key+"</td>";
                  table+="<td>"+v.code+"</td>";
                  table+="<td></td>";
                  table+="<td>"+v.qty+"</td>";
                  table+="<td>"+v.price+"</td>";
                  table+="<td>"+(parseInt(v.total)+parseInt(v.tax))+"</td>";

                table+="</tr>";
                   alert(table);
             $("#finalItemList").append(table);
         }) ;




      }
  });
</script>
</body>
</html>