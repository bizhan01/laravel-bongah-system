// <!--
// ***********************************************************
// * ******************************************************* *
// * * Author: Rahmatullah Bizhan                          * *
// * * Email: rahmatullahbizhan@gmail.com                  * *
// * * Please Kindly Report any error or bug you may face. * *
// * * Contact me if you have any questions :)             * *
// * ******************************************************* *
// ***********************************************************
// -->

$(document ).ready(function() {
	$('.delete').on('click', function () {
		alert('ok');
	});
});


// Show password
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


// Show confirm password
function myFunction1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}



// choose | select deal type
$("#deal_select").change(function() {
	if ($("#aa").is(":selected")) {
		$("#a").show()&&$("#b").hide();
	} else if ($("#bb").is(":selected")) {
		$("#b").show()&&$("#a").hide();
	} else {
		$("#b").show()&&$("#a").hide();
	}
});
