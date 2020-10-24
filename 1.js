var burung = 6969;
var hari = 441;
var netas = 21;

var perkejadian = hari/netas;
var kejadian = 1;


while (kejadian <= perkejadian){
  	burung = (burung-(burung*11.1/100))*2;
	console.log('Perkembangbiakan ke '+kejadian+' ada '+burung.toFixed(0)+' lovebird');
  	kejadian++;
	}

document.write('Perkembangbiakan burung lovebird selama '+hari+' adalah '+burung.toFixed(0)+' ekor');
//document.getElementById("demo").innerHTML = 'Perkembangbiakan burung lovebird selama '+hari+' adalah '+burung.toFixed(0)+' ekor' ;
