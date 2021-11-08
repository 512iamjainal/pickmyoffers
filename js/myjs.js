$("#em").hide();

$("#username").focusout(function(){
	var email = $(this).val();
	
	
   $.post("checkmail.php",
    {
        e : email
    },
    function(data){
		
		if(data.length!=0)
		{
			$("#em").html(data);
			$("#em").show();
		}
		
    });
});