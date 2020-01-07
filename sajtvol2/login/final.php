<html>
<head>
<meta charset="UTF-8">
<script src="../jquery.js"></script>
<title>Hvala</title>
<style> 
body {width:100%;
	  height:100%;
	
	  /* background: url("1963154.jpg"); */
	  background-size: cover;
	  background-position: center; /* Center the image */
	  background-repeat: no-repeat; /* Do not repeat the image */
		font-family: 'Helvetica', 'Arial', sans-serif;	
		}
table {empty-cells:show;
	   width:100%;
	   height:100%;
	  
		
	   }
tr {width:100%;
	height:20%;
}
td {
	width:20%;}
	
 * {box-sizing: border-box} 
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}
.pozdrav {
	
	text-align:center;
	margin:auto;
	}
h1 {
	padding-top:10%;
	font-size: 4em;
	color:#ffffff;
}
.tracking-in-contract {
	animation: tracking-in-expand 1.2s cubic-bezier(0.215, 0.610, 0.355, 1.000) 2s both;
}
@keyframes tracking-in-expand {
  0% {
    letter-spacing: -0.5em;
    opacity: 0;
  }
  40% {
    opacity: 0.6;
  }
  100% {
    opacity: 1;
  }
}


.vibrate-1 {
	animation: vibrate-1 0.3s linear 10 3s both;
}
.vibrate-1:hover {
	animation: none;
}
@keyframes vibrate-1 {
  0% {
    transform: translate(0);
  }
  20% {
    transform: translate(-1px, 1px);
  }
  40% {
    transform: translate(-1px, -1px);
  }
  60% {
    transform: translate(1px, 1px);
  }
  80% {
    transform: translate(1px, -1px);
  }
  100% {
    transform: translate(0);
  }
}
}

</style>
<?php 

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "gz_database";
   $db = new mysqli($servername,$username,$password,$dbname);
   
   $sqla = "SELECT 
(SELECT COUNT(*) FROM registrovani WHERE odg1='A') +
(SELECT COUNT(*) FROM registrovani WHERE odg2='A') +
(SELECT COUNT(*) FROM registrovani WHERE odg3='A') + 
(SELECT COUNT(*) FROM registrovani WHERE odg4='A') + 
(SELECT COUNT(*) FROM registrovani WHERE odg5='A') + 
(SELECT COUNT(*) FROM registrovani WHERE odg6='A') + 
(SELECT COUNT(*) FROM registrovani WHERE odg7='A') + 
(SELECT COUNT(*) FROM registrovani WHERE odg8 like concat('%', 'A' , '%')) + 
(SELECT COUNT(*) FROM registrovani WHERE odg9='A') + 
(SELECT COUNT(*) FROM registrovani WHERE odg10 like concat('%', 'A' , '%')) + 
(SELECT COUNT(*) FROM registrovani WHERE odg11='A') + 
(SELECT COUNT(*) FROM registrovani WHERE odg12='A') + 
(SELECT COUNT(*) FROM registrovani WHERE odg13='A') + 
(SELECT COUNT(*) FROM registrovani WHERE odg14='A') + 
(SELECT COUNT(*) FROM registrovani WHERE odg15 like concat('%', 'A' , '%')) as Rezult";
 $resulta = mysqli_query($db,$sqla);
while($query_data = mysqli_fetch_row($resulta))
    {$slovoa= $query_data[0];}
$numa = (int)$slovoa;

