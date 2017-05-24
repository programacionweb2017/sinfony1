<?php
namespace Curso\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class InfoController extends Controller
{
     public function nosotrosAction($nombre,$apellidos,$nacimiento)
    {
         return new Response ("<html><body>Mi página de info propia; mi nombre es:".$nombre."".$apellidos."</body></html>");
    }
    
     public function pagina_estaticaAction($pagina)
    {
         return  $this->render("CursoMainBundle:Default:".$pagina.".html.twig", array()); 
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

