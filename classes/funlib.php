<?
/*
Biblioteca de funções

$novadata = dtdmy($data);
- recebe uma data no formato aaaa-mm-dd e retorna dd/mm/aaaa
- uso para exibir uma data que vem da tabela

$novadata = dtymd($data);
- recebe uma data no formato dd/mm/aaaa e retorna aaaa-mm-dd
- uso para gravar uma data que vem do form na tabela

$SemAcentos = RemoveAcentos('Atenção');
- retornar a $string sem acentos, tudo em minúsculas e converte espaços e / em -

*/
function dtdmy($dt)
{
	$dtano  = substr($dt,0,4);
	$dtmes  = substr($dt,5,2);
	$dtdia  = substr($dt,8,2);
	return $dtdia."-".$dtmes."-".$dtano;
}

function dtymd($dt)
{
	$dtano  = substr($dt,6,4);
	$dtmes  = substr($dt,3,2);
	$dtdia  = substr($dt,0,2);
	return $dtano."-".$dtmes."-".$dtdia;
}

// Exibe data e hora (dd-mm-aaaa hh:mm) de um campo datetime
function dthr($dt)
{
    $dtano  = substr($dt,0,4);
    $dtmes  = substr($dt,5,2);
    $dtdia  = substr($dt,8,2);
    $hora = substr($dt,11,2);
    $minu = substr($dt,14,2);
    return $dtdia."-".$dtmes."-".$dtano." ".$hora."h".$minu;
}


function RemoveAcentos($novo){
	$com_acentos=array('ñ','á','Á','ã','Ã','â','Â','à','À','é','É','ê','Ê','í','Í','ó','Ó','õ','Õ','ô','Ô','ú','Ú','ü','Ü','ç','Ç','/',',',':','?');
	$sem_acentos=array('n','a','A','a','A','a','A','a','A','e','E','e','E','i','I','o','O','o','O','o','O','u','U','u','U','c','C','','','','');
	$troca1 = strtolower(str_replace($com_acentos,$sem_acentos,$novo)); // remove acentos e converte para minusculas
	$troca2 = strtolower(str_replace('-','',$troca1)); // elimina - se existir para não ficar --- no resultado
	$troca3 = str_replace('  ',' ',$troca2); // converte 2 espaços em 1 espaço
	$troca4 = str_replace(' ','-',$troca3); //  converte espaço em -
	return $troca4;
}

// retorna true se $todo contem $parte
function contem($parte, $todo)
{
    return strpos($todo, $parte) !== false;
}


// filtro um texto em relação a quantidade de caracteres
function abreviaString($texto, $limite, $tres_p = '...')
{
    $totalCaracteres = 0;
    //Retorna o texto em plain/text
    $texto = strip_tags($texto);
    //Cria um array com todas as palavras do texto
    $vetorPalavras = explode(" ",$texto);
    if(strlen($texto) <= $limite):
        $tres_p = "";
        $novoTexto = $texto;
    else:
        //Começa a criar o novo texto resumido.
        $novoTexto = "";
        //Acrescenta palavra por palavra na string enquanto ela
        //não exceder o tamanho máximo do resumo
        for($i = 0; $i <count($vetorPalavras); $i++):
            $totalCaracteres += strlen(" ".$vetorPalavras[$i]);
            if($totalCaracteres <= $limite)
                $novoTexto .= ' ' . $vetorPalavras[$i];
            else break;
        endfor;
    endif;
    return $novoTexto . $tres_p;
}



?>