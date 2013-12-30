$(function(){
	
	var $submit = $(".form_submit"),
		$inputs= $("input[type=text]");

		
		function carieli(){
			
			
				return $inputs.filter(function(){
					return !$.trim(this.value);
				}).length ===0;
		}
		
		$inputs.on('keyup', function(){
			$submit.prop("disabled", !carieli());
		}).keyup();

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
		
		if(msg>0){
		
			$('.table tr:first').after('<tr id="tr_'+msg+'"><td>'+msg+'</td><td>'+$('#fname').val()+'</td><td>'+$('#lname').val()+'</td><td>'+$('#cnt').val()+'</td><td>'+$('#ct').val()+'<td>'+$('#adr').val()+'<td>'+$('#tel').val()+'</td><td><input type="submit" value="washla" class="delete" id="'+msg+'"></td></tr>');
		
		
		}	 else{
			alert('ar daemata!');
		}
		
		
		
	}
});

});

$('.delete').live({click:function(){
var id = $(this).attr('id');
	
	var form_data = {
id : id
};


$.ajax({
	url: "delete.php",
	type: 'POST',
	async : false,
	data: form_data,
	success: function(msg) {
		
		if(msg==1){
		
		$('#tr_'+id).remove();
		
		}	 else{
			alert('ar waishala!');
		}
		
		
		
	}
});
}
});
	
});
