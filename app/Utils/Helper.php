<?php

namespace App\Utils;

class Helper
{
    /*
     * Insere máscara
     *
     */
    public static function insereMascara($val, $mask)
    {
         $maskared = '';
         $k        = 0;

         for($i = 0; $i<=strlen($mask)-1; $i++)
         {
             if($mask[$i] == '#')
             {
                if(isset($val[$k]))
                    $maskared .= $val[$k++];
             }
             else
             {
                if(isset($mask[$i]))
                    $maskared .= $mask[$i];
             }
         }

         return $maskared;
    }



    /*
     * Retira itens especiais do CNAB
     *
     */
    function formataCnab($string)
    {
        return  str_replace(array("ª","º"),array("a","o"), $string);
    }


    /*
     *  Retira acentuação das string para envio de XML's
     *
     */
    function formataString($string){


        $string = str_replace(array("Ç","ç"),array("C","c"), $string);

        $formated = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/",
            "/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/",
            "/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),($string));

        return $formated;

    }

    /*
     * Formata string apenas com numeros
     *
     */
    function formataNumeral($string)
    {
        $string = str_replace(" ","",$string);

        return preg_replace("/[^0-9]/", "", $string);
    }

    /*
     * Formata string apenas com numeros sem pontos ou virgulas
     *
     */
    function formataNumeralGateway($string)
    {
        $string = str_replace(" ","",$string);
        $string = str_replace(".","",$string);
        $string = str_replace(",","",$string);

        return preg_replace("/[^0-9]/", "", $string);
    }

    /**
     *  Função que recebe valor vindo do Gerencianet (Centavos) em Numero Double para inclir direto no banco!
     */
    function formataCentavosParaMysql($valor)
    {
        return number_format($valor/100,'2','.','');
    }



    /*
     * Remove trecho da string " - " reservada para complemento do produto na emissão de NFe
     *
     */
    function removeTrechoReservado($string)
    {
        return str_replace([" - "], ["-"], $string);
    }

    /*
     *  Remove quebra de linha
     *
     */
    function removeQuebraLinha($text)
    {
        return str_replace(["\r\n","\n","\r"], [". ",". ",". "], $text);
    }

    /*
     *  Remove espaços - Exemplos de aplicação: chave da nota fiscal
     *
     */
    function removeEspaco($string)
    {
        return str_replace(" ", "", $string);
    }

    /*
     *  Remove máscaras de campos como telefone, cpf, cnpj, cep para envio de XML's
     *
     */
    static function removeMascara($string)
    {
        return str_replace([".","_","/","-","(",")"," "], ["","","","","","",""], $string);
    }


    /*
     * Formata moeda com padronização para inserir em banco de dados, de colunas tipo "decimal"
     *
     */
    function formataMoeda($money)
    {
        $money = str_replace(" ","",$money);

        if(!is_numeric($money))
        {
            $money      = str_replace(".","",$money);
            $formated   = str_replace(",",".",$money);
        }
        else
        {
            $formated = $money;
        }
        return $formated;
    }

    public static function MySqlToDate($data)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data)->format('d/m/Y');
    }

    public static function MySqlToOnlyDate($data)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d', $data)->format('d/m/Y');
    }

    public static function DateToMysql($data)
    {
        return \Carbon\Carbon::createFromFormat('d/m/Y', $data)->format('Y-m-d');
    }

    public static function DatetimeToMysql($data)
    {   
        return \Carbon\Carbon::createFromFormat('d/m/Y H:i', $data)->format('Y/m/d H:i');
    }

    public static function tirarAcentos($string)
    {
		return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),
		explode(" ","a A e E i I o O u U n N"),$string);
	}
}




