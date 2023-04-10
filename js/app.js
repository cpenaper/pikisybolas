let boton = document.getElementById('calcular');
let respuesta = document.getElementById('rventa');
let respuesta2 = document.getElementById('rganancia');
//let respuesta3 = document.getElementById('Iva2');

boton.addEventListener('click',hacerCalculo);

function hacerCalculo(){
    var vlrCompra= parseInt(document.getElementById("valorCompra").value);
    var vlrGanacia= parseInt(document.getElementById("Ganacia").value);
    var vlrIva= parseInt(document.getElementById("Iva").value);
    //var vlrIva2= parseInt(document.getElementById("Iva2").value);
    

 
    var vlrVenta=(vlrCompra+parseInt(vlrIva)+parseInt(vlrGanacia)/100);
    var vlrGanacia=(vlrCompra*vlrGanacia)/100;
    
    respuesta.innerHTML= +vlrVenta;
    respuesta2.innerHTML= +vlrGanacia;
    //respuesta3.innerHTML= +vlrIva2;

    
    














    // let n1=parseFloat(document.getElementById('n1').value);
    // let n2=parseFloat(document.getElementById('n2').value);
    // let s=n1*n2;
    // respuesta.innerHTML='la suma es ' + s;
}