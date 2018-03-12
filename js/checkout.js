var form=document.getElementById("checkout").getElementsByTagName("form")[0];
form.addEventListener("submit",check);
function check(e)
{  
  e.preventDefault();
  var deliverModes=document.getElementsByName("deliverMode");  
  for(i=0;i<deliverModes.length;i++)
  {
	if(deliverModes[i].checked)
	{
	  break;
	}
	if(i==deliverModes.length-1)
	{
      alert("请选择送货方式!");
	  deliverModes[0].focus();
	  return;
	}
  }  
  var paymentModes=document.getElementsByName("paymentMode");  
  for(i=0;i<paymentModes.length;i++)
  {
	if(paymentModes[i].checked)
	{	  
	  break;
	}
	if(i==paymentModes.length-1)
	{
      alert("请选择付款方式!");
	  paymentModes[0].focus();
	  return;
	}
  }  
  this.submit();
 }