<?php
// src/Form/NewsletterSubscriberType.php

namespace App\Form;

use App\Entity\NewsletterSubscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;


class NewsletterSubscriberType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'required' => true,

                'attr' => [
                    'placeholder' => 'Entrez votre email',
                    'trim' => true,
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez entrer une adresse e-mail.',
                        //'trim' => true,
                    ]),
                    new Assert\Email([
                        'message' => 'L\'adresse e-mail n\'est pas valide.',
                        //'trim' => true,
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[\w\.\-]+@[a-zA-Z\d\.\-]+\.[a-zA-Z]{2,}$/',
                        'message' => 'Veuillez entrer une adresse e-mail valide.',
                        //'trim' => true,
                    ]),
                ],
            ])
            ->add('rgpd', CheckboxType::class, [
                'label' => 'Je consens à la collecte de mes données et que celles ci soient utilisées conformément à notre politique de confidentialité.',
                'mapped' => false,
                'constraints' => [
                    new Assert\IsTrue([
                        'message' => 'Vous devez consentir à la collecte de vos données pour vous inscrire.',
                        //'trim' => true,
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NewsletterSubscriber::class,
        ]);
    }
}
