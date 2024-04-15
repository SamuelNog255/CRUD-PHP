function confirmarDelete(id) {  //Confirmação de exlusão - acionado por onClick
    let resultado = confirm("Deseja continuar com a exclusão?")
    if (resultado)
        window.location.href="?page=home&deleteID=" + id
        
    else       
        window.location.href="?page=home"
}       

