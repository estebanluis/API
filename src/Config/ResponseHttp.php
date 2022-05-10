<?php
namespace App\Config;

class ResponseHttp{
    public static$messange = array(
        'status' => '',
        'message' => ''
    );
    public static function status200(String $res){
        http_response_code(200);
        self::$messange['status'] ='ok';
        self::$messange['message'] =$res;
        return self::$messange;
    }

    public static function status201(String $res ='Recurso Creado'){
        http_response_code(200);
        self::$messange['status'] ='ok';
        self::$messange['message'] =$res;
        return self::$messange;
    }

    public static function status400(String $res = 'solicitud enviada incompleta o en formato incorrecto'){
        http_response_code(200);
        self::$messange['status'] ='error';
        self::$messange['message'] =$res;
        return self::$messange;
    }

    public static function status401(String $res = 'No tiene privilegios para acceder al recurso solicitado'){
        http_response_code(200);
        self::$messange['status'] ='error';
        self::$messange['message'] =$res;
        return self::$messange;
    }

    public static function status404(String $res = 'Parece que estas perdido porfavor verifica la documentacion'){
        http_response_code(200);
        self::$messange['status'] ='error';
        self::$messange['message'] =$res;
        return self::$messange;
    }

    public static function status500(String $res = ' Error interno del servidor'){
        http_response_code(200);
        self::$messange['status'] ='error';
        self::$messange['message'] =$res;
        return self::$messange;
    }
}