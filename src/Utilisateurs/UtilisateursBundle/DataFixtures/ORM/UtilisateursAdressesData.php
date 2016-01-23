<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;

class UtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $adresse1=new UtilisateursAdresses();
        $adresse1->setUtilisateur($this->getReference('utilisateur1'));
        $adresse1->setNom('boucenna');
        $adresse1->setPrenom('houda');
        $adresse1->setTelephone('000000');
        $adresse1->setAdresse('251,rue jeanne darc');
        $adresse1->setCp('54000');
        $adresse1->setPays('france');
        $adresse1->setVille('Nancy');
        $adresse1->setComplement('bertrand cité');
        $manager->persist($adresse1);

        $adresse2=new UtilisateursAdresses();
        $adresse2->setUtilisateur($this->getReference('utilisateur2'));
        $adresse2->setNom('boucenna');
        $adresse2->setPrenom('bochra');
        $adresse2->setTelephone('000000');
        $adresse2->setAdresse('117,rue jzaaf rabah');
        $adresse2->setCp('21000');
        $adresse2->setPays('algérie');
        $adresse2->setVille('azzaba');
        $adresse2->setComplement('skikda');
        $manager->persist($adresse2);

        $adresse3=new UtilisateursAdresses();
        $adresse3->setUtilisateur($this->getReference('utilisateur3'));
        $adresse3->setNom('boucenna');
        $adresse3->setPrenom('hanine');
        $adresse3->setTelephone('000000');
        $adresse3->setAdresse('251,rue jeanne darc');
        $adresse3->setCp('54000');
        $adresse3->setPays('france');
        $adresse3->setVille('Nancy');
        $adresse3->setComplement('bertrand');
        $manager->persist($adresse3);

        $adresse4=new UtilisateursAdresses();
        $adresse4->setUtilisateur($this->getReference('utilisateur4'));
        $adresse4->setNom('boucenna');
        $adresse4->setPrenom('jamal');
        $adresse4->setTelephone('000000');
        $adresse4->setAdresse('117,rue zaaf rabah');
        $adresse4->setCp('21000');
        $adresse4->setPays('algérie');
        $adresse4->setVille('azzaba');
        $adresse4->setComplement('skikda');
        $manager->persist($adresse4);
        $manager->flush();
  /* $this->addReference('adresse1',$adresse1);
   $this->addReference('adresse2',$adresse2);
   $this->addReference('adresse3',$adresse3);
   $this->addReference('adresse4',$adresse4);
*/
    }
    public function getOrder(){
        return 6;
    }

}