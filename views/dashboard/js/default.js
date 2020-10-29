
$(function(){


   $.get('dashboard/xhrGetListings', function(o){
        	// $("#listInserts"); 
        	for (var i = 0; i < o.length; i++) {
        		$("#listInserts").append('<div>'+o[i].text+'<a class="del" rel="'+o[i].id+'" href="#"></a></div>');
        	}
   //      	$(".del").click(function(){
   //      		delItem = $(this);
   //      		var id = $(this).attr('rel');
   //      		alert(id);
		 //       $.post('dashboard/xhrDeleteListing', {'id':id}, function(o){
			//        alert(1);
			//        delItem.parent().remove();
		 //        }, 'json');
		 //       return false;
			// });

        }, 'json');


	$("#randomInsert").submit(function(){
        var url = $(this).attr('action');
		var data = $(this).serialize();

		$.post(url, data, function(o){
			alert(1);
			$("#listInserts").append('<div>'+ o.text + '<a class="del" rel="'+o.id+'" href="#"></a></div>');
			
		}, 'json');
		return false ;
	});
});