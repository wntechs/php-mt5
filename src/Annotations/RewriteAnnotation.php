<?php


namespace Ram\WIK\Annotations;


/**
 * @Annotation
 * @Target("PROPERTY")
 * @Attributes({
 *   @Attribute("newNmae", type = "string")
 * })
 */
class RewriteAnnotation
{
    /**
     * @var string New property name after renaming
     * @Required
     */
    public string $newName;


    public function __construct(array $properties)
    {
        if (isset($properties['value'])) {
            $this->newName = $properties['value'];
        }
    }


}
