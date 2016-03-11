

$('.edit').click(function(e){
    e.preventDefault();
    $('.content').html('<div class="row"><div class="text-center"><img src="public/dist/img/preloader.gif" /><div><div>');
    $.ajax({
url: 'Jquizme',
    	dataType: 'html',
    	success: function(data){
                 console.log(data);
                $('.content').html(data);
    	},

    	error: function(){
    	},

    	complete: function(){
    	}
});
 
});


$('#Save').click(function(){
    
   $.post('Jquizme/create',
    $("form").serialize(),
    function(result) {
        console.log(result);
     //$("#error_message").html(result).appendTo("form"); 
   },"html");
  }); 







