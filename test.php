<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 3/7/2017
 * Time: 9:37 AM
 */      ?>
<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 3/7/2017
 * Time: 9:35 AM
 */  ?>
<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 3/7/2017
 * Time: 9:24 AM
 */ ?>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<style>

     .main:hover .BackNews{
         transform-style: preserve-3d;
         transition: transform 1s;
         transform: translateX( 0% ) rotateY( 180deg );
         position: absolute;
         backface-visibility: visible;
         top:0;
         display: block;
     }
      .BackNews:active{
         transform-style: preserve-3d;
         transition: transform 1s;
              backface-visibility: visible;
            visibility: visible;
         position: absolute;
         top:0;
     }
     .main:hover .frontNews{
         transform-style: preserve-3d;
         transition: transform 1s;
         transform: translateX( 0% ) rotateY( -180deg );
         backface-visibility: hidden;

     }
     .main:active .frontNews{
         display: block;
     }
    .main:active .BackNews{
         position: absolute;
         top:0;
         transform-style: preserve-3d;
         transition: transform 1s;
         transform: translateX( 0% ) rotateY( 180deg );
         /*transform: translateX( 0% ) rotateY( 180deg );*/
         backface-visibility: hidden;
         visibility:  hidden;
     }

    /*.frontNews:active .BackNews{*/
        /*display: none;*/
        /*position: absolute;*/
        /*top:0;*/
    /*}*/





</style>
<div class="container">


    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators" id="Indicator">

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" id="CarasoulItem" role="listbox">

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row" style="margin-top: 2%;" id="NewsList">

    </div>
</div>




<script src="js/jquery-2.2.3.min.js">  </script>
<script src="js/bootstrap.min.js">

</script>
<script >
    $(document).ready(function(){


        $.ajax({
            data:{
                source:"techcrunch",
                apiKey:"c5c8e71572ae4e2bb921a275e90baa4c"
            } ,
            url:"https://newsapi.org/v1/articles",
            type:"GET",
            success:function (data) {

                var itemvar="";
                   var count=0;
                var indicator="";
                var newsList="";
                    $.each(data.articles,function (k,v) {
                        if(count==0){
                              itemvar+="<div class=\"item active\"  >";
                              indicator+=' <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
                          } else{
                              itemvar+="<div class=\"item\"  >";
                              indicator+=' <li data-target="#carousel-example-generic" data-slide-to="'+count+'"></li>';
                          }
                          count++;



                        newsList+=" <div class='col-xs-12 col-sm-4 main ' id='main' style='height: 400px;'><div class='frontNews'>";
                        newsList+=" <img class='img-responsive' src='"+v.urlToImage+"' alt=''>";
                        newsList+="<a href='"+v.url+"' target='_blank' style='text-decoration: none;'>";
                        newsList+="<h3>"+v.title+"</h3>";
                        newsList+="</a>";
                        newsList+="<span>Author : "+v.author+" <br>Published At : "+v.publishedAt+"</span>";
                        newsList+="</div><div class='BackNews text-justify'  >";
                        newsList+="<a href='"+v.url+"' style='text-decoration: none;' target='_blank'><h3>"+v.description+"</a></h3>";
                        newsList+="</div></div>";

                       itemvar+="<img src='"+v.urlToImage+"'  style='height: 300px;'/>";
                        itemvar+="<div class=\"carousel-caption\">";
                        itemvar+="<h3>"+v.title+"</h3>    ";

                        itemvar+="<p>"+v.publishedAt+"</p>    ";

                       itemvar+="</div></div>";


                });
                $("#CarasoulItem").html(itemvar);
                $("#Indicator").html(indicator);
                $("#NewsList").html(newsList);

            }
        });

//        $(".BackNews").show();
    });
</script>

</body>
</html>


