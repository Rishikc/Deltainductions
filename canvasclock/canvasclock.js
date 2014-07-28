var sec = 0;
var min = 0;
var minutes=0;
var hrs = 0;
var m=0;
var hr=0;

var radius;
function clock()
{
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');
      
      context.clearRect(0, 0, canvas.width, canvas.height);    
    
      var X = canvas.width / 2;
      var Y = canvas.height / 2;
      radius = 0.4*canvas.height;
    
      context.save();    
      context.beginPath();
      
      context.arc(X,Y, radius, 0, 2 * Math.PI, false);
      context.fillStyle = 'green';
      context.fill();
     
      context.lineWidth = 3;
      context.strokeStyle = 'black';
      context.stroke();
      context.restore();
      
}
function seconds()
{
///////////////////////////////////////////////////////for seconds
    var canvas = document.getElementById("canvas");
    var context = canvas.getContext("2d");
    
	var X = canvas.width / 2;
    var Y = canvas.height / 2;
    
    context.save();
    context.translate(X,Y);
	context.rotate((Math.PI/30)*sec);
    
    context.lineWidth = 2;
    context.beginPath();
    context.moveTo(0, 0);
    context.lineTo(0, -radius);
    context.lineJoin = 'miter';
    context.strokeStyle = 'grey';
    context.stroke();
    context.rotate(-(Math.PI/30)*sec);
    context.restore();
    sec = sec + 1 ;
///////////////////////////////////////////////////////////	for minutes
	context.save();
    context.translate(X,Y);
	min=m+(1/60)*sec;
	if(sec==60){
	m=min;
	}
    context.rotate((Math.PI/30)*min);
    context.lineWidth = 3;
    context.beginPath();
    context.moveTo(0, 0);
    context.lineTo(0, (-radius));
    context.lineJoin = 'miter';
    context.strokeStyle = 'blue';
    context.stroke();
    
    context.rotate(-(Math.PI/30)*min);
    context.restore();
////////////////////////////////////////////////////////////////	for hours

	context.save();
    context.translate(X,Y);
	hrs=hr+(1/60)*min;
	if(minutes==60){
	hr=hrs;
	minutes = 0;
	}
    context.rotate((Math.PI/6)*hrs);
    
    context.lineWidth = 4;
    context.beginPath();
    context.moveTo(0, 0);
    context.lineTo(0, (-radius));
    context.lineJoin = 'miter';
    context.strokeStyle = 'red';
    context.stroke();
    context.rotate(-(Math.PI/30)*hrs);
    context.restore();
   
}

function time()
{
    clock();
    seconds();
    setTimeout(function() 
	{ 
        time();
	}, 10);

}
function get_current_time()
{
    var time = new Date();
    hr = time.getHours();
    m = time.getMinutes();
    sec = time.getSeconds();
    
}