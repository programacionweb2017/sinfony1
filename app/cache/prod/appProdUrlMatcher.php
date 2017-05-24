<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // curso_main_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_main_homepage')), array (  '_controller' => 'Curso\\MainBundle\\Controller\\DefaultController::indexAction',));
        }

        // curso_main_help
        if (0 === strpos($pathinfo, '/ayuda') && preg_match('#^/ayuda/(?P<tema>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_main_help')), array (  '_controller' => 'Curso\\MainBundle\\Controller\\DefaultController::ayudaAction',));
        }

        // curso_main_nosotros
        if (0 === strpos($pathinfo, '/nosotros') && preg_match('#^/nosotros(?:/(?P<nombre>[^/]++)(?:/(?P<apellidos>[^/]++)(?:/(?P<nacimiento>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_main_nosotros')), array (  '_controller' => 'Curso\\MainBundle\\Controller\\InfoController::nosotrosAction',  'nombre' => 'Jorge',  'apellidos' => 'García',  'nacimiento' => 'Guanajuato',));
        }

        // curso_main_info
        if (0 === strpos($pathinfo, '/info') && preg_match('#^/info(?:/(?P<pagina>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_main_info')), array (  '_controller' => 'Curso\\MainBundle\\Controller\\InfoController::pagina_estaticaAction',  'pagina' => 'quien',));
        }

        if (0 === strpos($pathinfo, '/articulo')) {
            // curso_main_art
            if ($pathinfo === '/articulos') {
                return array (  '_controller' => 'Curso\\MainBundle\\Controller\\DefaultController::articulosAction',  '_route' => 'curso_main_art',);
            }

            // curso_main_arts
            if (preg_match('#^/articulo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_main_arts')), array (  '_controller' => 'Curso\\MainBundle\\Controller\\DefaultController::articuloAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
