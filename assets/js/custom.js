function login(){
	
	var un=$('#un').val();
	var pass=$('#pass').val();
	data={'username':un,'password':pass};
	$.post('login',data,function(fb)
	{
		if(fb.match('1'))
		{	
	window.location.href='dash';
	}
	else
	{
alert('No User');		
	}	
	})
}