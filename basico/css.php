<div class="titulo"> Integração CSS</div>

<h1 center>
    <?php
    echo 'Olá ';
    echo '<small>';
    echo 'Mundo!';
    echo '</small>';
    ?> 
</h1>

<?= '<div center azul>Outra forma de me ' . 'expressar!</div>' ?> <!-- forma reduzida do echo -->

<br> <!-- tag de quebra de linha -->

<div center><button dobro><?="Legal"?></button></div> 

<style>
    button {
        padding: 5px <?= 2 * 10?>px;
        background-color: #4286f4;
        color: #EEE;
        font-wheight: bold;
        border-radius: 10px;
    }

     /* atributo personalizado */
    [center] {
        display: flex;
        justify-content: center;
        align-items: center;
    }
     /* atributo personalizado */

    [azul] {
        color: #4286f4;
    }

     /* atributo personalizado */
    [dobro] {
        font-size: <?= 10 - 8?>rem;
    }
</style>