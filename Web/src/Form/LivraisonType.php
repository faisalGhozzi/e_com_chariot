<?php

namespace App\Form;

use App\Entity\Livraison;
use App\Repository\AdresseNewRepository;
use App\Repository\AdresseRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Adresse;
use Symfony\Component\Security\Core\Security;

class LivraisonType extends AbstractType
{

    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'normal' => 'normal',
                    'rapide' => 'rapide',
                ],
            ])
            ->add('adresse', EntityType::class, [
                'class' => Adresse::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('a')
                        ->where('a.iduser = :identifier')
                        ->orderBy('a.rue', 'ASC')
                        ->setParameter('identifier', $this->security->getUser());
                },
                'choice_label' => 'rue',
                'multiple' => false,
                'expanded' => false,
            ]);
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livraison::class,
        ]);
    }
}
