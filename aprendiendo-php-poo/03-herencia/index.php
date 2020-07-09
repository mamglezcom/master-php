<?php require_once 'clases.php'; ?>
<?php

$persona = new Persona('miguel', 'martin', 180, 47);
var_dump($persona);

$informatico = new Informatico('miguel', 'martin', 180, 47);

var_dump($informatico);

$tecnico = new Tecnico('miguel', 'martin', 180, 47);
var_dump($tecnico);

$tecnico2 = new Tecnico('si');
var_dump($tecnico2);

$tecnico3 = new Tecnico($auditarRedes);
$tecnico4 = new Tecnico($auditarRedes);
?>