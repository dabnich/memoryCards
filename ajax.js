function getXMLHttpRequest(){
	var request = false;
	try {
		request = new XMLHttpRequest();
	} 
	catch(err1) {
		try {
			request = new ActiveXObject('Msxml2.XMLHTTP');
		} 
		catch(err2) {
			try {
				request = new ActiveXObject('Microsoft.XMLHTTP');                
			} 
			catch(err3) {
				request = false;
			}
		}
	}
	return request;
}

/*
function loadDoc(){
	var http;
	http = getXMLHttpRequest();
	//http.overrideMimeType('text/xml');
	//http.setRequestHeader("Accept","text/plain");
	//http.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");
	//http.setRequestHeader("Content-length", params.length);
	//http.setRequestHeader("Connection", "close");
	
	http.onreadystatechange = function (){
		if(this.readyState==4 && this.status==200){
			document.getElementById("test").innerHTML = this.responseText;
		}
		else {
			document.getElementById("test").innerHTML = "error";
		}
	};
	http.open("POST", "test.php", true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send("name=Michal&aa=aaavb");
}   
*/