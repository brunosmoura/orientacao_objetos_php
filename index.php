<?php
require "Pessoa.php";

$uma_pessoa = new Pessoa;

$uma_pessoa->setNome("Bruno");

echo $uma_pessoa->getNome();
