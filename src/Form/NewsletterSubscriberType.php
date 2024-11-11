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
                    'placeholder' => 'Entrez votre email'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez entrer une adresse e-mail.'
                    ]),
                    new Assert\Email([
                        'message' => 'L\'adresse e-mail n\'est pas valide.'
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[\w\.\-]+@[a-zA-Z\d\.\-]+\.[a-zA-Z]{2,}$/',
                        'message' => 'Veuillez entrer une adresse e-mail valide.',
                    ]),
                ],
            ])
            ->add('consent', CheckboxType::class, [
                'label' => 'Je consens à la collecte de mes données pour recevoir la newsletter (RGPD).',
                'mapped' => false,
                'constraints' => [
                    new Assert\IsTrue([
                        'message' => 'Vous devez consentir à la collecte de vos données pour vous inscrire.',
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
