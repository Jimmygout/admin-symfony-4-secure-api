<?php

namespace App\Form;

use App\Entity\Alert;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class AlertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation', TextType::class, [
                'attr' => ['class' => 'validate'],
              
            ])


            ->add('afficher', CheckboxType::class, [
                'label'    => 'Show this entry publicly?',
                'required' => false,
                'attr' => ['checked' => 'checked']
            ])


            ->add('date_debut', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'datepicker validate'],
                'format' => 'dd/mm/yyyy',
                'input_format' => 'yyyy-mm-dd'
            ])
            
            ->add('date_fin', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'datepicker validate'],
                'format' => 'dd/mm/yyyy',
                'input_format' => 'yyyy-mm-dd'
            ])
/*
            ->add('date_debut', DateType::class, [
                'attr' => ['class' => 'datepicker'],
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
            ])
            */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Alert::class,
        ]);
    }
}
