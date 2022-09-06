<div class='chat-messages p-2' id='chat-box'></div>

<script type="text/javascript">
	//Chat setting.
	//NEED TO FIXES...
	var myDiv = document.getElementById("chat-box");
	myDiv.scrollTop = myDiv.scrollHeight;

	//Copy message.
	<?php
		foreach($messageData as $message){
			echo"
			function messageCopy".$message['id_message']."(){
				var copyText = document.getElementById('msgBody".$message['id_message']."');
				copyText.select();
				copyText.setSelectionRange(0, 99999); /* For mobile devices */
				navigator.clipboard.writeText(copyText.value);
			}";
		}
	?>	

	//Get data ajax
	$(document).ready(function() {
        clear();
    });
    
    function clear() {
        setTimeout(function() {
            update();
            clear();
        }, 1000); //Every 1500 milliseconds
    }
    
    function update() {
        $.ajax({
            url: 'message_C/getMsg',
            type: 'get',
            dataType: 'json',
            success: function(response){
                var len = 0;
                $('#chat-box').empty(); 
                if(response != null){
                    len = response.length;
                }

                //Date converter.
                function convertDate(datetime){
                    if(datetime == "0000-00-00 00:00:00"){
                        return "-";
                    } else {
                        const result = new Date(datetime);
						return result.getHours() + "<b>:</b>" + result.getMinutes();
                    }
                }

				//Get message type by it's sender
				function convertSender(sender){
					if(sender == "customer"){
						return "right";
					} else {
						return "left";
					}
				}

				//Get bubble chat bg color.
				function colorSender(sender){
					if(sender == "customer"){
						return "#C4DDFF";
					} else {
						return "#E8F9FD";
					}
				}

				//Get profile image by it's sender
				function getImageProfile(type, sender, imageURL, guide_fullname, phone, garage_username){
					if(sender == "customer"){
						return "<img src='http://localhost/Tripversal/assets/uploads/user/" + imageURL + ".jpg' class='rounded-circle mr-1' alt='Chris Wood' width='40' height='40'>";
					} else {
						if(type == "Guide"){
							return "<img src='http://localhost/Tripversal/assets/image/guide/" + guide_fullname + "_" + phone + ".jpg' class='rounded-circle mr-1' width='40' height='40'>";
						} else if(type == "Garage"){
							return "<img src='http://localhost/Tripversal/assets/uploads/garage/garage_" + garage_username + ".jpg' class='rounded-circle mr-1' width='40' height='40'>";
						}
					}
				}

				//Date diff or chip
				function datechip(datetime){
					const result = new Date(datetime);
					const month = result.toLocaleString('default', { month: 'long' });
					
					return 	"<div class='container d-block mx-auto text-center rounded p-1 m-2' style='background:#e3e3e3; width:120px;'>" +
								"<a>" + result.getDate() + " " + month.slice(0, 3) + " " + result.getFullYear() + "</a>" +
							"</div>";
				}
                
                if(len > 0){
					var before = "";
                    for(var i=0; i<len; i++){
                        //Attribute
                        var body = response[i].body;
						var imageURL = response[i].imageURL;
						var id_message = response[i].id_message;
						var datetime = response[i].datetime;
						var sender = response[i].sender;
						var type = response[i].type;
						var guide_fullname = response[i].guide_fullname;
						var phone = response[i].phone;
						var garage_username = response[i].garage_username;
						var imageURL = response[i].imageURL;
						var chip = "";

						const result = new Date(datetime);
						var check = result.getDate() + result.getMonth() + result.getFullYear();

						if(before != check){
							before = check;
							chip = datechip(datetime);
						} else {
							chip = "";
						}

						var tr_str = 
							chip +
							"<div class='chat-message-" + convertSender(sender) + " pb-4'>" +
								"<div style='margin:10px !important;'>" + getImageProfile(type, sender, imageURL, guide_fullname, phone, garage_username) + "</div>" +
								"<div class='flex-shrink-1 rounded py-2 px-3 mr-3' style='background:" + colorSender(sender) + ";'>" + body + 
									"<div class='text-secondary mt-2' style='font-size:11px;'>" + convertDate(datetime) + "</div>" +
									"<input type='text' value='" + body + "' id='msgBody" + id_message + "' hidden>" +
								"</div>" +
								"<div id='content'>" +
									"<a id='chatdropdown' data-bs-toggle='dropdown' type='button'><i class='fa-solid fa-gear fa-lg mx-2 my-4' style='color:#4169e1;'></i></a>" +
									"<ul class='dropdown-menu' aria-labelledby='chatdropdown'>" +
										"<li>" +
											"<form action='message_C/unsend' method='POST'>" +
												"<input name='id_message' value='" + id_message + "' hidden>" +
												"<button class='dropdown-item' type='submit'><i class='fa-solid fa-trash'></i> Unsend</button>" +
											"</form>" +
										"</li>" +
										"<li><a class='dropdown-item' onclick='messageCopy" + id_message + "()'><i class='fa-solid fa-copy'></i> Copy</a></li>" +
										"<li><a class='dropdown-item' href='#'><i class='fa-solid fa-share'></i> Forward</a></li>" +
									"</ul>" +
								"</div>" +
							"</div>" ;
						$("#chat-box").append(tr_str);
                    }
                }else{
                    var tr_str = 
                        "<h5>Empty chat</h5>";
                    $("#chat-box").append(tr_str);
                }
            }
       	});
    }
</script>
