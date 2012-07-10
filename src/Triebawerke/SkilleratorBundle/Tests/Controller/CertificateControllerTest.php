<?php

namespace Triebawerke\SkilleratorBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CertificateControllerTest extends WebTestCase
{

  private $client = null;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
      $this->client = static::createClient(array(),
                              array(
                                'PHP_AUTH_USER' => 'admin',
                                'PHP_AUTH_PW' => 'micha',
                              ));
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {
     unset($this->client);
  }
    public function testCertificateNewForm()
    {
        $crawler = $this->client->request('GET', '/certificate/new');
        $response = $this->client->getResponse()->getStatusCode();
        $this->assertTrue(200 === $response);

        // fill in form
        $form = $crawler->selectButton('Create')->form(array(
            'triebawerke_skilleratorbundle_certificatetype[name]'  => 'test',
            'triebawerke_skilleratorbundle_certificatetype[description]'  => 'description',
        ));

        // submit form
        $this->client->submit($form);
        $crawler = $this->client->followRedirect();

        // Check data in the show view
        $contentName = $crawler->filter('td:contains("test")');
        $this->assertTrue($contentName->count() > 0);

        $contentDescription = $crawler->filter('td:contains("description")');
        $this->assertTrue($contentDescription->count() > 0);
    }

    /**
     * test edit function
     */
    public function testEditCertificateForm()
    {

        $crawler = $this->client->request('GET', '/certificate');
        $response = $this->client->getResponse()->getStatusCode();
        $this->assertTrue(200 === $response);

        // Edit the entity
        $newName = 'new content';
        $newDescription = 'new description';
        $crawler = $this->client->click($crawler->selectLink('edit')->link());

        $form = $crawler->selectButton('Edit')->form(array(
            'triebawerke_skilleratorbundle_certificatetype[name]'  => $newName,
            'triebawerke_skilleratorbundle_certificatetype[description]'  => $newDescription,
        ));

        $this->client->submit($form);
        $crawler = $this->client->followRedirect();

        // Check the element contains the changed value
        $formValues = $form->getValues();
        $this->assertEquals($formValues['triebawerke_skilleratorbundle_certificatetype[name]'], $newName);
        $this->assertEquals($formValues['triebawerke_skilleratorbundle_certificatetype[description]'], $newDescription);

    }

    /**
     * test delete function
     */
    public function testDeleteCertificate()
    {

        $crawler = $this->client->request('GET', '/certificate');
        $response = $this->client->getResponse()->getStatusCode();
        $this->assertTrue(200 === $response);
/*
        // Delete the entity
        $crawler = $this->client->click($crawler->selectLink('edit')->link());
        $this->client->submit($crawler->selectButton('Delete')->form());
        $this->client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/test/', $this->client->getResponse()->getContent());
 * 
 */
    }
}