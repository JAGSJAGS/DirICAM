<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio-ICAM Home</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo" id="logo"><img src="../recursos/icam_logoS.png" alt=""></div>
            <form  action="" id="formbuscador" class="formbuscador" method="POST">
                    <label for="" id="labelBuscador" class="labelBuscador">
                        <input list="search" name="buscador" id="buscador" class="buscador" placeholder="Escriba nombre de la empresa, representante o código">
                        <datalist id="search">
                            <?php foreach ($empresas as $emp1) {?>  
                                <option value="<?php echo $emp1['representante'];?>">
                                <option value="<?php echo $emp1['name'];?>">
                                <option value="<?php echo $emp1['codigo'];?>">
                            <?php }  ?> 
                        </datalist>
                    </label>
                    <input type="submit" class="buscar" id="buscar" value="Buscar">
                </form>
            <div class="menu">
                

                
            <form action="" id="form" method="POST">
                <select class="subnucleo" id="subnucleo" name="seleccionar_subnucleo">
                    <option value = "">Subnúcleo</option>
                    <optgroup label="INDUSTRIA DE LA CONSTRUCCIÓN"> 
                        <?php foreach ($subnucleos1 as $sub1) {?>  
                            <option value="<?php echo $sub1['id'];?>"><?php echo $sub1['name'];?></option>
                        <?php }  ?> 
                    </optgroup>
                    <optgroup label="TEXTILES, PRENDAS DE VESTIR, CALZADO Y CUERO"> 
                        <?php foreach ($subnucleos2 as $sub2) {?>  
                            <option value="<?php echo $sub2['id'];?>"><?php echo $sub2['name'];?></option>
                        <?php }  ?> 
                    </optgroup> 
                    <optgroup label="AUTOMOTRIZ"> 
                        <?php foreach ($subnucleos3 as $sub3) {?>  
                            <option value="<?php echo $sub3['id'];?>"><?php echo $sub3['name'];?></option>
                        <?php }  ?> 
                    </optgroup> 
                    <optgroup label="INDUSTRIA GRÁFICA ,PAPELERA Y MATERIAL DE ESCRITORIO"> 
                        <?php foreach ($subnucleos4 as $sub4) {?>  
                            <option value="<?php echo $sub4['id'];?>"><?php echo $sub4['name'];?></option>
                        <?php }  ?> 
                    </optgroup> 
                    <optgroup label="ALIMENTOS Y BEBIDAS"> 
                        <?php foreach ($subnucleos5 as $sub5) {?>  
                            <option value="<?php echo $sub5['id'];?>"><?php echo $sub5['name'];?></option>
                        <?php }  ?> 
                    </optgroup> 
                    <optgroup label="SALUD"> 
                        <?php foreach ($subnucleos6 as $sub6) {?>  
                        <option value="<?php echo $sub6['id'];?>"><?php echo $sub6['name'];?></option>
                        <?php }  ?> 
                    </optgroup> 
                    <optgroup label="TURISMO Y GASTRONOMÍA"> 
                        <?php foreach ($subnucleos7 as $sub7) {?>  
                            <option value="<?php echo $sub7['id'];?>"><?php echo $sub7['name'];?></option>
                        <?php }  ?> 
                    </optgroup> 
                    <optgroup label="PRODUCTOS QUíMICOS, DE LIMPIEZA Y CUIDADO PERSONAL"> 
                        <?php foreach ($subnucleos8 as $sub8) {?>  
                            <option value="<?php echo $sub8['id'];?>"><?php echo $sub8['name'];?></option>
                        <?php }  ?> 
                    </optgroup> 
                    <optgroup label="ENERGÍA, SOFTWARE Y TICs"> 
                        <?php foreach ($subnucleos9 as $sub9) {?>  
                            <option value="<?php echo $sub9['id'];?>"><?php echo $sub9['name'];?></option>
                        <?php }  ?> 
                    </optgroup> 
                    <optgroup label="SERVICIOS"> 
                        <?php foreach ($subnucleos10 as $sub10) {?>  
                            <option value="<?php echo $sub10['id'];?>"><?php echo $sub10['name'];?></option>
                        <?php }  ?> 
                    </optgroup>                     
                </select>
                <select class="zona" id="zona" name="seleccionar_zona">
                    <option value = "">Zona</option>
                        <?php foreach ($zonas as $zona) {?>  
                            <option value="<?php echo $zona['zona'];?>"><?php echo $zona['zona'];?></option>
                        <?php }  ?> 
                    </optgroup> 
                </select>
                <select class="clasificacion" id="clasificacion" name="seleccionar_clasificacion">
                    <option value = "">Clasificación</option> 
                        <?php foreach ($clasificaciones as $clasificacion) {?>  
                            <option value="<?php echo $clasificacion['clasificacion'];?>"><?php echo $clasificacion['clasificacion'];?></option>
                        <?php }  ?> 
                </select>

                <input type="submit" value="Seleccionar">
            </form>
                <a href="includes/logout.php" id="sesion" class="sesion">Cerrar sesión</a>
            </div>
        </nav>
    </header>
    <main>
        <section class="contenedor" >
            <?php foreach ($respuestas as $res) {?>
                <div class="card">
                    <div id="parrafo">NOMBRE:</div><p><?php echo $res['name'];?></p>
                    <div id="parrafo">DIRECCIÓN:</div><p><?php echo $res['direccion'];?></p>
                    <div id="parrafo">ZONA:</div><p><?php echo $res['zona'];?></p>
                    <div id="parrafo">CLASIFICACIÓN:</div><p><?php echo $res['clasificacion'];?></p>
                    <div id="parrafo">TELÉFONO:</div><p><?php echo $res['telefono'];?></p>
                    <div id="parrafo">CÓDIGO:</div><p><?php echo $res['codigo'];?></p>
                    <div id="parrafo">REPRESENTANTE:</div><p><?php echo $res['representante'];?></p>
                    <div id="parrafo">SUBNUCLEO:</div><p><?php echo $res['id_subnucleo'];?></p>
                    <div id="parrafo">UBICACIÓN:</div><a href="<?php echo $res['ubicacion'];?>" target="_blank" rel="noopener noreferrer"  id="ubi" ><p><?php echo $res['ubicacion'];?></p></a>
                    <div id="parrafo">CELULAR:</div><p>67428511</p>
                    <button id ="telefono" class= "telefono">Llamar</button>
                    <button id="watsap" class="watsap">Llamar Whatsapp</button>
                </div>                
            <?php }  ?>
        </section>
    </main>
    <footer>
        <div class="links" id="links">
            <a href="https://icam.bo/" target="_blank" rel="noopener noreferrer" class="link">Página oficial</a>
            <a href="https://icam.bo/descargas" target="_blank" rel="noopener noreferrer" class="link">CRM ICAM</a>
            <a href="https://icam.bo/" target="_blank" rel="noopener noreferrer" class="link">Faceboock</a>
            <a href="https://icam.bo/" target="_blank" rel="noopener noreferrer" class="link">Hecho en Bolivia</a>
        </div>    
    </footer>
</body>
</html>