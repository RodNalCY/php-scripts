<?php

// date_default_timezone_set('America/Lima');

// const ENV_DB_HOST = 'localhost'; // localhost
// const ENV_DB_PORT = 3306;
// const ENV_DB_DATABASE = 'dbextranet_labelsol';
// const ENV_DB_USERNAME = 'root';
// const ENV_DB_PASSWORD = '@Local_2021.';

// $now = time();
// $your_date_time = DateTime::createFromFormat('Y-m-d H:i:s', '2024-01-26 10:48:05');
// $your_date = $your_date_time->getTimestamp();
// $datediff = ($now - $your_date);

// echo "<br>";
// echo $now;
// echo "<br>";
// echo $your_date;
// echo "<br>";
// echo $datediff;

// $now = time();
// $formatted_date_now = date('Y-m-d H:i:s', $now);


// La cadena de fecha original
// $your_date_str = '2024-01-26 10:48:05';
// // Crear un objeto DateTime desde la cadena
// $your_date_time = DateTime::createFromFormat('Y-m-d H:i:s', $your_date_str);
// // Verificar si la creación del objeto DateTime fue exitosa
// if ($your_date_time === false) {
//     // Manejar error en la creación del objeto DateTime
//     die('Error al crear el objeto DateTime');
// }

// // Formatear el objeto DateTime en el formato deseado
// $formatted_date2 = $your_date_time->format('Y-m-d H:i:s');

// // Imprimir la fecha formateada
// echo "<br>";
// // echo $formatted_date_now;
// echo "<br>";
// echo $your_date_time2;

// // La cadena de fecha original
// $your_date_str = '2024-06-26 10:48:05';

// // Crear un objeto DateTime desde la cadena
// $your_date_time = DateTime::createFromFormat('Y-m-d H:i:s', $your_date_str);

// // Verificar si la creación del objeto DateTime fue exitosa
// if ($your_date_time === false) {
//     // Manejar error en la creación del objeto DateTime
//     $your_date = 0;
// }

// // Formatear el objeto DateTime en el formato deseado
// $formatted_date = $your_date_time->format('Y-m-d H:i:s');


// $now = time();
// $formatted_date_now = date('Y-m-d H:i:s', $now);


// // Imprimir la fecha formateada
// echo $formatted_date_now;
// echo "<br>";
// echo $formatted_date;


// // La cadena de fecha original
// $your_date_str = '2024-07-19 17:13:19';

// // Crear un objeto DateTime desde la cadena
// $your_date_time = DateTime::createFromFormat('Y-m-d H:i:s', $your_date_str);

// // Verificar si la creación del objeto DateTime fue exitosa
// if ($your_date_time === false) {
//     die('Error al crear el objeto DateTime');
// }

// // Formatear el objeto DateTime en el formato deseado
// $formatted_date = $your_date_time->format('Y-m-d H:i:s');

// // Obtener la fecha y hora actuales
// $now = new DateTime();
// $formatted_date_now = $now->format('Y-m-d H:i:s');

// // Imprimir las fechas formateadas

// echo "User: ". $formatted_date;
// echo "<br>";
// echo "Actual: ". $formatted_date_now;
// echo "<br>";

// // Restar las dos fechas
// $interval = $now->diff($your_date_time);

// // Verificar si la diferencia es positiva o negativa
// var_dump($interval->i);

// if ($interval->invert == 0) {
//     echo "Success";
// } else {
//     echo "Failed";
// }
///////////////////////////7
// La cadena de fecha original
// $your_date_str = '2024-06-28 17:30:05';

// // Crear un objeto DateTime desde la cadena
// $your_date_time = DateTime::createFromFormat('Y-m-d H:i:s', $your_date_str);

// // Verificar si la creación del objeto DateTime fue exitosa
// if ($your_date_time === false) {
//     die('Error al crear el objeto DateTime');
// }

// // Formatear el objeto DateTime en el formato deseado
// $formatted_date = $your_date_time->format('Y-m-d H:i:s');

// // Obtener la fecha y hora actuales
// $now = new DateTime();
// $formatted_date_now = $now->format('Y-m-d H:i:s');

// // Imprimir las fechas formateadas
// echo $formatted_date_now;
// echo "<br>";
// echo $formatted_date;
// echo "<br>";

// // Restar las dos fechas
// $interval = $your_date_time->diff($now);

