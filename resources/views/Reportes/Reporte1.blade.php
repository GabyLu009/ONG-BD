<!DOCTYPE html>
<html>
       <head>    
            <style>
                     @page {
                        margin: 180px 50px;
                    }
                    table {
                        border: none;
                        width: 100%;
                        border-collapse: collapse;
                    }
        
                    td,th { 
                        padding: 2px 1px;
                        text-align: center;
                        border: 1px solid #999;
                    }
        
                    tr:nth-child(1) {
                        background: #dedede;
                    }
                    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 165px; background-color: orange; text-align: center; }
                    #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 80px; background-color: orange; }
                     #footer .page:after { content: counter(page, upper-roman); }
        
                </style>
        </head>
        <body>
        
                <div id = "header">     
                        <h5 class="box-title"> Reporte de Actuacion y Poblacion</h5>
                       </div>
                   <div id="footer">
                       <center> <p>{{$today}}</p><center>
                   </div>  
        
        <main>
   <table>
                    <tr>
                    <th>Descripcion de la accion</th>
                    <th>Nombre de la Poblacion</th>
                    <th>Numero de Habitantes</th>
                  </tr>
                </thead>
                  @foreach ($rep1 as $item)
                    <tr>
                    <td>{{$item->descripcion_accion}}</td> 
                    <td>{{$item->nombre_poblacion}}</td>    
                    <td>{{$item->habitantes}}</td>
                    </tr>
            @endforeach
    </table>
</main>
</body>
</html>