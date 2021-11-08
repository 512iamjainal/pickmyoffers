/* Image Validation Start*/
$('#companylogo').change(function(){
      //alert("ddnkvm");
        var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
       // alert("success");

        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            alert("Only formats are allowed : "+fileExtension.join(', '));
              // $('#image').focus();
               $("#companylogo").focus(function(){
            $(this).css({"border":"2px solid red"});
           });
             $('#companylogo').val("");
             
        }
    });
/* Image Validation End*/

//DatePicker On Insert Coupon
    $('#expirydatepicker').datepicker({
        /*defaultDate: "11/1/2013",
        disabledDates: [
			moment("12/25/2013"),
			new Date(2013, 11 - 1, 21),
			"11/22/2013 00:53"
        ]*/
		format: 'yyyy-mm-dd',
    });
	
/*Blog Image validation Start*/

    $('#image').change(function () {
        var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            alert("Only formats are allowed : "+fileExtension.join(', '));
        }
    });

/*Blog Image Validation End*/	
	
//For Editor
CKEDITOR.replace('blog_editor');
//$('#blog_editor').wysihtml5();