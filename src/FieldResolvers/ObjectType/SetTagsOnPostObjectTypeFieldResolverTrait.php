<?php

declare(strict_types=1);

namespace PoPSchema\PostTagMutations\FieldResolvers\ObjectType;

use PoP\Translation\Facades\TranslationAPIFacade;
use PoPSchema\Posts\TypeResolvers\ObjectType\PostObjectTypeResolver;
use PoPSchema\PostTagMutations\MutationResolvers\SetTagsOnPostMutationResolver;

trait SetTagsOnPostObjectTypeFieldResolverTrait
{
    protected function getCustomPostTypeResolverClass(): string
    {
        return PostObjectTypeResolver::class;
    }

    protected function getTypeMutationResolverClass(): string
    {
        return SetTagsOnPostMutationResolver::class;
    }

    protected function getEntityName(): string
    {
        $translationAPI = TranslationAPIFacade::getInstance();
        return $translationAPI->__('post', 'post-tag-mutations');
    }
}
