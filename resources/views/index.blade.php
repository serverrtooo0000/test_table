<!DOCTIPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Галерея</title>
        <link rel="stylesheet" href="css/app.css">
     
             
            </head>
                <body>
                
                    <h2><li>Test</li>
                    <h2><li><a herf="урок7.php">Урок 7</a></li>
                    <li>

                       


<table border="1">
    
            <thead>
  <tr>
    <th>Тема</th>
    <th>Подтема</th>
    <th>Содержимое</th>

  </tr>
@foreach ($thems as $them)


  <tr>
    <td>{{ $them->title }}</td>
    
  </tr>
  

 </thead>
<tbody>

            



@endforeach


   

@foreach ($thems as $them)


  <tr>
    <td>{{ $them->description }}</td>
    
  </tr>
  
@endforeach

</tbody>
</table>


