<?php
switch ($_GET['file']) {
    case 1:

        $fichero = "Documentos/envio.pdf";
        header("Content-Disposition: attachment; filename=" . $fichero);
        header("Content-type: application/pdf");
        readfile($fichero);
        break;

    case 2:

        $fichero = "Documentos/pago.pdf";
        header("Content-Disposition: attachment; filename=" . $fichero);
        header("Content-type: application/pdf");
        readfile($fichero);
        break;
    default:
        echo "FILE INCORRECTO";
}
?>