$sqlb = "SELECT 
(SELECT COUNT(*) FROM registrovani WHERE odg1='B') +
(SELECT COUNT(*) FROM registrovani WHERE odg2='B') +
(SELECT COUNT(*) FROM registrovani WHERE odg3='B') + 
(SELECT COUNT(*) FROM registrovani WHERE odg4='B') + 
(SELECT COUNT(*) FROM registrovani WHERE odg5='B') + 
(SELECT COUNT(*) FROM registrovani WHERE odg6='B') + 
(SELECT COUNT(*) FROM registrovani WHERE odg7='B') + 
(SELECT COUNT(*) FROM registrovani WHERE odg8 like concat('%', 'B' , '%')) + 
(SELECT COUNT(*) FROM registrovani WHERE odg9='B') + 
(SELECT COUNT(*) FROM registrovani WHERE odg10 like concat('%', 'B' , '%')) + 
(SELECT COUNT(*) FROM registrovani WHERE odg11='B') + 
(SELECT COUNT(*) FROM registrovani WHERE odg12='B') + 
(SELECT COUNT(*) FROM registrovani WHERE odg13='B') + 
(SELECT COUNT(*) FROM registrovani WHERE odg14='B') + 
(SELECT COUNT(*) FROM registrovani WHERE odg15 like concat('%', 'B' , '%')) as Rezult";
 $resultb = mysqli_query($db,$sqlb);
while($query_data = mysqli_fetch_row($resultb))
    {$slovob= $query_data[0];}
$numb = (int)$slovob;

$sqlc = "SELECT 
(SELECT COUNT(*) FROM registrovani WHERE odg1='C') +
(SELECT COUNT(*) FROM registrovani WHERE odg2='C') +
(SELECT COUNT(*) FROM registrovani WHERE odg3='C') + 
(SELECT COUNT(*) FROM registrovani WHERE odg4='C') + 
(SELECT COUNT(*) FROM registrovani WHERE odg5='C') + 
(SELECT COUNT(*) FROM registrovani WHERE odg6='C') + 
(SELECT COUNT(*) FROM registrovani WHERE odg7='C') + 
(SELECT COUNT(*) FROM registrovani WHERE odg8 like concat('%', 'C' , '%')) + 
(SELECT COUNT(*) FROM registrovani WHERE odg9='C') + 
(SELECT COUNT(*) FROM registrovani WHERE odg10 like concat('%', 'C' , '%')) + 
(SELECT COUNT(*) FROM registrovani WHERE odg11='C') + 
(SELECT COUNT(*) FROM registrovani WHERE odg12='C') + 
(SELECT COUNT(*) FROM registrovani WHERE odg13='C') + 
(SELECT COUNT(*) FROM registrovani WHERE odg14='C') + 
(SELECT COUNT(*) FROM registrovani WHERE odg15 like concat('%', 'C' , '%')) as Rezult";
 $resultc = mysqli_query($db,$sqlc);
while($query_data = mysqli_fetch_row($resultc))
    {$slovoc= $query_data[0];}
$numc = (int)$slovoc;

$sqld = "SELECT 
(SELECT COUNT(*) FROM registrovani WHERE odg1='D') +
(SELECT COUNT(*) FROM registrovani WHERE odg2='D') +
(SELECT COUNT(*) FROM registrovani WHERE odg3='D') + 
(SELECT COUNT(*) FROM registrovani WHERE odg4='D') + 
(SELECT COUNT(*) FROM registrovani WHERE odg5='D') + 
(SELECT COUNT(*) FROM registrovani WHERE odg6='D') + 
(SELECT COUNT(*) FROM registrovani WHERE odg7='D') + 
(SELECT COUNT(*) FROM registrovani WHERE odg8 like concat('%', 'D' , '%')) + 
(SELECT COUNT(*) FROM registrovani WHERE odg9='D') + 
(SELECT COUNT(*) FROM registrovani WHERE odg10 like concat('%', 'D' , '%')) + 
(SELECT COUNT(*) FROM registrovani WHERE odg11='D') + 
(SELECT COUNT(*) FROM registrovani WHERE odg12='D') + 
(SELECT COUNT(*) FROM registrovani WHERE odg13='D') + 
(SELECT COUNT(*) FROM registrovani WHERE odg14='D') + 
(SELECT COUNT(*) FROM registrovani WHERE odg15 like concat('%', 'D' , '%')) as Rezult";
 $resultd = mysqli_query($db,$sqld);
while($query_data = mysqli_fetch_row($resultd))
    {$slovod= $query_data[0];}
$numd = (int)$slovod;

