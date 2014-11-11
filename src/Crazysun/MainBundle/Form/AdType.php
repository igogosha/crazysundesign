<?php

namespace Crazysun\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category')
            ->add('image')
            ->add('anchor')
            ->add('url')
            ->add('description')
            ->add('price')
            ->add('country')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crazysun\MainBundle\Entity\Ad'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'adForm';
    }
}
