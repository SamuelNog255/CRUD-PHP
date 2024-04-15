<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style_.css">
    <script src="cod_.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <title id="titleSite">Contatos</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">  
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=home">Contatos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?page=adicionar">Adicionar Contato</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="">
    
    <?php
        include("config.php");      //Configuração e conexão com o banco de dados
        
        switch(@$_REQUEST["page"]){ //Navegação entre as páginas adicionar, editar e página inicial
            case "adicionar"://Página para adicionar contato
                include("adicionar.php"); 
                break;
            
            case "editar":  //Página para editar contato
                $sql="SELECT * FROM contatos WHERE id =(".$_REQUEST['id'].")";
                $status=$conn->query($sql);
                $info=$status->fetch_array();   //Primeiro e segundo nome estão juntos em uma coluna no banco de dados
                $_SESSION['contatoEditar'] = $info; //Estão em campos separados nas telas Editar e Adicionar
                $splitNome= explode(" ",$info['nome']); //Usando 'explode' para separar 
                try{
                    $_SESSION['contatoEditarNome']=$splitNome[0];   
                    if (count($splitNome)>1){
                        $_SESSION['contatoEditarNome2']=$splitNome[1];  //Usando _SESSION para passar informação entre requisições
                    }
                    else{
                        $_SESSION['contatoEditarNome2']=""; 
                    }
                }
                catch(PDOException $E){
                    $_SESSION['contatoEditarNome2']="";
                }
                include("editar.php");
                break;
            
            case "concluirAdicionar":   //Conclui a solicitação de adicionar contato e redireciona para a página inicial
                $pNome = $_POST["pNome"];
                $sNome = $_POST["sNome"];
                $telefone = $_POST["telefone"];
                $email = $_POST["email"];
                $sql="INSERT INTO contatos (nome,email,telefone) VALUES ('$pNome $sNome','$email','$telefone')";    //Adicionando contato
                $status=$conn->query($sql);

                if($status===true){ //Feedback
                    echo "<script>alert('Cadastro realizado com sucesso!')</script>";
                    echo "<script>location.href='?page=home'</script>";
                }
                else{
                    echo "<script>alert('Erro ao tentar cadastrar!')</script>";
                    echo "<script>location.href='?page=home'</script>";
                }
                break;

            case "concluirEditar":  //Conclui a solicitação de editar contato e redireciona para a página inicial
                $pNome = $_POST["pNome"];
                $sNome = $_POST["sNome"];
                $telefone = $_POST["telefone"];
                $email = $_POST["email"];   
                $sql="UPDATE contatos SET nome = '".$pNome." ". $sNome."',email='".$email."',telefone='".$telefone."' WHERE id=".$_REQUEST['id'] ;
                $status=$conn->query($sql); //Editando contato ^^

                if($status===true){ //Feedback
                    echo "<script>alert('Atualização realizada com sucesso!')</script>";
                    echo "<script>location.href='?page=home'</script>";
                }
                else{
                    echo "<script>alert('Erro ao tentar editar!')</script>";
                    echo "<script>location.href='?page=home'</script>";
                }
                break;
            
            default :   //Página inicial - qualquer link divergente é redirecionado para a pagina inicial
                if (array_key_exists("deleteID", $_REQUEST)) {  //Exclusão de contato é acionada por um onClick e não tem página própria.
                    $sql="DELETE FROM contatos WHERE id=".$_REQUEST['deleteID'] ;   //Deletando contato
                    $status=$conn->query($sql);

                    if($status===true){ //Feedback
                        echo "<script>alert('Deletado com sucesso!')</script>";
                        echo "<script>location.href='?page=home'</script>";
                    }
                    else{
                        echo "<script>alert('Erro ao tentar deletar!')</script>";
                        echo "<script>location.href='?page=home'</script>";
                    }
                }
                
                $sql="SELECT * FROM contatos";  //Listando todos os contatos e enviando para Home
                $status=$conn->query($sql);     
                $_SESSION['contatos'] = $status;    //Usando _SESSION para passar informação entre requisições  
                
                include("home.php");
                break;
                
        }
    ?>  
    </div>
</body> 
</html>