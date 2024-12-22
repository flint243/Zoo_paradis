<?php

namespace App\Tests\Controller;

use App\Entity\InfosVeto;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class InfosVetoControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/infos/veto/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(InfosVeto::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('InfosVeto index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'infos_veto[etat_animal]' => 'Testing',
            'infos_veto[nourriture_proposee]' => 'Testing',
            'infos_veto[commentaire_habitat]' => 'Testing',
            'infos_veto[detail_animal]' => 'Testing',
            'infos_veto[datePassage]' => 'Testing',
            'infos_veto[createdAt]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->repository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new InfosVeto();
        $fixture->setEtat_animal('My Title');
        $fixture->setNourriture_proposee('My Title');
        $fixture->setCommentaire_habitat('My Title');
        $fixture->setDetail_animal('My Title');
        $fixture->setDatePassage('My Title');
        $fixture->setCreatedAt('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('InfosVeto');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new InfosVeto();
        $fixture->setEtat_animal('Value');
        $fixture->setNourriture_proposee('Value');
        $fixture->setCommentaire_habitat('Value');
        $fixture->setDetail_animal('Value');
        $fixture->setDatePassage('Value');
        $fixture->setCreatedAt('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'infos_veto[etat_animal]' => 'Something New',
            'infos_veto[nourriture_proposee]' => 'Something New',
            'infos_veto[commentaire_habitat]' => 'Something New',
            'infos_veto[detail_animal]' => 'Something New',
            'infos_veto[datePassage]' => 'Something New',
            'infos_veto[createdAt]' => 'Something New',
        ]);

        self::assertResponseRedirects('/infos/veto/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getEtat_animal());
        self::assertSame('Something New', $fixture[0]->getNourriture_proposee());
        self::assertSame('Something New', $fixture[0]->getCommentaire_habitat());
        self::assertSame('Something New', $fixture[0]->getDetail_animal());
        self::assertSame('Something New', $fixture[0]->getDatePassage());
        self::assertSame('Something New', $fixture[0]->getCreatedAt());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new InfosVeto();
        $fixture->setEtat_animal('Value');
        $fixture->setNourriture_proposee('Value');
        $fixture->setCommentaire_habitat('Value');
        $fixture->setDetail_animal('Value');
        $fixture->setDatePassage('Value');
        $fixture->setCreatedAt('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/infos/veto/');
        self::assertSame(0, $this->repository->count([]));
    }
}
