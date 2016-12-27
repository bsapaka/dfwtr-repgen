<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;


class SubdivisionReportFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', Filters\NumberFilterType::class)
            ->add('start', Filters\DateFilterType::class)
            ->add('end', Filters\DateFilterType::class)
            ->add('sqft_min', Filters\NumberFilterType::class)
            ->add('sqft_max', Filters\NumberFilterType::class)
            ->add('sqft_avg', Filters\NumberFilterType::class)
            ->add('price_min', Filters\NumberFilterType::class)
            ->add('price_max', Filters\NumberFilterType::class)
            ->add('price_avg', Filters\NumberFilterType::class)
            ->add('pricePerSqft_min', Filters\NumberFilterType::class)
            ->add('pricePerSqft_max', Filters\NumberFilterType::class)
            ->add('pricePerSqft_avg', Filters\NumberFilterType::class)
            ->add('dom_min', Filters\NumberFilterType::class)
            ->add('dom_max', Filters\NumberFilterType::class)
            ->add('dom_avg', Filters\NumberFilterType::class)
            ->add('year_min', Filters\NumberFilterType::class)
            ->add('year_max', Filters\NumberFilterType::class)
            ->add('year_avg', Filters\NumberFilterType::class)
        
            ->add('subdivision', Filters\EntityFilterType::class, array(
                    'class' => 'AppBundle\Entity\Subdivision',
                    'choice_label' => 'name',
            )) 
        ;
        $builder->setMethod("GET");


    }

    public function getBlockPrefix()
    {
        return null;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'allow_extra_fields' => true,
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }
}
