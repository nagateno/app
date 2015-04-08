<form name="redirect">
<center>
<font face="Arial"><b>Загрузка ....<br><br>
<form>
<input type="text" size="3" name="redirect2">
</form>
 </b></font>
</center>
<script>
<!--
//change below target URL to your own
var targetURL="http://nagateno.com/app.html"
//change the second to start counting down from
var countdownfrom=3
var currentsecond=document.redirect.redirect2.value=countdownfrom+1
function countredirect(){
if (currentsecond!=1){
currentsecond-=1
document.redirect.redirect2.value=currentsecond
}
else{
window.location=targetURL
return
}
setTimeout("countredirect()",100)
}
countredirect()
//-->
</script>
