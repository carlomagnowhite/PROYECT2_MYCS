

enviar = async() => {

    const nodemailer = require('nodemailer');

    var mail = document.getElementById("mailsug").value;

    if(mail != ""){
        const config = {
            host : "smtp.gmail.com",
            port : 587,
            auth : {
                user : "mateo19dg@gmail.com",
                pass : "tywlpoxzhkdyvyez"
            }

        }

        const mensaje = {
            from : "mateo19dg@gmail.com",
            to : mail,
            subject : "CTT - FISEI INFORMACIÓN",
            text : "Correo de información (prueba)."
        }

        const transport = nodemailer.createTransport(config);

        const info = await transport.sendMail(mensaje); 

        alert(info);

        document.getElementById("mailsug").value = "";
    }else{
        alert("Ingrese un mail para poder enviar la información.");
    }
}