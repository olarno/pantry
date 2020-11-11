<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Products;
use App\Entity\QuantityType;
use App\Entity\Containers;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

     

            $constantContainers = ['Fridge', 'pantry', 'shoplist'];

            $constantQtyType = ['Litre', 'pcs', 'kg','gr']; 

            foreach ($constantQtyType as $i => $v ) {
                
                $quantityType = new QuantityType();
                $quantityType->setName($v);

                $manager->persist($quantityType);
            }



            foreach ($constantContainers as $container) {
               $i = 0;
                $container = new Containers();
                $container->setType($i)
                            ->setName("Ma liste de courses ")
                            ->setUser($user);
                $i++; 

                $manager->persist($container);

                for ($j = 1; $j <= 9; $j++) {

                    $product = new Products();       
    
                   $product->setName($faker->word())
                            ->setQuantity($faker->randomDigit())
                            ->setExpirationDate($faker->dateTimeBetween('-6 months'))
                            ->setContainers($container)
                            ->setQuantityType($quantityType);
    
                    $manager->persist($product);
                }



            }


        

        $manager->flush();
    }
}
