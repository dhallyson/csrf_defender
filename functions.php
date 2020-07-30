<?php

/**
 * ATAQUE CSRF
 * 
 * 1 - Criar um token para salvar na $_SESSION
 * 2 - Criar o INPUT que armazena em seu VALUE esse TOKEN
 * 3 - Criar uma VERIFICAÇÃO para esse TOKEN
 */

session_start();

function csrf()
{
    return $_SESSION['csrf_token'] = base64_encode(random_bytes(20));
}

function csrf_input()
{
    csrf();
    return "<input type='text' name='csrf' value='" . $_SESSION['csrf_token'] . "'><br><br>";
}

function csrf_verify(array $request)
{
    if(empty($request['csrf']) || empty($_SESSION['csrf_token']) || $request['csrf'] != $_SESSION['csrf_token']){
        return false;
    }

    return true;
}
