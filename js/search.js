// JavaScript Document
function searchq() {
	var searchtext = $("input[name='search']").val();
	//parameter in function() is from echo of php file.
	//Doesn't have to be data, can be output, etc.
	$.post("search.php", {searchValue: searchtext}, function(data) {
		$("#output").html(data);
	});
}