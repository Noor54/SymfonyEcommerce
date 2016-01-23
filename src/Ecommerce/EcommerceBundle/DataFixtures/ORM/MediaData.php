<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('http://www.lakaz-piment.com/piment.jpg');
        $media1->setAlt('Legumes');
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setPath('http://www.lakaz-piment.com/piment.jpg');
        $media2->setAlt('Fruits');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('http://www.lakaz-piment.com/piment.jpg');
        $media3->setAlt('Poivron vert');
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setPath('http://www.lakaz-piment.com/piment.jpg');
        $media4->setAlt('Piment');
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setPath('http://www.lakaz-piment.com/piment.jpg');
        $media5->setAlt('Tomate');
        $manager->persist($media5);

        $manager->flush();
        $this->addReference('Media1',$media1);
        $this->addReference('Media2',$media2);
        $this->addReference('Media3',$media3);
        $this->addReference('Media4',$media4);
        $this->addReference('Media5',$media5);
    }
    public function getOrder(){
        return 1;
    }

}