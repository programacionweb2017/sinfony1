<?php

namespace Curso\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CursoMainBundle:Default:index.html.twig', array('name' => $name));
    }
    
     public function ayudaAction($tema)
    {
         return $this->render("CursoMainBundle:Default:ayuda.html.twig", array("tema" => $tema));
       //return new Response("<html><body>Esta es la ayuda del tema ".$tema."</body></html>");
    }
      public function articulosAction()
    {
       //--simulamos obtener los datos de la base de datos
          $articulos= array(
              array('id' => 1, 'title' => 'Articulo numero 1', 'created' => '2011-01-01'),
              array('id' => 2, 'title' => 'Articulo numero 2', 'created' => '2011-01-01'),
              array('id' => 3, 'title' => 'Articulo numero 3', 'created' => '2011-01-01'),
          );
          return $this->render("CursoMainBundle:Default:articulos.html.twig", array('articulos' => $articulos));
    }
    
    public function articuloAction($id){
       //--simulamos obtener los datos de la base de datos
          $articulos= array(
              array('id' => 1, 'title' => 'Articulo numero 1', 'created' => '2011-01-01'),
              array('id' => 2, 'title' => 'Articulo numero 2', 'created' => '2011-01-01'),
              array('id' => 3, 'title' => 'Articulo numero 3', 'created' => '2011-01-01'),
          );
          
    //-- Buscamos dentro del array el ID solicitado
          $articuloSeleccionado=null;
          foreach($articulos as $articulo)
          {
              if($articulo['id']==$id){
                  $articuloSeleccionado= $articulo;
                  break;
              }
          }
          //-- Invocamos a nuestra nueva plantilla, pasando los datos
    return $this->render("CursoMainBundle:Default:articulo.html.twig", array('articulo' => $articuloSeleccionado));
 }
    }

