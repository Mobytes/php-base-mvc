    $(function(){
        $(".tabgrilla").kendoGrid({
                    dataSource: {
                        pageSize: 7
                    },
                    pageable: true,
                    columns: [{field:"Codigo", width:8},
                        {field:"Descripcion", width:50},
                        {field:"elemento", width:20},
                        {title:"Acciones", width:10,attributes:{class:"acciones"}}]
                });
        $( "#buscar" ).focus();
        
        function buscar(){
            $.post('/jungla/categorias/buscador','descripcion='+$("#buscar").val()+'&filtro='+$("#filtro").val(),function(datos){
                HTML = '<table border="1" class="tabgrilla">'+
                        '<tr>'+
                            '<th>Codigo</th>'+
                            '<th>Descripcion</th>'+
                            '<th>Nro.de Elemento</th>'+
                            '<th>Acciones</th>'+
                        '</tr>';

                for(var i=0;i<datos.length;i++){
                    HTML = HTML + '<tr>';
                    HTML = HTML + '<td>'+datos[i].IDCATEGORIA+'</td>';
                    HTML = HTML + '<td>'+datos[i].DESCRIPCION+'</td>';
                    HTML = HTML + '<td>'+datos[i].NRO_ELEMENTO+'</td>';
                    var editar='/jungla/categorias/editar/'+datos[i].IDCATEGORIA; 
                    var eliminar='/jungla/categorias/eliminar/'+datos[i].IDCATEGORIA;   
                    HTML = HTML + '<td> <a href="javascript:void(0)" onclick="editar(\''+editar+'\')" class="imgedit"></a>';
                    HTML = HTML + '<a href="javascript:void(0)" onclick="eliminar(\''+eliminar+'\')" class="imgdelete"></a>';
                    HTML = HTML + '</td>';
                    HTML = HTML + '</tr>';
                }
                HTML = HTML + '</table>'
                $("#grilla").html(HTML);
                $(".tabgrilla").kendoGrid({
                    dataSource: {
                        pageSize: 7
                       
                    },
                    pageable: true,
                    columns: [{field:"Codigo", width:8},
                        {field:"Descripcion", width:50},
                        {field:"elemento", width:20},
                        {title:"Acciones", width:10,attributes:{class:"acciones"}}]
                });
            },'json');
        }
        $("#buscar").keypress(function(event){
           if(event.which == 13){
               buscar();
           } 
        });
        
        $("#btn_buscar").click(function(){
            buscar();
            $("#buscar").focus();
        });
        
    });