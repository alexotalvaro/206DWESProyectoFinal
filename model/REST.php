<?php

/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 31 01 2023
 */

class REST {

    public static function apiNasa() {
        $apiKey = "xwbo4dgOUps0eNUlUFZmzWTwaEXPlUXDIaCj89ag";
        $apiNasa = [
            "copyright" => "",
            "date" => "",
            "explanation" => "",
            "hdurl" => "",
            "media_type" => "",
            "service_version" => "",
            "title" => "",
            "url" => ""];
        $respuesta = @file_get_contents("https://api.nasa.gov/planetary/apod?api_key=xwbo4dgOUps0eNUlUFZmzWTwaEXPlUXDIaCj89ag");
        $respuestaJson = json_decode($respuesta, true);
        $apiNasa['hdurl'] = $respuestaJson['hdurl'];
        return $apiNasa['hdurl'];
    }

}
