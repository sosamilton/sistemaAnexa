<?php

namespace AppBundle\Controller\Backend;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;
use AppBundle\Entity\UserConfiguration;
use AppBundle\Form\UserType;

/**
 * User controller.
 *
 * @Route("/user")
 */
class UserController extends Controller
{
    
    /**
     * Lists all User entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        // $users = $em->getRepository('AppBundle:User')->findAll();
        $repository = $em->getRepository('AppBundle:User');
        $query = $repository->createQueryBuilder('u')
                            ->where('u.roles not like :role1 and u.roles not like :role2')
                            ->setParameter('role1', 'a:0:{}')
                            ->setParameter('role2', '%ROLE_USER%');        

        $users = $query->getQuery()->getResult();

        return $this->render('backend/user/index.html.twig', array(
            'users' => $users,
            'visitors' => null
        ));
    }
    
    /**
     * Lists all User visitors entities.
     *
     * @Route("/visitors", name="user_visitors")
     * @Method("GET")
     */
    public function indexVisitorsAction()
    {
        $em = $this->getDoctrine()->getManager();

        // $users = $em->getRepository('AppBundle:User')->findAll();
        $repository = $em->getRepository('AppBundle:User');
        $query = $repository->createQueryBuilder('u')
                            ->where('u.roles like :role1 or u.roles like :role2')
                            ->setParameter('role1', 'a:0:{}')
                            ->setParameter('role2', '%ROLE_USER%');        

        $users = $query->getQuery()->getResult();

        return $this->render('backend/user/index.html.twig', array(
            'users' => $users,
            'visitors' => 1
        ));
    }

    /**
     * Creates a new User entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        
        $user = $userManager->createUser();
        $user->setEnabled(true);

        $form = $formFactory->createForm();
        //$form = $this->createForm('AppBundle\Form\UserType', $user);        
        $form->setData($user);

        $form->handleRequest($request);
        
        $error = null;

        if ($form->isValid()) {

            if ($form['avatar']->getData() AND $error == NULL) {
                $error = $this->get('app.uploader')->imageValidate($form['avatar']->getData());
                if ($error == NULL) {
                    $newAvatarName = $this->get('app.uploader')->imageUpload($form['avatar']->getData(), 'avatars', array('width' => 80, 'height' => 80));
                    $user->setAvatar($newAvatarName);
                }
            }

            if ($error == NULL){
                //$event = new FormEvent($form, $request);
                //$dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

                $userManager->updateUser($user);

                return $this->redirectToRoute('user_show', array('id' => $user->getId()));
                //return $response;
            }
        }


        return $this->render('backend/user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'error' => $error
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {
        $error = null;
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $editForm = $formFactory->createForm(array('edit_roles' => true));
        $editForm->setData($user);
        $editForm->handleRequest($request);
        $deleteForm = $this->createDeleteForm($user);

        if ($editForm->isValid() && $editForm->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');
            
            if ($editForm['avatar']->getData() AND $error == NULL) {
                $error = $this->get('app.uploader')->imageValidate($editForm['avatar']->getData());
                if ($error == NULL) {
                    $newAvatarName = $this->get('app.uploader')->imageUpload($editForm['avatar']->getData(), 'avatars', array('width' => 80, 'height' => 80));
                    $user->setAvatar($newAvatarName);
                }
            }

            $em = $this->getDoctrine()->getManager(); 

            if (!$user->getConfigurations()) {
                $userConfiguration = new UserConfiguration();
                $userConfiguration->setUser($user);
                $user->setConfigurations($userConfiguration);
                $em->persist($userConfiguration);
                $em->flush();
            }

            $userManager->updateUser($user);
            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        /*foreach($editForm['roles']->getData() as $key => $value){
            print_r($value);
            $user->addRole($value);
        }*/

        return $this->render('backend/user/edit.html.twig', array(
            'edit_user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'error' => $error,
        ));
    }
    
    /**
     * Finds and displays a User entity.
     *
     * @Route("/{id}/{visitors}", defaults={"visitors": 0}, name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user, $visitors = null)
    {
        $deleteForm = $this->createDeleteForm($user);
        
        return $this->render('backend/user/show.html.twig', array(
            'show_user' => $user,
            'delete_form' => $deleteForm->createView(),
            'visitors' => $visitors
        ));
    }

    /**
     * Deletes a User entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager(); 

            if ($user->isLocked()){
                $user->setLocked(FALSE);
            }else{
                $user->setLocked(TRUE);
            }
            
            //$em->remove($user);
            $em->persist($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a User entity.
     *
     * @param User $user The User entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }    
}