// // Calcular la diferencia en minutos
// $seconds = $interval->days * 24 * 60 * 60; // días a segundos
// $seconds += $interval->h * 60 * 60; // horas a segundos
// $seconds += $interval->i * 60; // minutos a segundos
// $seconds += $interval->s; // segundos
// $minutes = $seconds / 60;

// // Imprimir la diferencia en minutos
// echo "Diferencia en minutos: " . $minutes . "<br>";

// // Verificar si la diferencia es positiva o negativa
// if ($minutes >= $minutes+5) {
//     echo "Success";
// } else {
//     echo "Failed";
// }

////////////////////////////

// // La cadena de fecha original
// $your_date_str = '2024-06-28 17:35:05';

// // Crear un objeto DateTime desde la cadena
// $your_date_time = DateTime::createFromFormat('Y-m-d H:i:s', $your_date_str);

// // Verificar si la creación del objeto DateTime fue exitosa
// if ($your_date_time === false) {
//     die('Error al crear el objeto DateTime');
// }

// // Obtener la fecha y hora actuales
// $now = new DateTime();

// // Calcular el tiempo límite de 15 minutos atrás desde ahora
// $limit_time = clone $now;
// $limit_time->modify('-15 minutes');

// // Formatear las fechas
// $formatted_date_now = $now->format('Y-m-d H:i:s');
// $formatted_date_limit = $limit_time->format('Y-m-d H:i:s');
// $formatted_date = $your_date_time->format('Y-m-d H:i:s');

// // Imprimir las fechas formateadas
// echo "Fecha y hora actuales: " . $formatted_date_now . "<br>";
// echo "Límite de 15 minutos atrás: " . $formatted_date_limit . "<br>";
// echo "Fecha dada: " . $formatted_date . "<br>";

// // Verificar si la fecha dada está dentro de los últimos 15 minutos
// if ($your_date_time >= $limit_time) {
//     echo "Success: La fecha dada está dentro de los últimos 15 minutos.";
// } else {
//     echo "Failed: La fecha dada no está dentro de los últimos 15 minutos.";
// }

// const ENV_DB_HOST = 'localhost'; // localhost
// const ENV_DB_PORT = 3306;
// const ENV_DB_DATABASE = 'dbextranet_labelsol';
// const ENV_DB_USERNAME = 'root';
// const ENV_DB_PASSWORD = '@Local_2021.';
// date_default_timezone_set('America/Lima');

// $conn = mysqli_connect(ENV_DB_HOST, ENV_DB_USERNAME, ENV_DB_PASSWORD, ENV_DB_DATABASE, ENV_DB_PORT);

// $number = '555333';
// $query = "SELECT * FROM TokensAccesoExtranet WHERE Password = ?";
// $stmt = $conn->prepare($query);
// $stmt->bind_param('s', $number);
// $stmt->execute();
// $result = $stmt->get_result();

// // Imprimir el resultado
// $dato = $result->fetch_assoc();


// echo $dato['HoraCreacion'];
// echo "<br>";
// echo gettype($dato['HoraCreacion']);
// echo "<br>";

// $your_date_time = DateTime::createFromFormat('Y-m-d H:i:s', $dato['HoraCreacion']);

// if ($your_date_time === false) {
//     die('Error al crear el objeto DateTime');
// }

// // Obtener la fecha y hora actuales
// $now = new DateTime();

// // Calcular el tiempo límite de 15 minutos atrás desde ahora
// $limit_time = clone $now;
// $limit_time->modify('-15 minutes');

// if ($your_date_time >= $limit_time) {
//    echo "Success";
// }else{
//     echo "Error";
// }
// // echo $your_date_time;
// // Formatear el objeto DateTime en una cadena
// // $formatted_date = $your_date_time->format('Y-m-d H:i:s');

// // Imprimir la fecha formateada
// // echo $formatted_date;

// // echo "<br>";


// // while ($row = $result->fetch_assoc()) {
// //     print_r($row);

// // }

// // Cerrar la declaración preparada
// $stmt->close();

// // Cerrar la conexión
// $conn->close();

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// $conn = mysqli_connect(ENV_DB_HOST, ENV_DB_USERNAME, ENV_DB_PASSWORD, ENV_DB_DATABASE, ENV_DB_PORT);

// // Cadena de entrada
// // $input = "20471638898,20477968571,20611000490";
// $input = "";

// // Separar la cadena por comas
// $datos = explode(",", $input);
// $arry_ruc = [];
// var_dump($datos);
// // Mostrar los datos separados
// if (!empty($input)) {
//     foreach ($datos as $ruc) {


