 var inputs=document.getElementsByTagName('input');
 var xmlhttp=new XMLHttpRequest();
 for(i=0;i<inputs.length;i++)
 {
 	inputs[i].addEventListener("change",ClientUpdate,false);
 }
 function callback(){
 	
 }
 function severUpdate(bookID,count){
 	var url="updateCart.php?bookID="+bookID+"&count="+count;
 	xmlhttp.open("GET",url);
 	xmlhttp.onreadystatechange=callback;
 	xmlhttp.send();
 }
 function ClientUpdate()
 {  	
   var count=this.value;
   var preSubTotal=parseFloat(this.parentNode.nextSibling.childNodes[0].nodeValue);
   var preTotal=parseFloat(document.getElementById('total').innerHTML);  
   var price=parseFloat(this.parentNode.previousSibling.childNodes[0].childNodes[0].nodeValue);
   var preTotalCount=parseInt(document.getElementById('preTotalCount').innerHTML);   
   var preCount=parseInt(this.getAttribute('preCount'));
   var bookID=this.getAttribute('bookID'); 
   severUpdate(bookID,count);
   var newsubTotal=(count*price).toFixed(2);
   var newTotalCount=preTotalCount+(count-preCount);
   var newTotal=preTotal+(newsubTotal-preSubTotal);
   var newTotalFilter=newTotal.toFixed(2);
   this.parentNode.nextSibling.childNodes[0].nodeValue=newsubTotal;
   document.getElementById('preTotalCount').innerHTML=newTotalCount;
   document.getElementById('total').innerHTML=newTotalFilter;
   this.setAttribute('preCount',count); 
 }
