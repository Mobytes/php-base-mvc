$(function() {
        SexyLightbox.initialize({color:'blanco', dir: 'sexyimages'});
    });
function cargar_php(pagina,capa,id){
        $('#'+capa).toggle();
        $('#'+capa).load("/jungla/web/"+pagina+"/"+id,function(){
            $('#'+capa).show("slow");
        });
    }