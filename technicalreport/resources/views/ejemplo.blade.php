<table border="1">
    <tr>
        <td>hola</td>
    </tr>
    @foreach ($datos as $dato)
         <tr>
           <td>{{$dato->fecha}}</td>
        </tr>
   @endforeach
        
    
</table>