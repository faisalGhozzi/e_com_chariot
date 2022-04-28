<?php

namespace App\Form;
use mysql_xdevapi\Table;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Salle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class SalleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('nom',TextType::class, ['attr'=>[ 'placeholder'=>'Nom de la salle']])
            ->add('prixsalle',TextType::class,['attr'=>[ 'placeholder'=>'Prix de la salle']])
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
            ->add('capacite',TextType::class,['attr'=>[ 'placeholder'=>'Capacite de la salle']])
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Salle::class,
        ]);
    }
}
