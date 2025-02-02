const formularios_ajax = document.querySelectorAll(".FormAjax");



function enviar_formularios_ajax(e) {
    e.preventDefault();

    let enviar = confirm("Estas seguro que deseas enviar el formulario?");
    let loader = document.getElementById("loading-container");
    let form = document.getElementById("form-contacto");
    if (enviar == true) {
        loader.style.display = 'block';

        let data = new FormData(this);
        let method = this.getAttribute("method");
        let action = this.getAttribute("action");

        let encabezados = new Headers();

        let config = {
            method: method,
            headers: encabezados,
            mode: "cors",
            cache: "no-cache",
            body: data
        };

        fetch(action, config)
            .then(respuesta => respuesta.text())
            .then(respuesta => {
                let contenedor = document.querySelector(".form-rest");
                contenedor.innerHTML = respuesta;
                loader.style.display = 'none';
                form.reset();
            });

    }
}

formularios_ajax.forEach(formularios => {
    formularios.addEventListener("submit", enviar_formularios_ajax);
}); 