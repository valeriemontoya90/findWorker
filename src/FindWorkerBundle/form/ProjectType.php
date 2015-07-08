<?php

namespace FindWorkerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array(
                'label' => 'Titre de projet',
                'required' => true,
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Titre du projet',
                    'pattern' => '[a-zA-Z ]{5,}'
                )
            ))
            ->add('description', null, array(
                'label' => 'Description du projet',
                'required' => true,
                'attr' => array(
                    'class' => 'form-control',
                    'cols' => 10,
                    'rows' => 5,
                    'placeholder' => 'Description du projet'
                )
            ))
            ->add('skills', null, array(
                'label' => 'Les compétences requises (mettre un espace entre chaque compétence)',
                'required' => true,
                'attr' => array(
                    'class' => 'form-control',
                    'cols' => 10,
                    'rows' => 5,
                    'placeholder' => 'Compétences requises'
                )
            ))
            
            ->add('Valider', 'submit', array(
                'attr' => array(
                    'class' => 'btn btn-primary'
                )
            ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FindWorkerBundle\Entity\Project'
        ));
    }


    /**
     * @return string
     */
    public function getTitle()
    {
        return 'findworkerdbundle_project';
    }

    public function getName()
    {
        return 'findWorkerBundle_project';
    }
}
