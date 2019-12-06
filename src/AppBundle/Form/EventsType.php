<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EventsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('eventName',TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
                ->add('eventDatetime', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
                ->add('eventDescription',TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
                ->add('eventImage',TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
                ->add('eventCapacity',TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
                ->add('eventContact',TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
                ->add('eventlocationName',TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
                ->add('eventlocationAddress',TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
                ->add('eventlocationZipCity',TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
                ->add('eventUrl',TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
                ->add('eventType',ChoiceType::class, array('choices'=>array('Party'=>'Party','Klassische Musik'=>'Klassische Musik', 'Pop, Rock, Schlager'=>'Pop, Rock, Schlager', 'Tanz'=>'Tanz',))
                );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Events'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_events';
    }


}
