<?php

namespace App\Form;

use App\Entity\Registro;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Vich\UploaderBundle\Form\Type\VichFileType;


class RegistroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('paterno')
            ->add('materno')
            ->add('sexo', ChoiceType::class, [
                'choices'  => [
                    'Hombre' => 'Hombre',
                    'Mujer' => 'Mujer',
                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('nacimiento',DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('mail', RepeatedType::class, [
               'invalid_message' => 'Los correos no son iguales',
               'first_options'  => ['label' => 'Correo'],
               'second_options' => ['label' => 'Confirma correo']])
            ->add('procedencia')
            ->add('carrera')
            ->add('nivel',ChoiceType::class, [
                'choices'  => [
                    'Licenciatura' => 'Licenciatura',
                    'Maestría' => 'Maestría',
                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('semestre')
            ->add('porcentaje',ChoiceType::class, [
                'choices'  => [
                    '50'=>'50',
                    '60'=>'60',
                    '70'=>'70',
                    '80'=>'80',
                    '90'=>'90',
                    '100'=>'100'
                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('profesor')
            ->add('promedio',ChoiceType::class, [
                'choices'  => [
                    '8'=>'8.0',
                    '8.1'=>'8.1',
                    '8.2'=>'8.2',
                    '8.3'=>'8.3',
                    '8.4'=>'8.4',
                    '8.5'=>'8.5',
                    '8.6'=>'8.6',
                    '8.7'=>'8.7',
                    '8.8'=>'8.8',
                    '8.9'=>'8.9',
                    '9.0'=>'9.0',
                    '9.1'=>'9.1',
                    '9.2'=>'9.2',
                    '9.3'=>'9.3',
                    '9.4'=>'9.4',
                    '9.5'=>'9.5',
                    '9.6'=>'9.6',
                    '9.7'=>'9.7',
                    '9.8'=>'9.8',
                    '9.9'=>'9.9',
                    '10.0'=>'10.0'
                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('univprofesor')
            ->add('mailprofesor', RepeatedType::class, [
                'invalid_message' => 'Los correos no son iguales',
                'first_options'  => ['label' => 'Correo'],
                'second_options' => ['label' => 'Confirma correo']])
            ->add('confirmado')
            ->add('restricciones', TextareaType::class,array(
                'required' => false,
                'label'=>'Indicaciones'))

            ->add('beca',ChoiceType::class, [
                'choices'  => [
                    'Sin beca' => 'Sin beca',
                    'Solamente alimentación' => 'Solamente alimentación',
                    'Solamente hospedaje' => 'Solamente hospedaje',
                    'Hospedaje y alimentación' => 'Hospedaje y alimentación',
                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('cuentap',ChoiceType::class, [
                'choices'  => [
                    'Sí' => 'Sí',
                    'No' => 'No',

                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('curso1',ChoiceType::class, [
                'choices'  => [
                    'C2: Procesos de Markov a tiempo continuo' => 'Markov',
                    'C6: Modelos booleanos para el estudio de procesos biológicos' => 'Booleana',

                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('curso2',ChoiceType::class, [
                'choices'  => [
                    'C3: Estadística e Inferencia Bayesiana Aplicada al Análisis de Datos'=>'Inferencia',
                    'C5: Niveles biológicos de organización, biodiversidad y ecología de la conducta' => 'Ecología',

                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('curso3',ChoiceType::class, [
                'choices'  => [
                    'C4: Identificabilidad estructural y práctica de parámetros'=>'Identificabilidad',
                    'C7: Clustering y aprendizaje no supervisado en datos biológicos' => 'Clustering',

                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('edo',ChoiceType::class, [
                'choices'  => [
                    'No tengo experiencia'=>'No',
                    'Nivel básico (he visto conceptos introductorios en clase)' => 'Básico',
                    'Nivel intermedio (sé plantear y resolver algunos problemas con EDOs)'=>'Intermedio',
                    'Nivel avanzado (he aplicado EDOs en proyectos de modelación o investigación)'=>'Avanzado'

                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('r',ChoiceType::class, [
                'choices'  => [
                    'No tengo experiencia'=>'No',
                    'Nivel básico (sé correr código ya escrito y modificarlo ligeramente)' => 'Básico',
                    'Nivel intermedio (puedo resolver numéricamente EDOs, usar datos y hacer gráficas)'=>'Intermedio',
                    'Nivel avanzado (uso R para análisis estadístico/modelos más complejos)'=>'Avanzado'

                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('python',ChoiceType::class, [
                'choices'  => [
                    'No tengo experiencia'=>'No',
                    'Nivel básico (sé correr código ya escrito y modificarlo ligeramente)' => 'Básico',
                    'Nivel intermedio (puedo usar librerías como NumPy/Pandas/Matplotlib)'=>'Intermedio',
                    'Nivel avanzado (he trabajado en proyectos de simulación o análisis con Python)'=>'Avanzado'

                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('matlab',ChoiceType::class, [
                'choices'  => [
                    'No tengo experiencia'=>'No',
                    'Nivel básico (he usado Matlab en clases o ejercicios sencillos)' => 'Básico',
                    'Nivel intermedio (puedo programar funciones, hacer simulaciones numéricas)'=>'Intermedio',
                    'Nivel avanzado (he trabajado en proyectos de simulación/modelación en Matlab)'=>'Avanzado'

                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('estadistica',ChoiceType::class, [
                'choices'  => [
                    'No tengo experiencia'=>'No',
                    'Nivel básico (sé calcular medidas descriptivas y probabilidades sencillas)' => 'Básico',
                    'Nivel intermedio (he aplicado distribuciones, pruebas de hipótesis o regresión)'=>'Intermedio',
                    'Nivel avanzado (he usado estadística/probabilidad en investigación)'=>'Avanzado',
                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('inferencia',ChoiceType::class, [
                'choices'  => [
                    'Sí'=>'Sí',
                    'No' => 'No',
                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('poster',ChoiceType::class, [
                'choices'  => [
                    'Sí'=>'Sí',
                    'No' => 'No',
                ],
                'placeholder' => 'Seleccionar',
            ])
            ->add('tituloposter', TextareaType::class,array(
                'required' => false,
                'label'=>'Título tentativo del póster y una breve descripción (máximo 200 palabras)'))
            ->add('aceptado')
            ->add('razones', TextareaType::class,array(
                'label'=>'Razones por las que desa asistir',

            ))
            ->add('comentarios', TextareaType::class,array(
                'required' => false,
                'label'=>'Comentarios'))
            ->add('recomendacion', TextareaType::class,array(
                'required' => false,
                ))
            ->add('cartaFile', VichFileType::class, [
                'required' => false,
                'label'=>'Carta de recomendación'
            ])
            ->add('caliFile', VichFileType::class, [
                'required' => true,
                'label'=>' Memorándum/Constancia de calificaciones'
            ])
            ->add('credencialFile', VichFileType::class, [
                'required' => false,
                'label'=>'Credencial'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Registro::class,
        ]);
    }
}
