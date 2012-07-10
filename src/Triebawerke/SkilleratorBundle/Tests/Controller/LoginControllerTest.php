<?php

namespace Triebawerke\SkilleratorBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Session;

class LoginControllerTest extends WebTestCase
{


    public function testLoginForm()
    {

      $client = static::createClient();
      $crawler = $client->request('GET', '/login');
        $response = $client->getResponse()->getStatusCode();
        $this->assertTrue(200 === $response);

        $form = $crawler->selectButton('login')->form(array(
            '_username'  => 'admin',
            '_password'  => 'micha',
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // User should receive greeting on the welcome page
        $content = $crawler->filter('body:contains("Hi admin")');
        $this->assertTrue($content->count() > 0);

        // logout
        $logoutLink = $crawler->selectLink('logout')->link();
        $crawler = $client->click($logoutLink);

        $crawler = $client->followRedirect();
        $content = $crawler->filter('body:contains("Welcome to the Skillerator")');
        $this->assertTrue($content->count() > 0);
    }

}