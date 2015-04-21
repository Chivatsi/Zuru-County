function searchq () {
		var searchTxt = $("input[name = 'search']").val();
		$('#output').show().css('postion', 'absolute');

		$.ajax({
			type: 'POST',
			url: 'search.php',
			data: ({searchVal: searchTxt}),
			success: function(output){
				$("#output").html(output);
			}
		});
	}
			
$(function() {
 $( "#datepicker" ).datepicker({
 	minDate: -0, maxDate: "+1M +10D",
 });
  }) ;
    $(function() {
    $( "#datepicker2" ).datepicker({
    	minDate: +1, maxDate: "+1M +10D"
    });
  });



