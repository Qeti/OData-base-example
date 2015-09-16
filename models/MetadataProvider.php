<?php

namespace models;

use POData\Providers\Metadata\Type\EdmPrimitiveType;
use POData\Providers\Metadata\SimpleMetadataProvider;

class MetadataProvider
{
    const MetaNamespace = "Data";

    /**
     * Description of service
     *
     * @return IMetadataProvider
     */
    public static function create()
    {
        $metadata = new SimpleMetadataProvider('Data', self::MetaNamespace);
        $metadata->addResourceSet('Products', self::createProductEntityType($metadata));
        return $metadata;
    }

    /**
     * Describtion of Products
     */
    private static function createProductEntityType(SimpleMetadataProvider $metadata)
    {
        $et = $metadata->addEntityType(new \ReflectionClass('\models\Product'), 'Products', self::MetaNamespace);

        $metadata->addKeyProperty($et, 'id', EdmPrimitiveType::INT32); 
        $metadata->addPrimitiveProperty($et, 'added_at', EdmPrimitiveType::DATETIME);
        $metadata->addPrimitiveProperty($et, 'name', EdmPrimitiveType::STRING);
        $metadata->addPrimitiveProperty($et, 'weight', EdmPrimitiveType::DECIMAL);
        $metadata->addPrimitiveProperty($et, 'code', EdmPrimitiveType::STRING);

        return $et;
    }

}
