<?php declare(strict_types=1);

namespace Shopware\Product\Struct;

use Shopware\Category\Struct\CategoryBasicCollection;
use Shopware\ProductDetail\Struct\ProductDetailBasicCollection;
use Shopware\ProductVote\Struct\ProductVoteBasicCollection;

class ProductDetailStruct extends ProductBasicStruct
{
    /**
     * @var ProductDetailBasicCollection
     */
    protected $details;

    /**
     * @var string[]
     */
    protected $categoryUuids = [];

    /**
     * @var CategoryBasicCollection
     */
    protected $categories;

    /**
     * @var ProductVoteBasicCollection
     */
    protected $votes;

    public function __construct()
    {
        $this->details = new ProductDetailBasicCollection();
        $this->categories = new CategoryBasicCollection();
        $this->votes = new ProductVoteBasicCollection();
    }

    public function getDetails(): ProductDetailBasicCollection
    {
        return $this->details;
    }

    public function setDetails(ProductDetailBasicCollection $details): void
    {
        $this->details = $details;
    }

    public function getCategoryUuids(): array
    {
        return $this->categoryUuids;
    }

    public function setCategoryUuids(array $categoryUuids): void
    {
        $this->categoryUuids = $categoryUuids;
    }

    public function getCategories(): CategoryBasicCollection
    {
        return $this->categories;
    }

    public function setCategories(CategoryBasicCollection $categories): void
    {
        $this->categories = $categories;
    }

    public function getVotes(): ProductVoteBasicCollection
    {
        return $this->votes;
    }

    public function setVotes(ProductVoteBasicCollection $votes): void
    {
        $this->votes = $votes;
    }
}