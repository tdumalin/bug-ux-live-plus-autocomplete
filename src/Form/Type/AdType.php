<?php

namespace App\Form\Type;

use App\Enum\AdTypes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\FormBuilderInterface;

class AdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', EnumType::class, [
                'class' => AdTypes::class,
                'placeholder' => 'Choose an ad type',
                'autocomplete' => true,
            ]);
    }
}
