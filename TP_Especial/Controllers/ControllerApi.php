<?php
    require_once('./Models/ModelComentarios.php');
    require_once('./Views/viewApi.php');
    require_once('./Controllers/controllerUsuarios.php');

    class controllerApi extends controllerUsuarios{

        private $model;
        private $view;

        function __construct(){
            $this->model = new modelComentarios();
            $this->view = new viewApi();
        }
        
        private function getData(){
            $body = file_get_contents("php://input"); //Leo el cuerpo del mensaje.
            return json_decode($body); //Devuelvo un objeto JSON.
        }

        public function getComentarios($params = []){
            $id = $params[':ID'];
            $comentarios = $this->model->getComentarios($id);
            return $this->view->response($comentarios, 200);
        }

        public function insertComentarios($params = []){
            $body = $this->getData();
            
            if(!empty($body->Id_producto) && !empty($body->texto) && !empty($body->user_coment) && !empty($body->puntaje)){
                $agregar = $this->model->insertComentario($body->Id_producto, $body->texto, $body->user_coment, $body->puntaje);
                if ($agregar){
                    return $this->view->response("El comentario id:$agregar fue insertado", 200);
                }
                else{
                    return $this->view->response("No se pudo insertar el comentario", 500);
                }
            }
            else{
                $this->view->response("Envio incapaz", 400);
            }
        }

        public function deleteComentario($params = []){
            $this->showLoginAdmin();
            $id = $params[':ID'];
            $this->model->deleteComentario($id);
            return $this->view->response("El comentario id:$id fue eliminado", 200);
        }

    }
?>