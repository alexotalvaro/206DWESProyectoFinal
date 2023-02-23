<?php

/**
 * API REST 
 * 
 * Clase que trabaja la API de la NASA
 * 
 * @author: Alejandro Otálvaro Marulanda
 * @since: 31 01 2023
 */
class REST {

    /**
     * Metodo que llama la API
     * 
     * Método utilizado para llamar la api de la nasa y nos devuelva la imagen del dia de la NASA
     * @return url
     */
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