//         $stmt = $conn->prepare("SELECT IdCliente FROM wp_ext_sol_Clientes WHERE RUC = ? AND exception = 0 ORDER BY RUC ASC;");
//         $stmt->bind_param('s', $ruc);
//         $stmt->execute();
//         $result = $stmt->get_result();
//         $client = $result->fetch_assoc();
//         if ($client) {
//             // var_dump($result2);
//             $arry_ruc[] = [
//                 "RUC" => $ruc,
//                 "ID" => $client['IdCliente']
//             ];
//         }
//         // echo $ruc . "<br>";
//         // echo "------------------<br>";
//     }
// }

// echo "<br>------------------<br>";
// // print_r($arry_ruc);
// // echo "<br>";
// var_dump($arry_ruc);
// echo "<br>";
// var_dump($arry_ruc[0]['RUC']);
// echo "<br>";
// var_dump($arry_ruc[0]['ID']);
// echo "<br>------------------<br>";

// if (!empty($arry_ruc)) {
//     echo "success";
// }
// $number = '555333';
// $query = "SELECT * FROM TokensAccesoExtranet WHERE Password = ?";
// $stmt = $conn->prepare($query);
// $stmt->bind_param('s', $number);
// $stmt->execute();
// $result = $stmt->get_result();

// // Imprimir el resultado
// $dato = $result->fetch_assoc();
// var_dump($dato);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// header('Content-type: application/json; charset=utf-8');

// // Definir la URL
// $url = "https://api-services.elsol.pe/api/producto/image/details/38192409";
// // $url = "https://api-services.elsol.pe/api/producto/image/details/02062901";
// // $url = "https://api-services.elsol.pe/api/producto/image/details/020629331";
// // Hacer la solicitud GET
// $response = file_get_contents($url);
// // Verificar si la solicitud fue exitosa
// if ($response !== false) {
//     // Decodificar la respuesta JSON
//     $data = json_decode($response, true);
//     // Verificar si el campo 'status' es true
//     if ($data['status']) {
//         var_dump($data);
//     }
// }


// Verificar si la solicitud fue exitosa
// if ($response !== false) {
//     // Decodificar la respuesta JSON
//     $data = json_decode($response, true);

//     // Verificar si se pudo decodificar el JSON y si el campo 'status' está presente
//     if (isset($data['status'])) {
//         // Obtener el valor de 'status'
//         $status = $data['status'];

//         // Mostrar el estado
//         if ($status) {
//             echo "El estado es: true";
//         } else {
//             echo "El estado es: false";
//         }
//     } else {
//         echo "El campo 'status' no está presente en la respuesta.";
//     }
// } else {
//     echo "No se pudo obtener la respuesta de la URL.";
// }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// $server = $_SERVER['DOCUMENT_ROOT'] . "/imagenes/";

// $missing_images = [
//     [
//         'id'     => "09020702",
//         'imagen' => "09020702_pasta_montaje_vipal.jpg"

//     ],
//     [
//         'id'     => "22010104",
//         'imagen' => "22010104_tr416s_unidad.jpg"

//     ],
//     [
//         'id'     => "22010332",
//         'imagen' => "22010332_pitoncamion_tr175a_p.camara.jpg"

//     ],
//     [
//         'id'     => "22150001",
//         'imagen' => "22150001.jpg"

//     ],

// ];

// $not_found_images = [];

// foreach ($missing_images as $image) {
//     $image_path = $server . $image['imagen'];
//     // echo "<br>".$image_path."<br>";
//     if (!file_exists($image_path)) {
//         $not_found_images[] = $image;
//     }
// }

// if (!empty($not_found_images)) {
//     echo "Imágenes no encontradas:\n";
//     foreach ($not_found_images as $not_found) {
//         echo "<br>"."ID: " . $not_found['id'] . " - Imagen: " . $not_found['imagen'] . "<br>";
//     }
// } else {
//     echo "Todas las imágenes existen.";
// }

////////////////////////////////////RETO JULIO////////////////////////////////////////

// $url = "https://www.gob.pe/busquedas.rss?contenido=noticias&institucion=concytec&sheet=1&sort_by=recent";
// // Crear un contexto de flujo con los headers adecuados
// $options = [
//     "http" => [
//         "header" => "User-Agent: PHP\r\n"
//     ]
// ];
// $context = stream_context_create($options);
// $xmlContent = file_get_contents($url, false, $context);

