<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Administrador;
use CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Usuario;

class AdministratorController extends Controller {

    public function loginAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $data = array('title' => 'Inicio');
                    return $this->render('CELiceoParaisoBundle:Administrator:administration_general.html.twig', $data);
                case 'area':
                    return $this->render('CELiceoParaisoBundle:Adm_Area:administration_area.html.twig', $data);
                case 'departament':
                    return $this->render('CELiceoParaisoBundle:Adm_Dep:administration_departament.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function changePassFormAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            return $this->render('CELiceoParaisoBundle:Administrator:changePassword.html.twig', array('passOld'=>$_SESSION['pass']));
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }
    
    public function checkUserAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $data = array('title' => 'Inicio');
                    return $this->render('CELiceoParaisoBundle:Administrator:administration_general.html.twig', $data);
                case 'area':
                    return $this->render('CELiceoParaisoBundle:Adm_Area:administration_area.html.twig', $data);
                case 'departament':
                    return $this->render('CELiceoParaisoBundle:Adm_Dep:administration_departament.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            $username = $_POST['form-username'];
            $pass = $_POST['form-password'];

            $data = array('usuario' => $username, 'clave' => $pass);

            $em = $this->getDoctrine()->getEntityManager();
            $users = $em->getRepository('CELiceoParaisoBundle:Usuario')->findBy($data);
            $user = current($users);

            if (isset($user)) {
                #guardar los datos del usuario
                $_SESSION['user'] = $username;
                $_SESSION['pass'] = $pass;
                $_SESSION['administrator'] = $user->getAdministrador()->getCodigo();
                if(substr($user->getClave(), -4) === 'T3MP'){
                    return $this->render('CELiceoParaisoBundle:Administrator:changePassword.html.twig', array('passOld'=>$_SESSION['pass']));
                }

                $type = $this->getTypeAdministrator($user->getAdministrador()->getCodigo());
                switch ($type) {
                    case 'general':
                        $data = array('title' => 'Inicio');
                        return $this->render('CELiceoParaisoBundle:Administrator:administration_general.html.twig', $data);
                    case 'area':
                        return $this->render('CELiceoParaisoBundle:Adm_Area:administration_area.html.twig', $data);
                    case 'departament':
                        return $this->render('CELiceoParaisoBundle:Adm_Dep:administration_departament.html.twig', $data);
                    default:
                        return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
                }
            }//el usuario existe

            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig', array('alert' => 'ERROR'));
        }//la sesión está cerrada
    }
    
    public function changePassAction() {
        session_start();
        $passOld = $_POST['passOld'];
        $newPass = $_POST['passNew'];
        $confirmPass = $_POST['confirmPass'];

        if($passOld === $_SESSION['pass']){
            if($newPass === $confirmPass){
                $_SESSION['pass'] = $newPass;
                $em = $this->getDoctrine()->getEntityManager();
                $users = $em->getRepository('CELiceoParaisoBundle:Usuario')->findBy(array('usuario'=>$_SESSION['user']));
                $user = current($users);
                $user->setClave($newPass);
                $em->persist($user);
                $em->flush();
                $_SESSION['user'] = null;
                session_destroy();
                return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig', array('alert'=>'success'));
            }else{
                return $this->render('CELiceoParaisoBundle:Administrator:changePassword.html.twig', array('alert'=>'La nueva contraseña no es la misma', 'passOld'=>$_SESSION['pass']));
            }
        }else{
            return $this->render('CELiceoParaisoBundle:Administrator:changePassword.html.twig', array('alert'=>'La contraseña temporal no es correcta', 'passOld'=>$_SESSION['pass']));
        }
    }

    public function homeAdminAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $data = array('title' => 'Inicio');
                    return $this->render('CELiceoParaisoBundle:Administrator:administration_general.html.twig', $data);
                case 'area':
                    return $this->render('CELiceoParaisoBundle:Adm_Area:administration_area.html.twig', $data);
                case 'departament':
                    return $this->render('CELiceoParaisoBundle:Adm_Dep:administration_departament.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function institutionAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $institution = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
                    $data = array('title' => 'Liceo Paraíso', 'institution' => current($institution));
                    return $this->render('CELiceoParaisoBundle:Administrator:institution.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function updateHistoryAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $institutions = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
                    $institution = current($institutions);
                    $institution->setHistoria($_POST['history']);
                    $em->flush();
                    $data = array('title' => 'Liceo Paraíso', 'institution' => $institution, 'alert' => 'success');
                    return $this->render('CELiceoParaisoBundle:Administrator:institution.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function updateVisionAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $institutions = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
                    $institution = current($institutions);
                    $institution->setVision($_POST['vision']);
                    $em->flush();
                    $data = array('title' => 'Liceo Paraíso', 'institution' => $institution, 'alert' => 'success');
                    return $this->render('CELiceoParaisoBundle:Administrator:institution.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function updateMisionAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $institutions = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
                    $institution = current($institutions);
                    $institution->setMision($_POST['mision']);
                    $em->flush();
                    $data = array('title' => 'Liceo Paraíso', 'institution' => $institution, 'alert' => 'success');
                    return $this->render('CELiceoParaisoBundle:Administrator:institution.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function updateManagementAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $institutions = $em->getRepository('CELiceoParaisoBundle:Institucion')->findBy(array('nombre' => 'Liceo de Paraíso'));
                    $institution = current($institutions);
                    $institution->setEncargados($_POST['managers']);
                    $institution->setTelefono($_POST['telephone']);
                    $em->flush();
                    $data = array('title' => 'Liceo Paraíso', 'institution' => $institution, 'alert' => 'success');
                    return $this->render('CELiceoParaisoBundle:Administrator:institution.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function areaNocturnAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $area = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo'=>1));
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $data = '';
                    if($this->isAdministratorOfArea($area, $_SESSION['administrator'])){
                        $data = array('title' => 'Área Nocturna', 'area' => $area, 'teachers'=>$teachers, 'administrator'=>'true');
                    }else{
                        $data = array('title' => 'Área Nocturna', 'area' => $area, 'teachers'=>$teachers);
                    }
                    return $this->render('CELiceoParaisoBundle:Administrator:section.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }
    
    public function planNationalAction() {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $area = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo'=>2));
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    $data = '';
                    if($this->isAdministratorOfArea($area, $_SESSION['administrator'])){
                        $data = array('title' => 'Plan Nacional', 'area' => $area, 'teachers'=>$teachers, 'administrator'=>'true');
                    }else{
                        $data = array('title' => 'Plan Nacional', 'area' => $area, 'teachers'=>$teachers);
                    }
                    return $this->render('CELiceoParaisoBundle:Administrator:section.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }
    
    public function responsableAreaAction($code) {
        session_start();
        if (isset($_SESSION['user'])) {
            $type = $this->getTypeAdministrator($_SESSION['administrator']);
            switch ($type) {
                case 'general':
                    $em = $this->getDoctrine()->getEntityManager();
                    $area = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo'=>$code));
                    $teacher = $em->getRepository('CELiceoParaisoBundle:Personal')->find(array('codigo'=>$_POST['codeTeacher']));
                    $oldAdministrator = $area->getAdministrador();
                    
                    #Almaceno el correo del profesor
                    $teacher->setCorreo($_POST['emailTeacher']);
                    $em->flush();
                    
                    $this->setResponsableArea($area, $teacher, $_POST['telephoneTeacher']);
                    $this->removeAdministrator($oldAdministrator, $oldAdministrator->getCodigoPersonal());
                    $teachers = $em->getRepository('CELiceoParaisoBundle:Personal')->findAll();
                    if($code == 1)
                        $data = array('title' => 'Área Nocturna', 'area' => $area, 'teachers'=>$teachers, 'alert'=>'success');
                    else
                        $data = array('title' => 'Plan Nacional', 'area' => $area, 'teachers'=>$teachers, 'alert'=>'success');
                    return $this->render('CELiceoParaisoBundle:Administrator:section.html.twig', $data);
                default:
                    return $this->render('CELiceoParaisoBundle:Administrator:error.html.twig');
            }
        }//existe sesión abierta
        else {
            return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
        }//la sesión está cerrada
    }

    public function logoutAction() {
        session_start();
        //se elimina la sesión
        $_SESSION['user'] = null;
        session_destroy();

        return $this->render('CELiceoParaisoBundle:Administrator:login.html.twig');
    }/* cierra la sesión del usuario */

    private function getTypeAdministrator($administrator) {
        $em = $this->getDoctrine()->getEntityManager();

        $typeAdministration = "departament";
        $areas = $em->getRepository('CELiceoParaisoBundle:Area')->findBy(array('administrador' => $administrator));
        foreach($areas as $area){
            if ($area->getCodigo() === 3) {
                $typeAdministration = "general";
                return $typeAdministration;
            } else {
                $typeAdministration = "area";
            }
        }
        return $typeAdministration;
    }
    
    private function isAdministratorOfArea($area, $administrator){
        if($area->getAdministrador()->getCodigo() === $administrator)
            return true;
        return false;
    }
    
    private function setResponsableArea($area, $teacher, $telephone){
        $em = $this->getDoctrine()->getEntityManager();
        $areaTemp = $em->getRepository('CELiceoParaisoBundle:Area')->find(array('codigo' => $area->getCodigo(), 'nombre'=>$area->getNombre()));
        $administrators = $em->getRepository('CELiceoParaisoBundle:Administrador')->findBy(array('codigoPersonal' => $teacher));
        $administrator = current($administrators);
        
        if($administrator != null){
            $areaTemp->setAdministrador($administrator);
            $em->flush();
        }//el profesor es administrador
        else{
            $administrator = new Administrador();
            $administrator->setTelefono($telephone);
            $administrator->setCodigoPersonal($teacher);
            $em->persist($administrator);
            
            $areaTemp->setAdministrador($administrator);
            
            $em->flush();
            
            #se crea un nuevo usuario
            $this->createNewUser($teacher, $administrator);
        }//el administrador no existe
        
        #Enviar correo sobre la nueva administración
        $user = $em->getRepository('CELiceoParaisoBundle:Usuario')->findBy(array('administrador'=>$administrator));
        $this->sendEmailAddPosition(current($user), $teacher);
    }
    
    private function removeAdministrator($administrator, $teacher){
        $em = $this->getDoctrine()->getEntityManager();
        $areas = $em->getRepository('CELiceoParaisoBundle:Area')->findAll();
        foreach ($areas as $areaTemp){
            if($areaTemp->getAdministrador() === $administrator)
                return false;
        }//reviso que el administrador no sea administrador de otra area
        $departments = $em->getRepository('CELiceoParaisoBundle:Departamento')->findAll();
        foreach ($departments as $departmentTemp){
            if($departmentTemp->getAdministrador() === $administrator)
                return false;
        }//reviso que el administrador no sea administrador de otro departamento
        
        //si llega hasta aquí no es administrador de otra área ni otro departamento por lo que se debe eliminar de
        //los usuarios y la tabla de administradores
        $users = $em->getRepository('CELiceoParaisoBundle:Usuario')->findBy(array('administrador'=>$administrator));
        $user = current($users);
        $em->remove($user);
        $em->flush();
        $em->remove($administrator);
        $em->flush();   
        
        #validar que el usuario tiene correo
        if($teacher->getCorreo() != null){
            //Enviar un correo para avisar que ha sido removido del cargo
            $this->sendEmailRemovePosition($administrator->getCodigoPersonal());
        }
    }
       
    private function generateTempPass(){
        $ABC = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longitudABC = strlen($ABC);
        $passTemp = "";

        $posLetraAleatoria = rand(0, $longitudABC - 1);
        $passTemp .= substr($ABC, $posLetraAleatoria, 1);
        for ($i = 0; $i <= 5; $i++) {
            $pos = rand(1, 100);
            $passTemp .= $pos;
        }//se genera una contraseña
        
        $passTemp .= 'T3MP';
        
        return $passTemp;
    }   
    
    private function sendEmailRemovePosition($teacher) {
        $datos = "Estimado docente, usted ha sido removido como administrador del sistema CELIPA Admin del colegio Liceo de "
                . "Paraíso, por lo cual no podrá ingresar como administrador a dicho sistema."
                . "\n\nSi tiene alguna duda por favor consulte con el adminitrador del sitio."
                . "Nota: No responda a este mensaje.\n\n\n"
                . "Atentamente;\n"
                . "Administración CELIPA Admin\n"
                . "Paraíso, Cartago";

        $message = \Swift_Message::newInstance('Mensaje Administración CELIPA Admin')
                ->setSubject('CELIPA Admin')
                ->setFrom('ce.liceo.paraiso@gmail.com')
                ->setTo($teacher->getCorreo())
                ->setBody($datos); 
        $this->get('mailer')->send($message);
    } 
    
    private function sendEmailAddPosition($user, $teacher){
        $datos = "Estimado docente, usted ha sido registrado en el Sistema CELIPA Admin, del Liceo de Paraíso,"
                . " por lo cual a través de este correo se le envía el usuario y la contraseña temporal que deberá "
                . "utilizar para ingresar en el sistema. \n"
                . "Recuerde que la contraseña es temporal por lo que deberá cambiarla la primera vez que inicie sesión "
                . " a su respectiva contraseña personal. Muchas gracias.\n\n\n"
                . "Usuario: " . $user->getUsuario() . "\n"
                . "Contraseña: " . $user->getClave() . "\n"
                . "Nota: Por su seguridad no mantenga esta información al acceso de terceras personas.\n\n\n"
                . "Atentamente;\n"
                . "Administración del Sistema CELIPA Admin\n"
                . "Paraíso, Cartago";
        
        $message = \Swift_Message::newInstance('Mensaje Administración CELIPA Admin')
                ->setSubject('CELIPA Admin')
                ->setFrom('ce.liceo.paraiso@gmail.com')
                ->setTo($teacher->getCorreo())
                ->setBody($datos);
        $this->get('mailer')->send($message);
    }
    
    private function createNewUser($teacher, $administrator){
        $em = $this->getDoctrine()->getEntityManager();
        $user = new Usuario();
        
        $username = strtolower(strstr($teacher->getNombre(), " ", true)) . "." . strtolower(strstr($teacher->getApellidos(), " ", true));
        $pass = $this->generateTempPass();
        $user->setAdministrador($administrator);
        $user->setUsuario($username);
        $user->setClave($pass);
        $em->persist($user);
        $em->flush();
    }
}/*ADMINISTRATOR CONTROLLER*/
