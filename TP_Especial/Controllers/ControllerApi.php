<?php
    require_once('./Models/ModelComentarios.php');
    require_once ('./Views/viewApi.php');
    require_once ('./Controllers/controllerUsuarios.php');

    class ControllerApi{

        private $model;
        private $view;
        private $controllerUser;

        function __construct(){
            $this->model = new modelComentarios();
            $this->view = new viewApi();
            $this->controllerUser = new controllerUsuarios();
        }

        private function getBody() {
            $bodyString = file_get_contents("php://input");
            return json_decode($bodyString);
        }

        public function getComentarios($params = null){
            $id = $params[":ID"];
            $comentarios = $this->model->getComentarios($id);
            $this->view->response($comentarios,200);
        }

        public function insertComentario($params = null){
            $body = $this->getBody();

            if(!empty($body->Texto) && !empty($body->Id_producto) && !empty($body->Puntaje) && !empty($body->User_coment)){
                $comentario=$this->model->insertComentario($body->Id_producto, $body->Texto, $body->Puntaje, $body->User_coment);
                if($comentario){
                    $this->view->response("El comentario se insertó con el id=$idComentario", 200);
                }else{
                    $this->view->response("No se puedo enviar el comentario", 500);
                }
            }else{
                $this->view->response("Envio incapaz", 400);
            }
        }

        public function deleteComentario($params = null){
            $this->controllerUser->showLoginAdmin();
            $id = $params[":ID"];
            $this->model->deleteComentario($id);
        }

    }