// if ($xmlContent === FALSE) {
//     trigger_error("Error al obtener el contenido de la URL.", E_USER_WARNING);
//     echo "No se pudo obtener el contenido de la URL. Por favor, inténtelo más tarde.";
//     exit;
// }

// // Cargar el contenido XML en un objeto SimpleXMLElement
// $xml = simplexml_load_string($xmlContent);

// if ($xml === FALSE) {
//     trigger_error("Error al cargar el contenido XML.", E_USER_WARNING);
//     echo "No se pudo cargar el contenido XML. Por favor, inténtelo más tarde.";
//     exit;
// }

// // Iterar sobre los elementos 'item' del canal
// foreach ($xml->channel->item as $item) {
//     echo "Título: " . $item->title . "\n";
//     echo "Descripción: " . $item->description . "\n";
//     echo "Fecha de publicación: " . $item->pubDate . "\n";
//     echo "Enlace: " . $item->link . "\n";
//     echo "---------------------------------\n";
// }



// $token = '$2y$10$Ut1lmE5kRzxaQrIQgUBCqe3So64wmt0Fgy3fBsoHPiWJrT7wkxjgS';
// $url = 'http://127.0.0.1:8000/api/labs/servers/verify/item/02083901';

// // Inicializa cURL
// $ch = curl_init();

// // Configura la URL y los headers
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, [
//     'Authorization: Bearer ' . $token,
//     'Content-Type: application/json'
// ]);

// // Ejecuta la petición
// $response = curl_exec($ch);
// $data = [];
// // Verifica si hubo un error en la petición
// if (curl_errno($ch)) {
//     echo 'Error en la petición: ' . curl_error($ch);
// } else {
//     // Verifica el código de estado de la respuesta
//     $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

//     if ($httpCode == 200) {
//         $data[] = json_decode($response, true); // Decodifica la respuesta JSON     
//     } else {
//         echo 'Error en la petición: Código de estado ' . $httpCode;
//     }
// }

// header('Content-type: application/json; charset=utf-8');
// echo json_encode($data, JSON_PRETTY_PRINT);
// // Cierra cURL
// curl_close($ch);
//////////////////////////////////////////////////////////////////////////////////////////

// echo "<h1>Update a Minusculas.</h1><br>";

// $directory = 'D:\laragon\www\extelsol_labelsol\wp-content\plugins\extelsol\imagenes\fotosllantas';
$directory = 'imagenes';
// Extensiones de archivos de imagen a procesar
$imageExtensions = ['jpg', 'jpeg', 'png', 'gif'];


// Llamada a la función
renameImagesToLowercase($directory, $imageExtensions);

// Función para renombrar carpetas a minúsculas recursivamente
function renameImagesToLowercase($dir, $imageExtensions)
{
    // File Log de Imagenes
    $logFile = "lowercase_log.txt";
    if (is_dir($dir)) {
        $filesAndFolders = scandir($dir);

        foreach ($filesAndFolders as $item) {
            // Variable para almacenar el mensaje
            $message = "";
            // Ignora las carpetas especiales '.' y '..'
            if ($item != '.' && $item != '..') {
                $oldPath = $dir . DIRECTORY_SEPARATOR . $item;
                $newName = mb_strtolower($item); // Convierte el nombre a minúsculas
                $newPath = $dir . DIRECTORY_SEPARATOR . $newName;

                // Renombra carpetas y continúa con recursividad
                if (is_dir($oldPath)) {
                    if ($oldPath !== $newPath) {
                        rename($oldPath, $newPath);
                        $message = "Directory : $oldPath => $newPath\n";
                        echo $message . "<br>";
                        file_put_contents($logFile, $message . "\n", FILE_APPEND);
                    }
                    // Llama recursivamente para procesar el contenido de la carpeta
                    renameImagesToLowercase($newPath, $imageExtensions);

                    // Renombra solo archivos de imagen
                } else if (is_file($oldPath)) {
                    $extension = pathinfo($oldPath, PATHINFO_EXTENSION);
                    if (in_array(strtolower($extension), $imageExtensions)) {
                        if ($oldPath !== $newPath) {
                            rename($oldPath, $newPath);
                            $message =  "Image : $oldPath => $newPath\n";
                            echo $message . "<br>";
                            file_put_contents($logFile, $message . "\n", FILE_APPEND);
                        }
                    }
                }
            }
        }

        // echo $message;
    } else {
        $message = "La ruta especificada no es un directorio.\n";
        echo $message . "<br>";
        file_put_contents($logFile, $message . "\n", FILE_APPEND);
    }
}
