botonHambuerguesa.addEventListener(
    "click", function(){
        console.log("Hiciste click");
        menuHamburguesa.classList.toggle("abrir");
        noticia.classList.toggle("mostrar");
    }
);

botonCerrar.addEventListener(
    "click", function(){
        menuHamburguesa.classList.toggle("abrir");
        noticia.classList.toggle("mostrar");

    }
)
