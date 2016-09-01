Hcnav=new Object();
Hcnav.Search=document.getElementById('search');
Hcnav.title=document.getElementById('title');
Hcnav.nav=document.getElementById('nav');
function search(){
	if(Hcnav.Search.style.display=='block')
	{
		Hcnav.Search.style.display='none';
		Hcnav.title.style.display='block'
		document.getElementById('search-warp').className='search-warp';
	}
	else{
		Hcnav.Search.style.display='block';
		if(document.body.clientWidth<=500){
			var width=document.body.clientWidth;
			Hcnav.title.style.display='none'
			document.getElementById('search-warp').className='search-warp search-warp2';
			
		}
	}
}
function hidennav(){
	if(Hcnav.nav.style.display=='block')
	{
		Hcnav.nav.style.display='none'
	}
	else{
		Hcnav.nav.style.display='block'
	}
}
