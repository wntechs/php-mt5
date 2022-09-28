<?php

namespace Ram\WIK;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Annotations\RewriteAnnotation;


use ReflectionClass;
// Deprecated and will be removed in 2.0 but currently needed
AnnotationRegistry::registerLoader('class_exists');
abstract class Arrayable
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        $reader = new AnnotationReader();
        $array = [];
        $reflector = new ReflectionClass($this);
        $props = $reflector->getProperties();
        foreach ($props as $prop) {
            $propName = $prop->getName();
            $key = $propName;
            //echo $propName. ' ';
            $rewriteAnnotation = $reader->getPropertyAnnotation($prop, RewriteAnnotation::class);
            if($rewriteAnnotation instanceof RewriteAnnotation){
                //print_r($rewriteAnnotation);
                $key = $rewriteAnnotation->newName;
            }
            if (isset($this->{$propName})){
                if ($reflector->hasMethod("get" . ucfirst($propName))) {

                    $array[$key] = $this->{"get" . ucfirst($propName)}();
                }else {
                    $array[$key] = $this->{$prop->getName()};
                }
            }

        }
        return $array;
    }



}
