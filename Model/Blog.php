<?php
/**
 * Copyright © 2021 All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace OneAgrix\CustomBlog\Model;

use Magento\Framework\Model\AbstractModel;
use OneAgrix\CustomBlog\Api\Data\BlogInterface;

class Blog extends AbstractModel implements BlogInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\OneAgrix\CustomBlog\Model\ResourceModel\Blog::class);
    }

    /**
     * @inheritDoc
     */
    public function getBlogId()
    {
        return $this->_get(self::BLOG_ID);
    }

    /**
     * @inheritDoc
     */
    public function setBlogId($blogId)
    {
        return $this->setData(self::BLOG_ID, $blogId);
    }

    /**
     * @inheritDoc
     */
    public function getTitle()
    {
        return $this->_get(self::TITLE);
    }

    /**
     * @inheritDoc
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        return $this->_get(self::DESCRIPTION);
    }

    /**
     * @inheritDoc
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }
}

