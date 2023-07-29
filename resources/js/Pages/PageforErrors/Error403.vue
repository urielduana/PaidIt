<script setup>

defineProps({
    imagenURL: String,
    texto: String   
});
</script>


<template>
    <div class="error_403">
      <img src="public/img/accesodenegado.png" alt="" />
      <div class="texto">
        Error!
        Parece que no tienes acceso
        a esta pagina.
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
  