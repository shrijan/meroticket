$(document).ready(function () {$("#submit-875493000").bind("click", function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#sending").fadeIn();}, data:$("#submit-875493000").closest("form").serialize(), dataType:"html", success:function (data, textStatus) {$("#sending").fadeOut();$("#success").html(data);}, type:"post", url:"\/meroticket\/Tickets"});
return false;});});