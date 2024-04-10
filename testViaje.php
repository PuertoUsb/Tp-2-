<?php
include("viaje.php");
include("pasajeros.php");
include("responsableV.php");



    do {
            //int $opcion

    echo "\n**************************************\n";
    echo "** Bienvenido al menú de opciones:  **\n";
    echo "**************************************\n";

    echo "1) Registrar viaje.\n";
    echo "2) Modificar informacion del viaje.\n";
    echo "3) Ver datos del viaje. \n";
    echo "4) Salir.\n";

        echo " \nPor favor, ingrese el número de la opción deseada: ";
        $opcion = trim(fgets(STDIN));

        if (!($opcion >= 1 && $opcion <= 4)) {
            echo "\nEl número ingresado no es una opción válida. Elija una opción entre 1 (uno) y 3 (tres).\n";
        } else {
            switch ($opcion) {
                case 1:
                    echo "Ingrese el codigo del viaje: \n";
                    $codigo = trim(fgets(STDIN));
                    echo "Ingrese el destino del viaje: \n";
                    $destino = trim(fgets(STDIN));
                    echo "Cantidad maxima de pasajeros: \n";
                    $cantidad = trim(fgets(STDIN));

                    echo "***************************************************\n";
                    echo "Ingreso de datos del responsable a cargo del viaje.\n";
                    echo "***************************************************\n";
                    echo "Ingrese el nombre de la persona a cargo: \n";
                    $nombreReponsable = trim(fgets(STDIN));
                    echo "Ingrese el apellido: \n";
                    $apellidoResponsable = trim(fgets(STDIN));
                    echo "Ingrese el numero de licencia: \n";
                    $licencia = trim(fgets(STDIN));
                    echo "Ingrese el numero de empleado: \n";
                    $numEmpleado = trim(fgets(STDIN));
                    $responsable = new ResponsableV($numEmpleado, $licencia, $nombreReponsable, $apellidoResponsable);

                    echo "***************************************************\n";
                    echo "Ingreso de datos de pasajeros.\n";
                    echo "***************************************************\n";
                    $viaje = new Viaje($codigo, $destino, $cantidad, $responsable);

                    echo "Ingrese nombre del pasajero: \n";
                    $nombre = trim(fgets(STDIN));
                    echo "Ingrese el apellido del pasajero: \n";
                    $apellido = trim(fgets(STDIN));
                    echo "Ingrese documento del pasajero: \n";
                    $documento = trim(fgets(STDIN));
                    echo "Ingrese telefono del pasajero: \n";
                    $telefono = trim(fgets(STDIN));
                    $passen2 = new Pasajero("Lucio", "Martinez", 43834345, 2972408694);
                    $passen = new Pasajero($nombre, $apellido, $documento, $telefono);
                    $agregado = $viaje->agregarPasajero($passen);
                    if ($agregado) {
                        echo "El pasajero se encuentra registrado correctamente. \n";
                    echo "********************\n";
                    echo "Nuevo pasajero.\n";
                    echo "********************\n";
                    } else{
                        echo "El pasajero ya se encuentra en el sistema.";
                    }
                    echo "********************\n";
                    echo "Nuevo pasajero.\n";
                    echo "********************\n";
                break;
                case 2:
                    
                break;

                case 3:
                    $viaje->mostrarDatosViaje();
                break;

                case 4:
                    echo "Saliendo del programa. ¡Hasta pronto!. \n";
    }
}
}while($opcion != 4);       

?>


