$(document).ready(function (e) {

    // $(".datepicker").datepicker({format: 'yyyy-mm-dd', todayBtn: 'linked'});

    $(".date .input-group-addon").click(function () {
        $(this).prev(".datepicker").focus();

    });

    $(".trdelete").on("click", function (e) {
        var $this = $(this);
        var $thisAction = $(this).attr("data-action");
        var $thisID = $(this).attr("data-id");

        var $thisParentTr = $(this).closest("tr");

        var $confirm = confirm("Are you sure, You want to delete it? this action is irreversible!")

        if ($confirm) {

            var $thisI = $this.find("i");
            $this.html(" Deleting...").prepend($thisI);
            $("i", $this).addClass("fa-spin");

            $.ajax({
                url: "/ajax",
                method: 'post',
                data: {action: $thisAction, formData: "id=" + $thisID},
                dataType: "json"
            }).done(function (response) {
                if (response.result == "success") {
                    $thisParentTr.slideUp("fast");
                }
            })
        } // if $confirm

    }); // end adelete

    // $(".aform").validator().on("submit", function (e) {
    $(document).on("submit", ".aform", function (e) {
        $(this).validator(); // added after live update
        var $thisForm = $(this);
        var $thisParent = $(this).parent();
        var $thisErrorContainer = $(".form-errors", $thisParent);
        var $formID = $(this).prop("id");
        var $formMethod = $(this).prop("method");
        var $formData = $(this).serialize();

        if (e.isDefaultPrevented()) {
            console.log("Invalid form");
        } else {
// Process Form

            $.ajax({
                    url: "/ajax",
                    method: $formMethod,
                    data: {action: $formID, formData: $formData},
                    dataType: "json"
                })
                .done(function (response) {

                    if (response.result == "success") {

                        $thisForm.slideUp("fast", function () {
                            $thisParent.html(response.data);
                            if (response.hasOwnProperty('redirect')) {
                                setTimeout(function () {
                                    window.location = response.redirect;
                                }, 1000);
                            }
                        });

                    } else {
                        $thisErrorContainer.show().html("<h4>Following errors occurred!</h4>" + response.data);
                        scroll2($thisErrorContainer);
                    }


                    // end .done function of ajax
                })
                .fail(function (jqXHR, textStatus) {
                    // Handle failure here.
                });

// End Form Process
        }

    });

    /* handle order form */
    var files;
    $('#order-form input[type=file]').on('change', prepareUpload);

    function prepareUpload(event) {
        files = event.target.files;
    }

    $("#order-form").on("submit", placeOrder);

    function placeOrder(event) {

        //     event.stopPropagation();
        //     event.preventDefault();

        $(this).validator();

        if (!event.isDefaultPrevented()) {
            //form validation by validator passed

            var data = new FormData();

            if (files) {
                $.each(files, function (key, value) {
                    data.append(key, value);
                });
            }

            var formData = {
                'publish_date': $("#order-form #publish_date").val(),
                'instructions': $("#order-form #instructions").val(),
                'shout_text': $("#order-form #shout_text").val(),
                'order_service_id': $("#order-form #order_service_id").val(),
                'acc_name': $("#order-form #acc_name").val(),
                'acc_id': $("#order-form #acc_id").val(),
                'publish_date_timezone': $("#publish_date_timezone").val(),
                'shout_account': $("#shout_account").val()
            };
			console.log(formData);
            data.append("formData", JSON.stringify(formData));

            $(".order-form-wrapper").slideUp();
            $(".order-form-loading").html('<i class="fa fa-spinner fa-spin"></i> Placing your order, please stand by...').slideDown();

            $.ajax({
                url: '/place-order',
                type: 'POST',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false,
                success: function (data, textStatus, jqXHR) {

                    if (data.status == "success") {
                        $(".order-form-loading").slideUp();
                        $(".order-form-wrapper").html(data.response).slideDown();
                    }
                    else {

                        // Handle errors here
                        $(".order-form-loading").slideUp();
                        $(".order-form-wrapper").slideDown();
                        $(".form-errors").html(data.response).slideDown();
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Handle errors here
                    //  console.log('ERRORS: ' + textStatus);
                    $(".order-form-loading").slideUp();
                    $(".order-form-wrapper").slideDown();
                    // STOP LOADING SPINNER
                }
            });

        } // end if form validtor validations passed

    } // ## placeOrder

//end order-form


    $("#chkremember").click(function () {

        $("input#remember").val($("#chkremember:checked").length);
    });


    $("a.funds-add").on('click', function () {
        if ($("form.paypal-prepay").is(":visible")) {
            $("form.paypal-prepay").removeClass("show-inline");
        } else {
            $("form.paypal-prepay").addClass("show-inline");
        }
    });

    $(".paypal-prepay").on("submit", function (e) {
        e.preventDefault();

        $("#custom").val($("#custom").val() + "&aa=" + $("#actual_amount").val());
        var fee = ($("#actual_amount").val() * (xtraP / 100));
        $("#amount").val(parseFloat($("#actual_amount").val()) + parseFloat(fee));

        this.submit();

    });

    /* ORDER COMPLETE IN REMODAL */
    $(document).on("click", "#add_account", function (e) {
        e.preventDefault();
        $this = $(this);
        $thisOriginalHTML = $this.html();
        $this.html('<i class="fa fa-spin fa-spinner"></i> ');
        $thisOrderId = $this.attr("data-order-id");

        $this.html($thisOriginalHTML);

        $('[data-remodal-id=remodal] .remodal-content').html('<h2>List an account on the marketplace</h2>' +
            '<div class="form-errors"></div>' +
            '<form class="aform" method="post" id="addIGAccount" action="javascript:void(0)">' +
            '<br><p>Username of the account</p><p> <input required type="text" placeholder="@Username" class="form-control" id="acc_name" name="acc_name"></p>' +
            '<p><input type="submit" class="btn btn-green btn-lg" value="Check Account"></p> ' +
            '<i>We never ask for access to your account, password or any other information. You simply start a listing for the added account on our website.</i>');

        $('[data-remodal-id=remodal]').remodal({hashTracking: false}).open();


    }); // order completed link

    /* ORDER COMPLETE IN REMODAL */
    $(document).on("click", ".order-completed-link", function (e) {
        e.preventDefault();
        $this = $(this);
        $thisOriginalHTML = $this.html();
        $this.html('<i class="fa fa-spin fa-spinner"></i> ');
        $thisOrderId = $this.attr("data-order-id");

        $this.html($thisOriginalHTML);

        $('[data-remodal-id=remodal] .remodal-content').html('<h2>Shoutout #' + $thisOrderId + '</h2>' +
            '<form class="aform" method="post" id="ordercomplete" action="javascript:void(0)">' +
            '<p>Verification URL:</p><p> <input required type="text" class="form-control" id="verification_link" name="verification_link"></p>' +
            '<p><input type="submit" class="btn btn-green btn-lg" value="Mark as Completed"></p> ' +
            '<i>Before you submit, Please make sure that the link is active and working, as it will be verified by the system automatically.</i>' +
            '<input type="hidden" name="order_id" value="' + $thisOrderId + '"></form>');

        $('[data-remodal-id=remodal]').remodal({hashTracking: false}).open();


    }); // order completed link

    /* ORDER REJECT IN REMODAL */
    $(document).on("click", ".order-reject-link", function (e) {
        e.preventDefault();
        $this = $(this);
        $thisOriginalHTML = $this.html();
        $this.html('<i class="fa fa-spin fa-spinner"></i> ');
        $thisOrderId = $this.attr("data-order-id");

        $this.html($thisOriginalHTML);

        $('[data-remodal-id=remodal] .remodal-content').html('<span class="info-icon"><i class="fa fa-times-circle-o" aria-hidden="true"></i></span></br><h2>Reject Shoutout #' + $thisOrderId + '</h2>' +
            '<form class="aform" method="post" id="orderReject" action="javascript:void(0)">' +
            '<p>Reason:</p><p> <textarea required type="text" class="form-control" id="rejection_reason" name="rejection_reason"></textarea></p>' +
            '<p><input type="submit" class="btn btn-info btn-lg" value="Reject Order"></p> ' +
            '<i>Please enter the reason that why are you rejecting this order.</i> <span class="badge badge-alert">THIS ACTION IS IRREVERSIBLE!</span>' +
            '<input type="hidden" name="order_id" value="' + $thisOrderId + '"></form>');

        $('[data-remodal-id=remodal]').remodal({hashTracking: false}).open();


    }); // order completed link
    
	 /* ORDER ACCEPT IN REMODAL */
    $(document).on("click", ".order-accept-link", function (e) {
        e.preventDefault();
        $this = $(this);
        $thisOriginalHTML = $this.html();
        $this.html('<i class="fa fa-spin fa-spinner"></i> ');
        $thisOrderId = $this.attr("data-order-id");

        // $this.html($thisOriginalHTML);
console.log($this.attr("data-order-id"));
		$.ajax({
            url: '/myaccount-order-accept',
            method: 'post',
            data: {id: $this.attr("data-order-id"), acceptInt: 1, acceptID: true}
        }).done(function (response) {
            $this.html($thisOriginalHTML);
            $('[data-remodal-id=remodal] .remodal-content').html(($.parseJSON(response)).data);
            $('[data-remodal-id=remodal]').remodal({hashTracking: false}).open();
        });
		
        // rueckgabestring besser im php unterbringen -> ('[data-remodal-id=remodal] .remodal-content').html('<h2>Order #' + $thisOrderId + ' accepted!</h2>');
	});

    /* ORDER DETAILS IN REMODAL */
    $(document).on("click", ".order-detail-link", function (e) {
        e.preventDefault();
        $this = $(this);
        $thisOriginalHTML = $this.html();
        $this.html('<i class="fa fa-spin fa-spinner"></i> ');

        $.ajax({
            url: '/myaccount-orderdetails',
            method: 'post',
            data: {id: $this.attr("data-order-id")}
        }).done(function (response) {
            $this.html($thisOriginalHTML);
            $('[data-remodal-id=remodal] .remodal-content').html(response);
            $('[data-remodal-id=remodal]').remodal({hashTracking: false}).open();

        });
    });
	
	/* ORDER STATS IN REMODAL */
    $(document).on("click", ".order-stats-link", function (e) {
        e.preventDefault();
        $this = $(this);
        $thisOriginalHTML = $this.html();
        $this.html('<i class="fa fa-spin fa-spinner"></i> ');

        $.ajax({
            url: '/myaccount-orderstats',
            method: 'post',
            data: {id: $this.attr("data-order-id")}
        }).done(function (response) {
            console.log(response);
            $this.html($thisOriginalHTML);
            $('[data-remodal-id=remodal] .remodal-content').html(response);
            $('[data-remodal-id=remodal]').remodal({hashTracking: false}).open();

        });
    });

	/* ORDER STATS SAVED IN REMODAL */
    $(document).on("click", ".order-stats-saved-link", function (e) {
        e.preventDefault();
        $this = $(this);
        $thisOriginalHTML = $this.html();
        $this.html('<i class="fa fa-spin fa-spinner"></i> ');

        $.ajax({
            url: '/myaccount-orderstats-saved',
            method: 'post',
            data: {id: $this.attr("data-order-id")}
        }).done(function (response) {
            console.log(response);
            $this.html($thisOriginalHTML);
            $('[data-remodal-id=remodal] .remodal-content').html(response);
            $('[data-remodal-id=remodal]').remodal({hashTracking: false}).open();

        });
    });

    /* AJAX LINKS TO OUTPUT IN REMODAL */
    $(document).on("click", ".aRemodal", function (e) {
        e.preventDefault();
        $this = $(this);
        $thisOriginalHTML = $this.html();
        $this.html("processing...");

        $.ajax({
            url: $this.attr("data-href"),
            method: 'post',
            data: {id: $this.attr("data-id")}
        }).done(function (response) {
            $this.html($thisOriginalHTML);
            $('[data-remodal-id=remodal] .remodal-content').html(response);
            $('[data-remodal-id=remodal]').remodal({hashTracking: false}).open();

        });
    });


});

function scroll2top() {
    $("html,body").animate({scrollTop: 0}, "slow");
    return false;
}

function scroll2(elem) {
    $(elem).animate({scrollTop: 0}, "slow");
    return false;
}