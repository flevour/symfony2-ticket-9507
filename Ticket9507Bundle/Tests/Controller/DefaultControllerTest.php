<?php
namespace Tickets\TicketsTicket9507Bundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
      $rand = "test" . rand();
        $client = $this->createClient();

        $crawler = $client->request('GET', '/ticket/9507/set/' . $rand);
        $crawler = $client->followRedirect();

        $this->assertTrue($crawler->filter(sprintf('html:contains("%s")', $rand))->count() > 0);
    }
}

