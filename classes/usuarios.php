<?php   


Class Usuario{

    private $pdo;
    public $msgErro="";


    public Function conectar($nome, $host, $usuario, $senha){
        global $pdo;
        global $msgErro;
        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
      

    }

    public Function cadastrar($nome,$telefone,$email,$cpf,$senha){
        global $pdo;
        global $msgErro;

            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
            $sql->bindValue(":e",$email);
            $sql->execute();
            if($sql->rowCount()>0){
                return false;
            }
            else{
                $sql = $pdo->prepare("INSERT INTO usuarios(nome,cpf,telefone,email, senha) VALUES (:n,:c,:t,:e,:s)");
                $sql->bindValue(":n",$nome);
                $sql->bindValue(":c",$cpf);
                $sql->bindValue(":t",$telefone);
                $sql->bindValue(":e",$email);
                $sql->bindValue(":s",md5($senha));
                $sql->execute();
                return true;
            }

    }

    public Function  logar($email,$senha){
        global $pdo;
        global $msgErro;

        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true;
        }
        else{

            return false;

        }
    }

}


?>