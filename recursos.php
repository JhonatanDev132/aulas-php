<?php
define("ESCOLA", "Senac");
$curso = "Técnico em informática para Internet";
$tecnologias = ["HTMl", "CSS", "JS", "PHP"];

function verificaidade(int $idade): string {
    return $idade > 18 ? "maior" : "menor";
}
?>