<?php

namespace Anexa\CooperadoraBundle\Controller;

use Anexa\CooperadoraBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UserController extends Controller
{
    public function indexAction(){
      $em = $this->getDoctrine()->getManager();

      $usuarios = $em->getRepository('AnexaCooperadoraBundle:User')->findByBorrado(false);

      return $this->render('AnexaCooperadoraBundle:Usuario:index.html.twig', array(
          'usuarios' => $usuarios,
          'menu' => "usuario"
      ));

    }

    public function newAction(Request $request, User $user=null)
    {
        if (!isset($user)) {
          $user= new User();
        }
        $form = $this->createForm("Anexa\CooperadoraBundle\Form\UserType", $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('usuario_index');
        }

        return $this->render('AnexaCooperadoraBundle:Usuario:agregar.html.twig', array(
            'form' => $form->createView(),
            'menu' => "usuario"
        ));
    }

    public function showAction(User $user, $visitors = null)
    {
        return $this->render('AnexaCooperadoraBundle:Usuario:ver.html.twig', array(
            'usuario' => $user,
            'menu' => 'usuario'
        ));
    }

    public function editAction(Request $request, User $user)
    {
        $error = null;
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $editForm = $this->createForm("Anexa\CooperadoraBundle\Form\UserType", $user);
        $editForm->setData($user);
        $editForm->handleRequest($request);


        if ($editForm->isValid() && $editForm->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $em = $this->getDoctrine()->getManager();

            $userManager->updateUser($user);
            return $this->redirectToRoute('usuario_index');
        }

        return $this->render('AnexaCooperadoraBundle:Usuario:editar.html.twig', array(
          'edit_form' => $editForm->createView(),
          'edit_user' => $user,
          'menu' => "usuario"
        ));
    }


    public function loginAction(Request $request)
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
          return $this->redirectToRoute('anexa_cooperadora_backend');
        }

        /** @var $session \Symfony\Component\HttpFoundation\Session\Session */
        $session = $request->getSession();
        if (class_exists('\Symfony\Component\Security\Core\Security')) {
            $authErrorKey = Security::AUTHENTICATION_ERROR;
            $lastUsernameKey = Security::LAST_USERNAME;
        } else {
            // BC for SF < 2.6
            $authErrorKey = SecurityContextInterface::AUTHENTICATION_ERROR;
            $lastUsernameKey = SecurityContextInterface::LAST_USERNAME;
        }

        // get the error if any (works with forward and redirect -- see below)
        if ($request->attributes->has($authErrorKey)) {
            $error = $request->attributes->get($authErrorKey);
        } elseif (null !== $session && $session->has($authErrorKey)) {
            $error = $session->get($authErrorKey);
            $session->remove($authErrorKey);
        } else {
            $error = null;
        }

        if (!$error instanceof AuthenticationException) {
            $error = null; // The value does not come from the security component.
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);

        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            // BC for SF < 2.4
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }

        return $this->renderLogin(array(
            'last_username' => $lastUsername,
            'error' => $error,
            'csrf_token' => $csrfToken,
        ));
    }

    /**
     * Renders the login template with the given parameters. Overwrite this function in
     * an extended controller to provide additional data for the login template.
     *
     * @param array $data
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function renderLogin(array $data)
    {
        return $this->render('AnexaCooperadoraBundle:frontend:login.html.twig', $data);
    }

    public function checkAction()
    {
      return $this->redirectToRoute('anexa_cooperadora_backend');
    }

    public function logoutAction()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }

    /**
     * @param string $action
     * @param string $value
     */
    protected function setFlash($action, $value)
    {
        $this->container->get('session')->getFlashBag()->set($action, $value);
    }

    protected function getEngine()
    {
        return $this->container->getParameter('fos_user.template.engine');
    }
}
