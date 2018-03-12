var xhr=new XMLHttpRequest();
var anchors=document.getElementsByTagName("nav")[0].getElementsByTagName("a");
for(var i=0;i<anchors.length;i++)
{
	anchors[i].addEventListener("click",output,false);
}
function output(e)
{  
  e.preventDefault();  
  var url=this.href;
  xhr.open("get",url);
  xhr.onreadystatechange=callback;
  xhr.send(null);
}
function callback()
{
 if(xhr.readyState==4 && xhr.status==200)
 {
	 var response=xhr.responseText;
	 var start=response.indexOf("<body>");
	 var end=response.indexOf("</body>");	 
	 var content=response.substring(start+6,end);	
	 document.getElementsByTagName("section")[0].innerHTML=content;
 } 
}