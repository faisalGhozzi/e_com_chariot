<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;


class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomproduit')
            ->add('quantite')
            ->add('prix')
            ->add('description')
            ->add('img',
                FileType::class, [
                    'label' => 'image',
                    'mapped' => false,
                    'constraints' => [
                        new File([
                            'maxSize' => '1M',
                            'mimeTypesMessage' => 'Document n est pas valide',
                        ])
                    ],
                ])
            ;
           
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
