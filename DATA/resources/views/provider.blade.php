<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="./bs3.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de usuarios</title>
    <style>
       #emp{
           font-family:Arial,Helvetica, sans-serif;
           border-collapse: collapse;
           width: 100%
       }
       #emp td,#emp th{
           border: 1px solid #ddd;
           padding: 8px;
       }
       #emp tr:nth-child(even){
           background-color: #ffffff;
       }
       #emp th{
           padding-top: 12px;
           padding-botton: 12px;
           text-align: left;
           background-color:  #f00000;
           color: #fff;
       }
       /* rel="stylesheet" href="/css/admin_custom.css";
       href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet"; */
   </style>
   </head>
<body>
<div class="container-fluid">
    <div class="row">
        
        <div class="col-xs-4">
            {{-- <img src="{{ public_path("assets\images\julios.png}}" alt="Logotipo" align="right" class="right" style="width: 150px; height: 150px;">  --}}
            <img src="{{ public_path("assets/images/julios.png") }}" alt="" align="right" class="right" style="width: 150px; height: 150px;">

           </div>             
           <div class="row text-center" style="margin-bottom: 2rem;">
               <i align="right">Ferreteria Julio's </i><br>
               <i align="right">Direccion: Calle Junin #1602. esq sucre </i><br>
               <i align="right">Telefono: 4060729- 6507521 </i><br>
           </div>
    </div>               
    
   {{--  <hr> --}}     
       <body>
          
                              
            <div class="row text-center">
                   <p align="center"><i><strong>REPORTE DE PROVEEDORES REGISTRADOS EN EL SISTEMA<strong></i></p>
                </div>         
            </div>
            <hr>
    <table id="emp" class="table table-striped" style="width:100%" >
        <thead>
            <tr>
                 <th>ID</th>
                 <th>Proveedor</th>
                 <th>Email</th>
                 <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($depositos as $deposito)
                <tr>
                    <td>{{$deposito->id}}</td>
                    <td>{{$deposito->nombre}}</td>
                    <td>{{$deposito->email}}</td>
                    <td>{{$deposito->telf}}</td>
                 </tr>  
            @endforeach
        </tbody>

    </table>

</body>
</html>