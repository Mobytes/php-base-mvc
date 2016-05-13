/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


//CREAR INSTANCIA PARA CUALQUIER NAVEGADOR PARA AJAX
function createREQ(){
    try{
        req= new XMLHTTPRequest();
    }catch(err1){
        try{
            req = new ActiveXObject('Msxml2.XMLHTTP');    
        }catch(err2){
            try{
                req= new ActiveXObjetc("Microsoft.XMLHTTP");  
            }catch(err3){
                req= false;
            }
        }
    }
    return req;
}

/*FUNCIONES PARA PETICIONES GET
 *url= pagina
 *query= petición
 *req= instancia del objeto XMLHTTPRequest
*/
function requestGET(url,query,req){
    myRand= parseInt(Math.random()*999999999);
    req.open("GET", url+'?'+query+'&rand='+myRand, true);
    req.send(null);
}

/*FUNCIONES PARA PETICIONES POST
 *url= pagina
 *query= petición
 *req= instancia del objeto XMLHTTPRequest
*/
function requestPOST(url,query,req){
    req.open("POST", url, true);
    req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    req.send(query);
}

//sabes si la respuesta es xml o string
function doCallback(callback,item){
    eval(callback+'(item)');
}

/*reqtype= GET O POST
 *query = la peticion
 *getxml= 1 o 0 (xml o string)
 *callback = funcion de respuesta(con la que se ejecuta)
 **/
function ejecutarAjax(url,query,callback,reqtype,getxml){
    var myreq= createREQ();
    myreq.onreadystatechange= function(){
        if(myreq.readyState==4){
            if(myreq.status==200){
                var item= myreq.responseText;
                if(getxml==1){
                    item= myreq.responseXML;
                }
                doCallback(callback, item);
            }
        }
    }
    if(reqtype=='post'){
        requestPOST(url, query, myreq);
    }else{
        requestGET(url, query, myreq);
    }
}