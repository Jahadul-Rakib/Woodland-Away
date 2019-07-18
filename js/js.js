(function($){
$(".navbar-toggle").click(function(){
      $(".myNavbar").slideToggle(400);
});

  //Click event to scroll to top
  $('.scrollTop').click(function(){
    $('html, body').animate({scrollTop : 0},1000);
    return false;
  });

  $('#owl-demo').owlCarousel({ 
    navigation : false, // Show next and prev buttons
    slideSpeed : 3000,
    paginationSpeed : 400,
    singleItem:true, 
    // "singleItem:true" is a shortcut for:
    // items : 1, 
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false,
    autoPlay: true,
  });
 
  $('#owl-demo1').owlCarousel({ 
    navigation : false, // Show next and prev buttons
    slideSpeed : 3000,
    paginationSpeed : 400,
    singleItem:true, 
    // "singleItem:true" is a shortcut for:
    // items : 1, 
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false,
    autoPlay: 6000,
    pagination:false,
  });

  $('#owl-demo3').owlCarousel({
 
      autoPlay: 5000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      pagination:false,
 
  });

   $(function () {
                $('#datetimepicker5').datetimepicker({
                    defaultDate: "11/1/2013",
                    disabledDates: [
                        moment("12/25/2013"),
                        new Date(2013, 11 - 1, 21),
                        "11/22/2013 00:53"
                    ]
                });
            });

    
  //to top


    //booking

    $("#adult").change(function(){
        var quantity = $(this).val();

        $.ajax({
            url: 'view/Booking/Booking.php',
            type: 'post',
            data: {qid1:quantity},
            dataType: 'json',
            success:function(response){


                var len = response.length;

                $("#price1").empty();

                var totalprice = response['price']*quantity;
                $("#price1").append("<input name='price1' type='text' style='display: inline-block' readonly value='"+totalprice+"'>");
            }
        });
    });

    $("#child").change(function(){
        var quantity = $(this).val();

        $.ajax({
            url: 'view/Booking/Booking.php',
            type: 'post',
            data: {qid2:quantity},
            dataType: 'json',
            success:function(response){


                var len = response.length;

                $("#price2").empty();

                var totalprice = response['price']*quantity;
                $("#price2").append("<input name='price2' type='text' style='display: inline-block' readonly value='"+totalprice+"'>");

            }
        });
    });


    $("#old").change(function(){
        var quantity = $(this).val();

        $.ajax({
            url: 'view/Booking/Booking.php',
            type: 'post',
            data: {qid3:quantity},
            dataType: 'json',
            success:function(response){


                var len = response.length;

                $("#price3").empty();

                var totalprice = response['price']*quantity;
                $("#price3").append("<input name='price3' type='text' style='display: inline-block' readonly value='"+totalprice+"'>");

            }
        });
    });


    $("#family").change(function(){
        var quantity = $(this).val();

        $.ajax({
            url: 'view/Booking/Booking.php',
            type: 'post',
            data: {qid4:quantity},
            dataType: 'json',
            success:function(response){
                var len = response.length;
                $("#price4").empty();
                var totalprice = response['price']*quantity;
                $("#price4").append("<input name='price4' type='text' style='display: inline-block' readonly value='"+totalprice+"'>");

            }
        });
    });

    $('#dp1').fdatepicker({
        initialDate: '',
        format: 'mm-dd-yyyy',
        disableDblClickSelection: true,
        leftArrow:'<<',
        rightArrow:'>>',
        closeIcon:'X',
        closeButton: true
    });

    $('#dp2').fdatepicker({
        initialDate: '',
        format: 'mm-dd-yyyy',
        disableDblClickSelection: true,
        leftArrow:'<<',
        rightArrow:'>>',
        closeIcon:'X',
        closeButton: true
    });

}) ( jQuery );
