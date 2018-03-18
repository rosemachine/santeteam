<?php  
 $connect = mysqli_connect("localhost", "root", "", "patientbook");  
 $query = "SELECT weight FROM data ";
 $result = mysqli_query($connect, $query);  
 ?>  

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Weight</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([['Gender', 'Number'],


                    <?php  
                    $i = 0;
                        while($row = mysqli_fetch_array($result))  
                        {  
                            $i = $i+1;
                            echo "['$i', ".$row["weight"]."],";  
                        }  
                    ?>  
                ]);  
     
                var options = { title: 'Weight', is3D:true, pieHole: 0.4  };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Here is the weight</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html> 


