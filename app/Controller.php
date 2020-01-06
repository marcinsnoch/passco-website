<?php

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View;
    }

    public function index()
    {
        $this->view->assign('title', 'Strona główna');
        $this->view->render('index');
    }

    public function katalogi($name)
    {
        $this->view->assign('title', 'Katalogi');
        $this->view->render('pages/catalogues/'.$name);
    }

    public function partnerzy()
    {
        $this->view->assign('title', 'Nasi Partnerzy');
        $this->view->render('pages/partners');
    }

    public function kontakt()
    {
        $from_name = isset($_POST['contact_name']) ? $_POST['contact_name'] : '';
        $from_email = isset($_POST['email_address']) ? $_POST['email_address'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';
        $to = EMAIL;


        if (isset($_POST['sendmessage'])) {
            if ($from_name != '' and $from_email !== '' and $message !== '') {

                if (verify_email($from_email) === true) {
                    if (send_email($to, $message, $from_name, $from_email)) {
                        $_SESSION['flash_msg'] = '<strong>Gratulacje!</strong><br> Twój e-mail został wysłany.';
                    } else {
                        $_SESSION['flash_msg'] = 'wystąpił nie znany błąd';
                    }
                } else {
                    $_SESSION['flash_msg'] = '<strong>Błąd!</strong><br> Podany e-mail jest nie prawidłowy.';
                }
            } else {
                $_SESSION['flash_msg'] = '<strong>Błąd!</strong><br> Musisz wypełnić wszystkie pola.';
            }
        }
        $this->view->assign('title', 'Kontakt');
        $this->view->render('pages/contact');
        unset($_SESSION['flash_msg']);
    }

    // error page
    public function error()
    {
        $this->view->error();
    }

}