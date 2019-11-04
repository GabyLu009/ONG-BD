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
                    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 165px; background-color: blue; text-align: center; }
                    #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 80px; background-color: blue; }
                     #footer .page:after { content: counter(page, upper-roman); }
        
                </style>
        </head>
        <body>
        
                <div id = "header">     
                        <h1 class="box-title"> Reporte Proyectos por Sede</h1>
                       </div>
                   <div id="footer">
                   </div>  
        
        <main>
   <table>
                    <tr>
                    <th>Codigo</th>
                    <th>Titulo</th>
                    <th>Nombre del Responsable</th>
                    <th>Apellido del Responsable</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Finalizacion</th>
                    <th>Estado del Proyecto</th>
                    <th>Ciudad</th>
                    <th>Pais</th>
                  </tr>
                </thead>
                  @foreach ($rep2 as $item)
                    <tr>
                    <td>{{$item->codigo}}</td> 
                    <td>{{$item->titulo}}</td>
                    <td>{{$item->nombre_responsable}}</td>
                    <td>{{$item->apellido_responsable}}</td>
                    <td>{{$item->fecha_inicio}}</td>
                    <td>{{$item->fecha_finalizacion}}</td>
                    <td>{{$item->estado_proyecto}}</td>
                    <td>{{$item->ciudad}}</td>
                    <td>{{$item->pais}}</td>
                    </tr>
            @endforeach
    </table>
</main>
</body>
</html>