$sqle = "SELECT 
(SELECT COUNT(*) FROM registrovani WHERE odg1='E') +
(SELECT COUNT(*) FROM registrovani WHERE odg2='E') +
(SELECT COUNT(*) FROM registrovani WHERE odg3='E') + 
(SELECT COUNT(*) FROM registrovani WHERE odg4='E') + 
(SELECT COUNT(*) FROM registrovani WHERE odg5='E') + 
(SELECT COUNT(*) FROM registrovani WHERE odg6='E') + 
(SELECT COUNT(*) FROM registrovani WHERE odg7='E') + 
(SELECT COUNT(*) FROM registrovani WHERE odg8 like concat('%', 'E' , '%')) + 
(SELECT COUNT(*) FROM registrovani WHERE odg9='E') + 
(SELECT COUNT(*) FROM registrovani WHERE odg10 like concat('%', 'E' , '%')) + 
(SELECT COUNT(*) FROM registrovani WHERE odg11='E') + 
(SELECT COUNT(*) FROM registrovani WHERE odg12='E') + 
(SELECT COUNT(*) FROM registrovani WHERE odg13='E') + 
(SELECT COUNT(*) FROM registrovani WHERE odg14='E') + 
(SELECT COUNT(*) FROM registrovani WHERE odg15 like concat('%', 'E' , '%')) as Rezult";
 $resulte = mysqli_query($db,$sqle);
while($query_data = mysqli_fetch_row($resulte))
    {$slovoe= $query_data[0];}
$nume = (int)$slovoe;


	
	
// 
 //
 
 //else { echo "Error: ".$sql." <br> ".$db->error." ";}
   


?>
<script>
//Better to construct options first and then pass it as a parameter
   //var options = {
//	title: {
	//	text: "Rezultati ankete svih registrovanih"              
//	},
	//data: [              
//	{
		// Change type to "doughnut", "line", "splineArea", etc.
	//	type: "column",
	//	dataPoints: [
	//		{ label: "Prvi odgovor",  y: <?php echo $numa; ?>  },
	//		{ label: "Drugi odgovor", y: <?php echo $numb; ?>  },
	//		{ label: "Treći odgovor", y: <?php echo $numc; ?>  },
	//		{ label: "Četvrti odgovor", y: <?php echo $numd; ?>  },
	//		{ label: "Peti odgovor",  y: <?php echo $nume; ?>  }
	//	]
	//}
//	]
//};
//$("#chartContainer").CanvasJSChart(options); 

window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "Rezultati ankete svih registrovanih"
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}%</strong>",
		indexLabel: "{name} - {y}%",
		dataPoints: [
			{ y: <?php echo $numa; ?>, name: "Prvi odgovor", exploded: true },
			{ y: <?php echo $numb; ?>, name: "Drugi odgovor" },
			{ y: <?php echo $numc; ?>, name: "Treći odgovor" },
			{ y: <?php echo $numd; ?>, name: "Četvrti odgovor" },
			{ y: <?php echo $nume; ?>, name: "Peti odgovor" }
		]
	}]
});
chart.render();
}

function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();

}
</script>
<script> 
</script>
</head>
<body>
<video autoplay muted loop id="myVideo">
  <source src="wildfireee.mp4" type="video/mp4">
</video>
<table border='0'>
<tr> <td></td>  <td rowspan='1' colspan='3'><div class="pozdrav"><h1 class="tracking-in-contract"> Hvala vam na vašem vremenu!</h1> </div></td>     <td></td>  </tr>
<tr> <td></td>   <td class="vibrate-1" rowspan='2' colspan='3'> <div id="chartContainer" style="width: 80%; height: 96%;margin:auto;"></div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>   		</td>  <td></td>			 </tr>
<tr> <td></td>    <td></td>  </tr>
<tr> <td></td>    <td></td> <td></td>  <td></td> <td></td> <td></td>    </tr>
<tr> <td></td>    <td></td>  <td></td> <td></td> <td></td>  </tr>

</table>
</body>

</html>