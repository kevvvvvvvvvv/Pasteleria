
<style>
    /* Estilos generales */
    body {
        font-family: Arial, sans-serif;
        margin: 60px;
        color: black;
        font-weight: bold
    }

    .title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .fecha {
        font-size: 14px;
        margin-bottom: 20px;
    }
</style>


    <h3 class="title">Reporte de productos más vendidos en la semana</h3>

    <section class="fecha">
        <p>{{ $fechaInicioN }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $fechaFinN }}</p>
    </section>


    <h3>Gráfico de productos</h3>
    <img src="data:image/svg+xml;base64,{{ $graficoImagenSem }}" alt="Gráfico de productos">


    

