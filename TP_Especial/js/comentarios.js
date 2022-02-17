"use strict";

const API_URL = 'api/comentarios';

let appComent = new Vue({
    el: "#appComent",
    data: {
        titulo: "Comentarios del producto:",
        comentarios: [],
        rol: false,
    },
    methods: {
        eliminarComentario: function(itemId){
            deleteComentario(itemId);
        }
    }
});
getComentarios();

async function getComentarios(){
    
    try {
        let id = document.querySelector(".id").dataset.id;
        let response = await fetch(API_URL+`/${id}`);
        let comentarios = await response.json();
        appComent.comentarios = comentarios;
        if(document.querySelector(".id").dataset.rol == 1){
            appComent.rol = true;
        }
    } catch (error) {
        console.log(error);
    }
}

if(document.querySelector(".form-coment")){
    document.querySelector(".form-coment").addEventListener("submit", addComentario);
}

async function addComentario(e){
    e.preventDefault();
    let data = {
        Id_producto: document.querySelector(".id").dataset.id,
        Texto: document.querySelector("#floatingTextarea2").value,
        User_coment: document.querySelector(".id").dataset.user,
        Puntaje: document.querySelector(".puntaje").value,
    }
    try {
        let resultado = await fetch(API_URL,{
            "method": "POST",
            "headers": { "Content-type": "application/json" },
            "body": JSON.stringify(data)
        });
        if(resultado.status==200){
            document.querySelector(".form-coment").reset();
            getComentarios();
        }
    } catch (error) {
        console.log(error);
    }
}

async function deleteComentario(id){
    try{
        let resultado = await fetch(API_URL+`/${id}`,{
            "method": "DELETE"
        });
        if(resultado.status == 200){
            getComentarios();
        }
    }catch(error){
        console.log(error);
    }
    getComentarios();
}
