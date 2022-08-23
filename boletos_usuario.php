<?php

$inc=include ("connection.php");
if($inc){
    $consulta="SELECT id_compra, destino, hora_salida, precio_total, codigo_clientes, codigo_aerolinea FROM compras";
    $resultado=mysql_query($conexion,$consulta);
    if($resultado){
        while($row=$resultado->fetch_array()){
            $id=$row['id_compra'];
            $destino=$row['destino'];
            $salida=$row['hora_sarida'];
            $precio=$row['precio_total'];
            $codCliente=$row['codigo_clientes'];
            $codAerolinea=$row['codigo_aerolinea'];
?>
    <div class="contenedorDato">
    <div class="info-dato">ID de la compra:</div>
    <div class="mostrarDato"><?php echo $id; ?></div>
</div>
<div class="contenedorDato">
    <div class="info-dato">Lugar Destino:</div>
    <div class="mostrarDato"><?php echo $destino; ?> </div>
</div>
<div class="contenedorDato">
    <div class="info-dato">Hora Salida:</div>
    <div class="mostrarDato"><?php echo $salida; ?> </div>
</div>
<div class="contenedorDato">
    <div class="info-dato">Precio total:</div>
    <div class="mostrarDato"><?php echo $precio; ?> </div>
</div>
<div class="contenedorDato">
    <div class="info-dato">Codigo del cliente:</div>
    <div class="mostrarDato"><?php echo $codCliente; ?> </div>
</div>
<div class="contenedorDato">
    <div class="info-dato">Codigo de la aerolinea: </div>
    <div class="mostrarDato"><?php echo $codAerolinea; ?></div>
</div>
<div class="contenedorboton">
<button type="submit" id="actualizarbtn" name="actualizar" >
                            Actualizar
                        </button>
                        <button type="submit" id="borrarbtn" name="borrar" >
                            Borrar
                        </button>
                       
                    </div>
        <?php
        }
    }
}
?>