function getdata(what,action,id)
{
	
	$.ajax({
		url:'missdata.php?what='+what+'&action='+action+'&id='+id,
		type:'POST',
		success:function(data)
		{
			$("#missdata").html(data);			
		}

	});
}