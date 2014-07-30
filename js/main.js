<!--
$(document).ready(function() {
    $("#submit_button").click(function() { 
        //get input field values
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_phone      = $('input[name=phone]').val();
        var user_message    = $('textarea[name=message]').val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone, 'userMessage':user_message};
            
            //Ajax post data to server
            $.post('email.php', post_data, function(response){  
                
                //load json data from server and output message     
                if(response.type == 'error')
                {
                    output = '<div id="error">'+response.text+'</div>';
                }else{
                
                    output = '<div id="success">'+response.text+'</div>';
                    
                    //reset values in all input fields
                    $('#contact_form input').val(''); 
                    $('#contact_form textarea').val(''); 
                }
                
                $("#result").hide().html(output).slideDown();
            }, 'json');
            
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
     //$("#result").slideUp();
    });
    
});

function unhide(divID) 
  {
    
    var item = document.getElementById(divID);
    AboutMe.className = 'hidden';
    Work.className = 'hidden';
    Contact.className = 'hidden';
    Portfolio.className = 'hidden';
   more.className = 'hidden';

  if (item)
   {
      item.className=(item.className=='hidden')?'unhidden':'hidden';
    }
}
    
  

function showHide(form) { 
    var serial = $(form).serialize();
    $.post(form.action, serial, function(){
        $('#Contact').show();
    });
}; 
  
-->