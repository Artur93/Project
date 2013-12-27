$(function(){

$('.form_submit').click(function(){

var form_data = {
 firstname : $('#fname').val(),
 lastname : $('#lname').val(),
 country : $('#cnt').val(),
 city : $('#ct').val(),
 address : $('#adr').val(),
 telephone : $('#tel').val(),
 ajax : 2
};


$.ajax({
	url: "insert.php",
	type: 'POST',
	async : false,
	data: form_data,
	success: function(msg) {
		
		if(msg==1){
		
			$('.append').append('<tr><td>'+$('#fname').val()+'</td><td>'+$('#lname').val()+'</td><td>'+$('#cnt').val()+'</td><td>'+$('#ct').val()+'<td>'+$('#adr').val()+'<td>'+$('#tel').val()+'</td></tr>');
		
		
		}	 else{
			alert('ar daemata!');
		}
		
		
		
	}
});

});
	
});