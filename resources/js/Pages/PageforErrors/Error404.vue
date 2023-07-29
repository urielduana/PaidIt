<script setup>

defineProps({
    imagenURL: String,
    texto: String   
});
</script>


<template>
    <div class="error_404">
      <img src="/public/img/error404.png" alt="" />
      <div class="texto">
        Parece que no pudimos encontrar 
        lo que estabas buscando.
        Sera mejor que visites otra
        de nuestras paginas.
        <p>{{ texto }}</p>
      </div>
    </div>
  </template>
  
  
  <style>
  .error_404 {
    display: flex;
    align-items: center;
  }
  
  .texto {
    /* Estilos para el contenedor del texto */
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: right;
    color: blueviolet;
  }
  
  /* Estilos adicionales para la imagen (opcional) */
  img {
    max-width: 100%;
  }
  </style>
  