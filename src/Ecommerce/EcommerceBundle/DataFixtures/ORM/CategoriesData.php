<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Categorie;

class CategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
   $categorie1 = new Categorie();
   $categorie1->setNom('Legumes');
   $categorie1->setImage($this->getReference('Media1'));
   $manager->persist($categorie1);

   $categorie2 = new Categorie();
   $categorie2->setNom('Fruits');
   $categorie2->setImage($this->getReference('Media2'));
   $manager->persist($categorie2);
   $manager->flush();

   $this->addReference('categorie1',$categorie1);
   $this->addReference('categorie2',$categorie2);

    }
    public function getOrder(){
        return 2;
    }

}