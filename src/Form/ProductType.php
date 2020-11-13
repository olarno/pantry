<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Container;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('quantity')
            ->add('expiration_date')
            ->add('createdAt')
            ->add('quantityType')
            ->add('container')
            // ->add('container', EntityType::class,[
            //     'class' => Container::class,
            //     'choice_label' => 'name',
            //     'label' => 'Ma categorie:'
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
