//Add Click History	
jQuery('.click_history').click(function(){
	//alert('hello sanjay');
	var user_id = $(this).data('userid');
	var coupon_id = $(this).data('couponid');
	$.ajax({
		method: "POST",
		url: "click_history.php",
		data: { user_id: user_id, coupon_id: coupon_id }
	})
	.done(function( msg ) {
		console.log( "Data Saved: " + msg );
	});
});


jQuery("#search-box").keyup(function(){
       // alert('hello');
        $.ajax({
        type: "POST",
        url: "readCountry.php",
        data:'keyword='+$(this).val(),
        beforeSend: function(){
            $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
       
        success: function(data){
            $("#suggesstion-box").show();
            $("#suggesstion-box").html(data);
            $("#search-box").css("background","#FFF");
        }
        });
    });

function selectCountry(val) {
jQuery("#search-box").val(val);
jQuery("#suggesstion-box").hide();
}

function copy (str)
{
    //for IE ONLY!
    window.clipboardData.setData('Text',str);
}

