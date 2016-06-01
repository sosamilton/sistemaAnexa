<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // anexa_cooperadora_backend
        if ($pathinfo === '/backend') {
            return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\BackendController::indexAction',  '_route' => 'anexa_cooperadora_backend',);
        }

        // inicio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'inicio');
            }

            return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\IndexController::indexAction',  '_route' => 'inicio',);
        }

        // sendMail
        if ($pathinfo === '/sendMail') {
            return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\IndexController::sendMailAction',  '_route' => 'sendMail',);
        }

        if (0 === strpos($pathinfo, '/backend')) {
            if (0 === strpos($pathinfo, '/backend/alumno')) {
                // alumno_index
                if (rtrim($pathinfo, '/') === '/backend/alumno') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_alumno_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'alumno_index');
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\AlumnoController::indexAction',  '_route' => 'alumno_index',);
                }
                not_alumno_index:

                // alumno_show
                if (preg_match('#^/backend/alumno/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_alumno_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno_show')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\AlumnoController::showAction',));
                }
                not_alumno_show:

                // alumno_new
                if ($pathinfo === '/backend/alumno/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_alumno_new;
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\AlumnoController::newAction',  '_route' => 'alumno_new',);
                }
                not_alumno_new:

                // alumno_edit
                if (preg_match('#^/backend/alumno/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_alumno_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno_edit')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\AlumnoController::editAction',));
                }
                not_alumno_edit:

                // alumno_delete
                if (preg_match('#^/backend/alumno/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_alumno_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno_delete')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\AlumnoController::deleteAction',));
                }
                not_alumno_delete:

            }

            if (0 === strpos($pathinfo, '/backend/cuota')) {
                // cuota_index
                if (rtrim($pathinfo, '/') === '/backend/cuota') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cuota_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cuota_index');
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\CuotaController::indexAction',  '_route' => 'cuota_index',);
                }
                not_cuota_index:

                // cuota_show
                if (preg_match('#^/backend/cuota/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cuota_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuota_show')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\CuotaController::showAction',));
                }
                not_cuota_show:

                // cuota_new
                if ($pathinfo === '/backend/cuota/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cuota_new;
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\CuotaController::newAction',  '_route' => 'cuota_new',);
                }
                not_cuota_new:

                // cuota_edit
                if (preg_match('#^/backend/cuota/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cuota_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuota_edit')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\CuotaController::editAction',));
                }
                not_cuota_edit:

                // cuota_delete
                if (preg_match('#^/backend/cuota/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cuota_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cuota_delete')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\CuotaController::deleteAction',));
                }
                not_cuota_delete:

            }

            if (0 === strpos($pathinfo, '/backend/responsable')) {
                // responsable_index
                if (rtrim($pathinfo, '/') === '/backend/responsable') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_responsable_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'responsable_index');
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ResponsableController::indexAction',  '_route' => 'responsable_index',);
                }
                not_responsable_index:

                // responsable_show
                if (preg_match('#^/backend/responsable/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_responsable_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_show')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ResponsableController::showAction',));
                }
                not_responsable_show:

                // responsable_new
                if ($pathinfo === '/backend/responsable/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_responsable_new;
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ResponsableController::newAction',  '_route' => 'responsable_new',);
                }
                not_responsable_new:

                // responsable_edit
                if (preg_match('#^/backend/responsable/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_responsable_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_edit')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ResponsableController::editAction',));
                }
                not_responsable_edit:

                // responsable_delete
                if (preg_match('#^/backend/responsable/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_responsable_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_delete')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ResponsableController::deleteAction',));
                }
                not_responsable_delete:

            }

            if (0 === strpos($pathinfo, '/backend/pago')) {
                // pago_index
                if (rtrim($pathinfo, '/') === '/backend/pago') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pago_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pago_index');
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\PagoController::indexAction',  '_route' => 'pago_index',);
                }
                not_pago_index:

                // pago_mostrar
                if (preg_match('#^/backend/pago/(?P<id>[^/]++)/listarPagos$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pago_mostrar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pago_mostrar')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\PagoController::verPagosAction',));
                }
                not_pago_mostrar:

                // pago_seleccionado
                if ($pathinfo === '/backend/pago/pago_seleccionado') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pago_seleccionado;
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\PagoController::pagoSeleccionadoAction',  '_route' => 'pago_seleccionado',);
                }
                not_pago_seleccionado:

                // pago_new
                if ($pathinfo === '/backend/pago/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pago_new;
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\PagoController::newAction',  '_route' => 'pago_new',);
                }
                not_pago_new:

                // pago_edit
                if (preg_match('#^/backend/pago/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pago_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pago_edit')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\PagoController::editAction',));
                }
                not_pago_edit:

                // pago_delete
                if (preg_match('#^/backend/pago/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pago_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pago_delete')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\PagoController::deleteAction',));
                }
                not_pago_delete:

            }

            if (0 === strpos($pathinfo, '/backend/listado')) {
                // listado_index
                if (rtrim($pathinfo, '/') === '/backend/listado') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_listado_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'listado_index');
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ListadoController::indexAction',  '_route' => 'listado_index',);
                }
                not_listado_index:

                // listado_matriculados
                if ($pathinfo === '/backend/listado/matriculasPagas') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_listado_matriculados;
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ListadoController::matriculadosAction',  '_route' => 'listado_matriculados',);
                }
                not_listado_matriculados:

                if (0 === strpos($pathinfo, '/backend/listado/cuotas')) {
                    // listado_pago_becado
                    if ($pathinfo === '/backend/listado/cuotasPagasyBecadas') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_listado_pago_becado;
                        }

                        return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ListadoController::cuotasPagasAction',  '_route' => 'listado_pago_becado',);
                    }
                    not_listado_pago_becado:

                    // listado_cuotas_impagas
                    if ($pathinfo === '/backend/listado/cuotasNoPagas') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_listado_cuotas_impagas;
                        }

                        return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ListadoController::cuotasNoPagasAction',  '_route' => 'listado_cuotas_impagas',);
                    }
                    not_listado_cuotas_impagas:

                }

            }

            if (0 === strpos($pathinfo, '/backend/configuracion')) {
                // configuracion_index
                if (rtrim($pathinfo, '/') === '/backend/configuracion') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_configuracion_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'configuracion_index');
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ConfiguracionController::indexAction',  '_route' => 'configuracion_index',);
                }
                not_configuracion_index:

                // configuracion_show
                if (preg_match('#^/backend/configuracion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_configuracion_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuracion_show')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ConfiguracionController::showAction',));
                }
                not_configuracion_show:

                // configuracion_new
                if ($pathinfo === '/backend/configuracion/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_configuracion_new;
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ConfiguracionController::newAction',  '_route' => 'configuracion_new',);
                }
                not_configuracion_new:

                // configuracion_editar
                if ($pathinfo === '/backend/configuracion/edit') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_configuracion_editar;
                    }

                    return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ConfiguracionController::editAction',  '_route' => 'configuracion_editar',);
                }
                not_configuracion_editar:

                // configuracion_delete
                if (preg_match('#^/backend/configuracion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_configuracion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuracion_delete')), array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ConfiguracionController::deleteAction',));
                }
                not_configuracion_delete:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // user
        if ($pathinfo === '/Usuarios') {
            return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\SecurityController::indexAction',  '_route' => 'user',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // paginacion
        if ($pathinfo === '/paginacion') {
            return array (  '_controller' => 'Anexa\\CooperadoraBundle\\Controller\\ConfiguracionController::paginacionAction',  '_route' => 'paginacion',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
