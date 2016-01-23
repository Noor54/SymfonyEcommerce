<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setImage($this->getReference('Media3'));
        $produit1->setTva($this->getReference('tva2'));
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setNom('Poivron rouge');
        $produit1->setDescription("Le poivron rouge est un groupe de cultivars......");
        $produit1->setDisponible('1');
        $produit1->setPrix('1.99');

        $manager->persist($produit1);

        $produit2 = new Produits();
        $produit2->setImage($this->getReference('Media4'));
        $produit2->setTva($this->getReference('tva2'));
        $produit2->setCategorie($this->getReference('categorie1'));
        $produit2->setNom('Piment');
        $produit2->setDescription("Piment est généralement associé à la saveur du piquant...");
        $produit2->setDisponible('1');
        $produit2->setPrix('3.99');
        $manager->persist($produit2);

        $produit3 = new Produits();
        $produit3->setImage($this->getReference('Media5'));
        $produit3->setTva($this->getReference('tva2'));
        $produit3->setCategorie($this->getReference('categorie2'));
        $produit3->setNom('Tomate');
        $produit3->setDescription("La tomate est est une espèce de plantes herbacées de la famille...");
        $produit3->setDisponible('1');
        $produit3->setPrix('0.99');
        $manager->persist($produit3);

        $manager->flush();
     }
    public function getOrder(){
        return 4;
    }

}