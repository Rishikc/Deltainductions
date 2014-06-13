
	function view_text () {
	v=0;
		
		var textArea = document.getElementById('my_text');
		var div = document.getElementById('view_text');
			
		
		var text = textArea.value;
		text = text.replace(/\n/gi, "<br />");
		

text = text.replace(/\</gi, "<");
text = text.replace(/\>/gi, ">");

text = text.replace(/\[b\]/gi, "<b>");
text = text.replace(/\[\/b\]/gi, "</b>");
			
text = text.replace(/\[i\]/gi, "<i>");
text = text.replace(/\[\/i\]/gi, "</i>");
			
text = text.replace(/\[u\]/gi, "<u>");
text = text.replace(/\[\/u\]/gi, "</u>");

text = text.replace(/\[p\]/gi, "<p>");
text = text.replace(/\[\/p\]/gi, "</p>");

text = text.replace(/\[quote\]/gi, "<q>");
text = text.replace(/\[\/quote\]/gi, "</q>");

text = text.replace(/\[center\]/gi, "<center>");
text = text.replace(/\[\/center\]/gi, "</center>");

text = text.replace(/\[p align:left\]/gi, "<p style=text-align:left>");
text = text.replace(/\[p align:right\]/gi, "<p style=text-align:right>");
text = text.replace(/\[p align:justify\]/gi, "<p style=text-align:justify>");



text = text.replace(/\[sup\]/gi, "<sup>");
text = text.replace(/\[\/sup\]/gi, "</sup>");

text = text.replace(/\[sub\]/gi, "<sub>");
text = text.replace(/\[\/sub\]/gi, "</sub>");

text = text.replace(/\[li\]/gi, "<li>");
text = text.replace(/\[\/li\]/gi, "</li>");

text = text.replace(/\[ol\]/gi, "<ol>");
text = text.replace(/\[\/ol\]/gi, "</ol>");

text = text.replace(/\[ul\]/gi, "<ul>");
text = text.replace(/\[\/ul\]/gi, "</ul>");

text = text.replace(/\[code\]/gi, "<code>");
text = text.replace(/\[\/code\]/gi, "</code>");

text=text.replace(/\:\)/gi,"<img src=smile.gif>");
text=text.replace(/\:\(/gi,"<img src=sad.gif>");
text=text.replace(/\;\)/gi,"<img src=wink.gif>");
text=text.replace(/\:D/gi,"<img src=happy.gif>");
text=text.replace(/\:o/gi,"<img src=shock.gif>");
text=text.replace(/\:\//gi,"<img src=angry.gif>");
text=text.replace(/\:\|/gi,"<img src=confused.gif>");
text=text.replace(/\=D/gi,"<img src=grin.gif>");


text=text.replace(/\[color=/g,"<span style=\"color:");
text=text.replace(/\[\/color\]/g,"</span>"); 
text=text.replace(/\[h /g,"<h style=\"font-size:");
text=text.replace(/\[\/h\]/g,"</h>"); 
text=text.replace(/\[font:/g,"<font face=\"");
text=text.replace(/\[\/font\]/g,"</font>"); 
text=text.replace(/\[highlight:/g,"<span style=\"background-color:");
text=text.replace(/\[\/highlight\]/g,"</span>"); 
text=text.replace(/\]/g,"\" >");


		div.innerHTML=text;
		}
		
function mod_selection (a,b) {
	// Get the text area
	var textArea = document.getElementById('my_text');
	var text=textArea.value;
			
	// Do we even have a selection?
	if (typeof(textArea.selectionstart != "undefined")) {
		// Split the text in three pieces - the selection, and what comes before and after.
		
		var beginning=textArea.value.substring(0,textArea.selectionStart);
		var selection=textArea.value.substring(textArea.selectionStart,textArea.selectionEnd);
		var ending=textArea.value.substring(textArea.selectionEnd);
		textArea.value=beginning+a+selection+b+ending;
	}
}

function dold()
{
var textArea = document.getElementById('my_text');
var text = textArea.value;
var c=text.substring(textArea.selectionStart,textArea.selectionEnd);
var dold="";
var i=0;
while(i<c.length){
dold+=c.charAt(i).toUpperCase()+c.charAt(i+1).toLowerCase();
i+=2;
}
textArea.value=text.substring(0,textArea.selectionStart)+"[b]"+dold+"[/b]"+text.substring(textArea.selectionEnd);
}

function ditalics()
{
var textArea = document.getElementById('my_text');
var text = textArea.value;
var c=text.substring(textArea.selectionStart,textArea.selectionEnd);
var ditalics="";
var i=0;
while(i<c.length){
ditalics+=c.charAt(i).toUpperCase()+c.charAt(i+1).toLowerCase();
i+=2;
}textArea.value=text.substring(0,textArea.selectionStart)+"[i]"+ditalics+"[/i]"+text.substring(textArea.selectionEnd);
}
var temp="";
function copy()
{
var textArea = document.getElementById('my_text');
temp=textArea.value.substring(textArea.selectionStart,textArea.selectionEnd);
}
function cut()
{
var textArea = document.getElementById('my_text');
var beginning=textArea.value.substring(0,textArea.selectionStart);
var ending=textArea.value.substring(textArea.selectionEnd);
temp=textArea.value.substring(textArea.selectionStart,textArea.selectionEnd);
var cut="";
textArea.value=beginning+cut+ending;
}
function paste()
{
var textArea = document.getElementById('my_text');
var beginning=textArea.value.substring(0,textArea.selectionStart);
var selection=textArea.value.substring(textArea.selectionStart,textArea.selectionEnd);
var ending=textArea.value.substring(textArea.selectionEnd);
textArea.value=beginning+selection+temp+ending;
}


