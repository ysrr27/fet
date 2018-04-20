<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbl_curso;
use App\tbl_equipoilernus;
use App\tbl_instructores;
use DB;
use App\Consultas;
use App\Menu;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PHPMailer;

class HomeController extends Controller
{
    
    /**
     *
     * @return void
     */
    public function __construct()
    {
        Menu::opcionesMenu();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //$cursos = DB::table('tbl_cursos')->orderByRaw("RAND()")->get();    
        $cursos = DB::table('tbl_cursos')->get();

        $directores = DB::table('tbl_equipoilernus')
            ->where('str_tipo', 'director')
            ->orderBy('str_orden', 'asc')
            ->get();

        $gerentes = DB::table('tbl_equipoilernus')
            ->where('str_tipo', 'gerencial')
            ->where('str_orden', '>', 1)
            ->where('bol_eliminado', '=', 0)
            ->orderBy('str_orden', 'asc')->get();

        $ceos = DB::table('tbl_equipoilernus')
            ->where('str_tipo', 'gerencial')
            ->where('str_orden', '=', 1)
            ->orderBy('str_orden', 'asc')
            ->get();

        return \View::make('index', compact('cursos','directores','gerentes','ceos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function instructores()
    {

        $instructores = DB::table('tbl_instructores')->get();

        return \View::make('instructores', compact('instructores'));
    }  


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {

        $posts = DB::table('tbl_post as p')
        ->join('tbl_autores as a', 'p.lng_idautor', '=', 'a.id')
        ->where('p.str_estatus', '=' ,'activo')
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->select( 'p.id','p.str_tipo', 'p.created_at as fecha','p.str_titulo', 'p.str_post', 'p.str_post_resumen','p.str_video', 'p.str_audio', 'p.blb_img1', 'p.blb_img2', 'p.blb_img3', 'a.str_nombre as autor')

        ->orderBy('p.id', 'desc')
        ->get();   

        $posts_recientes = DB::table('tbl_post as p')
        ->join('tbl_autores as a', 'p.lng_idautor', '=', 'a.id')
        ->where('p.str_estatus', '=' ,'activo')
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->select( 'p.str_tipo', 'p.created_at as fecha','p.str_titulo', 'p.str_video', 'p.str_audio', 'p.blb_img1', 'p.blb_img2', 'p.blb_img3', 'a.str_nombre as autor')
        ->take(3)
        ->orderBy('p.id', 'desc')
        ->get();  

        $categorias = DB::table('tbl_categorias_post as cat')
        ->join('tbl_post as p', 'p.id', '=', 'cat.lng_idpost')
        ->where('p.str_estatus', '=' ,'activo')
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->get();     
dd($categorias);

       $totalCategorias = DB::select("select str_categoria, count(lng_idpost) as total FROM tbl_categorias_post join tbl_post as p on p.id = lng_idpost where p.str_estatus = 'activo' and p.bol_eliminado = 0 group by str_categoria order by total desc");
            
        
        //dd($totalCategorias);die;

        return \View::make('blog', compact('posts','posts_recientes','categorias','totalCategorias'));
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogPost($titulo)
    {

        $posts = DB::table('tbl_post as p')
        ->join('tbl_autores as a', 'p.lng_idautor', '=', 'a.id')
        ->where('p.str_titulo', '=', $titulo)
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->Where(function ($query) {
            $query->where('p.str_estatus', '=', 'activo');
        })

        ->select( 'p.id','p.str_tipo', 'p.created_at as fecha','p.str_titulo', 'p.str_post', 'p.str_post_resumen','p.str_video', 'p.str_audio', 'p.blb_img1', 'p.blb_img2', 'p.blb_img3', 'a.str_nombre as autor')

        ->orderBy('p.id', 'desc')
        ->get();   

        $posts_recientes = DB::table('tbl_post as p')
        ->join('tbl_autores as a', 'p.lng_idautor', '=', 'a.id')
        ->where('p.str_estatus', '=', 'activo')
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })
        ->select( 'p.str_tipo', 'p.created_at as fecha','p.str_titulo', 'p.str_video', 'p.str_audio', 'p.blb_img1', 'p.blb_img2', 'p.blb_img3', 'a.str_nombre as autor')
        ->take(3)
        ->orderBy('p.id', 'desc')
        ->get();  

        $categorias = DB::table('tbl_categorias_post as cat')
        ->join('tbl_post as p', 'p.id', '=', 'cat.lng_idpost')
        ->where('p.str_estatus', '=', 'activo')
        ->Where(function ($query) {
            $query->where('p.bol_eliminado', '=', 0);
        })        
        ->get();     


       $totalCategorias = DB::select("select str_categoria, count(lng_idpost) as total FROM tbl_categorias_post join tbl_post as p on p.id = lng_idpost where p.str_estatus = 'activo' and p.bol_eliminado = 0 group by str_categoria order by total desc");
            
        
        //dd($totalCategorias);die;

        return \View::make('blogPost', compact('posts','posts_recientes','categorias','totalCategorias'));
    }































    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactanos()
    {

        return \View::make('contactanos');
        
    }  


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function terminos()
    {

        return \View::make('terminos');
        
    }  


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function politicas()
    {

        return \View::make('politicas');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {

        return \View::make('faq');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mapa()
    {

        return \View::make('mapa');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trabaja()
    {

        return \View::make('trabaja');
        
    }                      


    public function enviar()
    {       
        
        if($_POST['cargo'] != 'otros') {

            $cargo = $_POST['cargo'];

        }else{

            $cargo = $_POST['otroCargo'];
        }


        if($_POST['sector'] != 'otros') {

            $sector = $_POST['sector'];

        }else{

            $sector = $_POST['otroSector'];
        } 

        $message = $_POST['message']."<br><br> Atte.: ".$_POST['name']."<br> Cargo: ".$cargo."<br> Sector: ".$sector."<br> Teléfono: ".$_POST['phone']."<br> Correo Electrónico: ".$_POST['email'];
                
        
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $cabeceras .= "Content-Type: image/png";    
        $cabeceras .= 'To: ilernus <ventas@ilernus.com>' . "\r\n";
        $cabeceras .= 'From: '.$_POST['name'].' <'.$_POST['email'].'>' . "\r\n";     
        
        if (!mail('ventas@ilernus.com', $_POST['asunto'].' - ilernus.com', $message, $cabeceras)) {
            //echo "Error: " . $mail->ErrorInfo;
            Session::flash('message','Error!, el mensaje no se pudo enviar');
        } else {
            Session::flash('message','Su mensaje fue enviado exitosamente!');
        }



        //return Redirect::to('/#contacto');*/

    /*

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";

        //$mail->Username = "socialmedia@monitorbg.com";
        //$mail->Password = "Monitor.2017";
        //$mail->SetFrom('socialmedia@monitorbg.com');

        $mail->Username = "atrellus@gmail.com";
        $mail->Password = "falcor90dbb";
        $mail->SetFrom('socialmedia@monitorbg.com');        

        $mail->AddReplyTo($_POST['email'], $_POST['name']);
        //$mail->addAddress("ventas@ilernus.com");
        $mail->addAddress("ezebarazarte@gmail.com");
        
        $mail->Subject = "ilernus.com - ". $_POST['asunto'];
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        $mail->msgHTML($message);
        $mail->AltBody = 'Contactanos';
        //$mail->addAttachment('images/imagen_adjunta.png');
         
        if (!$mail->send()) {
            //echo "Error: " . $mail->ErrorInfo;
            Session::flash('message','Error!'.$mail->ErrorInfo);
        } else {
            Session::flash('message','Su mensaje fue enviado exitosamente!');
        }


*/

        return Redirect::to('http://'.$_SERVER['SERVER_NAME'].'/Contáctanos#mensaje-enviado');

    } 


    public function enviarTrabaja()
    {  

        $archivoNombre = $_FILES['archivo']['name']; //nombre del archivo a ser enviado (sin la ruta, solo el nombre con la extensión, por ejemplo: imagen.jpg)
        $archivo = $_FILES['archivo']['tmp_name']; //ruta temporal del archivo a ser adjuntado (ubicación fisica del archivo subido en el servidor)
        $archivo = file_get_contents($archivo); //leeo del origen temporal el archivo y lo guardo como un string en la misma variable (piso la variable $archivo que antes contenía la ruta con el string del archivo)
        $archivo = chunk_split(base64_encode($archivo)); //codifico el string leido del archivo en base64 y la fragmento segun RFC 2045
        $uid = md5(uniqid(time())); //frabrico un ID único que usaré para el "boundary"
        
        $message = $_POST['message']. "\r\n"."Atte.: ".$_POST['name']."\r\n"." Teléfono: ".$_POST['phone']."\r\n"." Correo Electrónico: ".$_POST['email'];
                    
        $asuntoEmail = 'Archivo adjunto'; //asunto del email
        
        //cuerpo del email:
        $cuerpoMensaje = $message. "\r\n";

        //fin cuerpo del email.
        
        //cabecera del email (forma correcta de codificarla)
        $header =  'From: '.$_POST['name'].' <'.$_POST['email'].'>' . "\r\n"; 
        $header .= "Reply-To: " . $_POST['name'] . "\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
        //armado del mensaje y attachment
        $mensaje = "--" . $uid . "\r\n";
        $mensaje .= "Content-type:text/plain; charset=utf-8\r\n";
        $mensaje .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $mensaje .= $cuerpoMensaje . "\r\n\r\n";
        $mensaje .= "--" . $uid . "\r\n";
        $mensaje .= "Content-Type: application/octet-stream; name=\"" . $archivoNombre . "\"\r\n";
        $mensaje .= "Content-Transfer-Encoding: base64\r\n";
        $mensaje .= "Content-Disposition: attachment; filename=\"" . $archivoNombre . "\"\r\n\r\n";
        $mensaje .= $archivo . "\r\n\r\n";
        $mensaje .= "--" . $uid . "--";
            
        if (!mail('reclutamiento@monitorbg.com', 'Trabajar con iLernus - ilernus.com', $mensaje, $header)) {
            //echo "Error: " . $mail->ErrorInfo;
            Session::flash('message','Error!, el mensaje no se pudo enviar');
        } else {
            Session::flash('message','Su mensaje fue enviado exitosamente!');
        }

        return Redirect::to('http://'.$_SERVER['SERVER_NAME'].'/Trabaja-con-Nosotros#mensaje-enviado');

    }  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function aplicaciones() {

        return \View::make('aplicaciones');
        
    }  
}
