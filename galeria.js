var imagenes = ['imagenes/imagen1.jpg',
'imagenes/imagen2.jpg','imagenes/imagen3.jpg',
'imagenes/imagen4.jpg','imagenes/imagen1.jpg',
'imagenes/imagen2.jpg','imagenes/imagen3.jpg',
'imagenes/imagen4.jpg',]


var cont = 0 ;

imagen = document.getElementById('imagen');
contenedor = document.getElementById('cont-visor');
   
cerrar.addEventListener("click",function(){
    contenedor.classList.toggle("mostrar-visor");
});

var galeria = document.querySelectorAll(".imagen_galeria");

for (var i = 0; i < galeria.length; i++) {
    galeria[i].addEventListener("click",function(e){  
        imagen.src = e.target.src
        contenedor.classList.toggle("mostrar-visor")
        

        })
        
}



function carrousel(contenedor){
    contenedor.addEventListener('click', e=>{
        atras = contenedor.querySelector('.atras'),
        adelante = contenedor.querySelector('.adelante'),
        img = contenedor.querySelector('img')
        target = e.target;
        if( target == atras){
            if(cont > 0){
                img.src = galeria[cont-1].src;
                cont--;
            }else{
                img.src = galeria[galeria.length -1].src;
                cont = galeria.length-1;
            }
        }else if( target == adelante){
            if(cont < galeria.length-1){
                img.src = galeria[cont +1].src;
                cont++;
            }else{
                img.src = galeria[0].src;
                cont = 0;
            }
        }
    });
};
carrousel(contenedor);
