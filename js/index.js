
$(document).ready(function () {
    // Customer Object for Customer Details
    var Customer={};
    var ItemNumber=0;
    // Item Array 
    var ItemArray=new Array();

    // Open POPUP for Custom Value
    $("#CustomValue").on("click",function () {

        $("input[type=checkbox]:checked").val();
        if(!$("input[type=checkbox]:checked").val()){
            ShowError("Select Item To Update Custom Value");
            return false;
        }
        $("#CustomValueModal").toggle();
    });

    // Closing POPUP
    $("#Cancel").on("click",function () {
        $("#CustomValueModal").hide();
    });

    // function for Error Rendering
    function ShowError(error) {
        $("#error").html(error).show().fadeOut(3000);
    }

    // First Form Data Save
    $("#Form1Save").on("click",function () {

        var name=$("#CustomerName").val();
        var Address=$("#address").val();
        var AddressTo=$("#AddressTo").val();
        var profile=$("#profile option:selected").val();
        if(name==null || name == ""){
            ShowError("Enter Name");
            $("#CustomerName").focus();
            return false;
        }
        if(Address==null || Address == ""){
            ShowError("Enter Address");
            $("#address").focus();
            return false;
        }if(AddressTo==null || AddressTo == ""){
            ShowError("Enter Address To");
            $("#AddressTo").focus();
            return false;
        }
        if(profile==null || profile == "" || profile == 0){
            ShowError("Select Profile");
            $("#profile").focus();
            return false;
        }
        Customer.name=name;
        Customer.Address=Address;
        Customer.AddressTo=AddressTo;
        Customer.Profile=profile;
        $("#form1").hide();
        $("#form2").show();
    });

    // Qty and Price Data Validation
    $("body").on("blur","#qty,#price",function () {

        var qty=$("#qty").val();
        if(qty==undefined || !$.isNumeric(qty)){
            $("#qty").focus();
            qty=0;
            ShowError("Enter Number only| ");
            return false;
        }
        var price=$("#price").val();
        if(price==undefined || !$.isNumeric(price)){
            $("#price").focus();
            ShowError("Only Numbers ");
            price=0;
            return false;
        }
        var updatetotal=parseInt(qty)*parseInt(price);
        $("#total").text(updatetotal);
        $("#total").prop("value",updatetotal);
    });

    // Add a New Item
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

    // Function For Showing Item Added
    function AddNewItem(itemName,itemCode,qty,price,total,unit,category) {

        var key=itemCode+itemName;
        var table="<tr id='"+key+"' data-key='"+ItemNumber+"' >";
        table+="<td>"+(ItemNumber+1)+"&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' value='"+ItemNumber+"'></td>";
        table+="<td>"+itemName+"</td>";
        table+="<td>"+itemCode+"</td>";
        table+="<td>"+qty+"</td>";
        table+="<td>"+price+"</td>";
        table+="<td>"+total+"</td>";
        table+="<td><span class='glyphicon glyphicon-pencil pencil' ></span></td>";
        table+="<td><span  class='glyphicon glyphicon-remove remove'></span></td>";
        table+="</tr>";
        ItemNumber++;
        ItemArray.push({category:category,itemName:itemName,code:itemCode,qty:qty,price:price,unit:unit,total:total,tax:0,taxName:"tax"});
        $("#ItemList").append(table);
    }

    // Go Back to Form 2
    $("#back").on("click",function () {
        $("#form3").hide();
        $("#form2").show();
    });


    // Grand total update function
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

      // Custom Value Addition Event
    $("#AddValue").on("click",function () {
        var selected=$("input[type=radio]:checked").val();
        var custom=$("#Custom").val();
        var inputRate=$("#inputRate").val();
        if(selected==undefined){
            $("input[type=radio]").focus();

        } else if(inputRate==undefined || inputRate==null || inputRate=="" || !$.isNumeric(inputRate)){
            $("input[id=inputRate]").focus();
        } else if(custom==undefined || custom==null || custom==""){
            $("input[id=Custom]").focus();
        } else{
            if(parseInt(selected)==0){
                inputRate=parseInt(inputRate);
                var updategrand=$("#grandTotal");
                var grand=  parseInt(updategrand.data("value"));
                var key=parseInt($("input[type=checkbox]:checked").val());
                var total=parseInt(ItemArray[key].total);
                inputRate=inputRate*total/100;
                inputRate=parseInt(inputRate);
                AddCustomValue(inputRate,custom);
            }else if(parseInt(selected)==1){
                inputRate=parseInt(inputRate);
                AddCustomValue(inputRate,custom);
            }
            $("#CustomValueModal").hide();

        }
    });

    // Custom Value Addition Function
    function  AddCustomValue(total,custom) {
        var updategrand=$("#grandTotal");
        var grand= parseInt(updategrand.data("value"));
        if(grand==undefined)grand=0;
        grand+=parseInt(total);
        updategrand.text(grand);
        updategrand.data("value",grand);
        var key=parseInt($("input[type=checkbox]:checked").val());
        ItemArray[key].tax=parseInt(total);
        ItemArray[key].taxName= custom;
    }

    // Moving to Form 3
    $("#form2Save").on("click",function () {
        $("#form2").hide();
        $("#form3").show();
        var to="<address>"+Customer.AddressTo+"<br>"+Customer.name+"<br>"+Customer.Address+"</address>";

        $("#addressTo").html(to);
        var date=new Date();
        var d= " "+date.getDate()+"-"+(date.getMonth()+1)+"-"+date.getFullYear();
        $("#date").html(d);
        ListItem();
    });

    // Listing Item Details on Form3
    function ListItem() {
        var table="";
        $.each(ItemArray,function (k,v) {
            var key= ++k;
            table+="<tr><td>"+key+"</td>";
            table+="<td>"+v.code+"</td>";
            table+="<td>Total :"+v.total+"<br>"+v.taxName+" :"+v.tax+"</td>";
            table+="<td>"+v.qty+"</td>";
            table+="<td>"+v.price+"</td>";
            table+="<td>"+(parseInt(v.total)+parseInt(v.tax))+"</td>";
            table+="</tr>";
        }) ;
        $("#finalItemList").html(table);
    }
});
