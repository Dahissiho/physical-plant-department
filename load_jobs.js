//Check if we are using IE.
var change= false; 
try {
//If the javascript version is greater than 5.
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
} catch (e) {
//If not, then use the older active x object.
try {
//If we are using IE.
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
} catch (E) {
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}

//If we are using a non-IE browser, create a JavaScript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
}

function makerequest(serverPage, objID, objID2) {
	
	
var obj = document.getElementById(objID);
xmlhttp.open("GET", serverPage);

xmlhttp.onreadystatechange = function() {
	
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//loadlabel();
obj.innerHTML = xmlhttp.responseText;
sameColor(objID,objID2);

change = false;
}
}

xmlhttp.send(null);
}



function o(){
	alert("55555 and id is " );
	}
	
function sameColor(id,id2){
	var parent = document.getElementById(id2)
	var children = document.getElementById(id).childNodes
	
	parent.style.backgroundColor = "#0099CC";
	for(i=0;i<children.length;i++){
		children.item(i).style.backgroundColor = "#3366FF";
		}
}


function reld(){
	alert("blie");
	if(change){
		location.reload(true);
		change = true;
		}
	}
	
function loadlabel(){
	alert("loadlabel is active");
	var label = '<tr><th>First name</th></tr>';
	document.getElementById("label").innerHTML = label;
	}
				
