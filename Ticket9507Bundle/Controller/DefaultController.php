<?php

namespace Tickets\Ticket9507Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function indexAction($cookie)
    {
      // set cookie
      $session = $this->get('request')->getSession();

      // store an attribute for reuse during a later user request
      $session->set('foo', $cookie);
      // redirect to landing
      return new RedirectResponse($this->generateUrl('ticket_9507_landing'));
    }

    public function landingAction()
    {
      $session = $this->get('request')->getSession();
      // get cookie
      $cookie = $session->get('foo');
      return $this->render('TicketsTicket9507Bundle:Default:landing.html.twig', array("cookie" => $cookie));
    }
}
