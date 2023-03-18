<?php

namespace App\XML\Models;

use App\XML\BaseModel;
use App\XML\Traits\HasSerializer;

class IdeaSoft extends BaseModel
{
    use HasSerializer;
    private string $stockCode;
    private string $label;
    private int $status;
    private ?string $brand;
    private ?int $brandId;
    private ?string $barcode;
    private string $mainCategory;
    private ?string $category;
    private ?string $subCategory;
    private float $buyingPrice;
    private float $price1;
    private float $price2;
    private float $price3;
    private float $price4;
    private float $price5;
    private int $tax;
    private string $currencyAbbr;
    private int $stockAmount;
    private string $stockType;
    private int $warranty;
    private ?string $picture1Path;
    private ?string $picture2Path;
    private ?string $picture3Path;
    private ?string $picture4Path;
    private float $dm3;
    private ?string $details;
    private ?float $rebate;
    private ?int $rebateType;

    private ?array $variants;

    /**
     * @return string
     */
    public function getStockCode(): string
    {
        return $this->stockCode;
    }

    /**
     * @param string $stockCode
     */
    public function setStockCode(string $stockCode): void
    {
        $this->stockCode = $stockCode;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string|null $brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return int|null
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * @param int|null $brandId
     */
    public function setBrandId(?int $brandId): void
    {
        $this->brandId = $brandId;
    }

    /**
     * @return string|null
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * @param string|null $barcode
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * @return string
     */
    public function getMainCategory(): string
    {
        return $this->mainCategory;
    }

    /**
     * @param string $mainCategory
     */
    public function setMainCategory(string $mainCategory): void
    {
        $this->mainCategory = $mainCategory;
    }

    /**
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param string|null $category
     */
    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    /**
     * @return string|null
     */
    public function getSubCategory(): ?string
    {
        return $this->subCategory;
    }

    /**
     * @param string|null $subCategory
     */
    public function setSubCategory(?string $subCategory): void
    {
        $this->subCategory = $subCategory;
    }

    /**
     * @return float
     */
    public function getBuyingPrice(): float
    {
        return $this->buyingPrice;
    }

    /**
     * @param float $buyingPrice
     */
    public function setBuyingPrice(float $buyingPrice): void
    {
        $this->buyingPrice = $buyingPrice;
    }

    /**
     * @return float
     */
    public function getPrice1(): float
    {
        return $this->price1;
    }

    /**
     * @param float $price1
     */
    public function setPrice1(float $price1): void
    {
        $this->price1 = $price1;
    }

    /**
     * @return float
     */
    public function getPrice2(): float
    {
        return $this->price2;
    }

    /**
     * @param float $price2
     */
    public function setPrice2(float $price2): void
    {
        $this->price2 = $price2;
    }

    /**
     * @return float
     */
    public function getPrice3(): float
    {
        return $this->price3;
    }

    /**
     * @param float $price3
     */
    public function setPrice3(float $price3): void
    {
        $this->price3 = $price3;
    }

    /**
     * @return float
     */
    public function getPrice4(): float
    {
        return $this->price4;
    }

    /**
     * @param float $price4
     */
    public function setPrice4(float $price4): void
    {
        $this->price4 = $price4;
    }

    /**
     * @return float
     */
    public function getPrice5(): float
    {
        return $this->price5;
    }

    /**
     * @param float $price5
     */
    public function setPrice5(float $price5): void
    {
        $this->price5 = $price5;
    }

    /**
     * @return int
     */
    public function getTax(): int
    {
        return $this->tax;
    }

    /**
     * @param int $tax
     */
    public function setTax(int $tax): void
    {
        $this->tax = $tax;
    }

    /**
     * @return string
     */
    public function getCurrencyAbbr(): string
    {
        return $this->currencyAbbr;
    }

    /**
     * @param string $currencyAbbr
     */
    public function setCurrencyAbbr(string $currencyAbbr): void
    {
        $this->currencyAbbr = $currencyAbbr;
    }

    /**
     * @return int
     */
    public function getStockAmount(): int
    {
        return $this->stockAmount;
    }

    /**
     * @param int $stockAmount
     */
    public function setStockAmount(int $stockAmount): void
    {
        $this->stockAmount = $stockAmount;
    }

    /**
     * @return string
     */
    public function getStockType(): string
    {
        return $this->stockType;
    }

    /**
     * @param string $stockType
     */
    public function setStockType(string $stockType): void
    {
        $this->stockType = $stockType;
    }

    /**
     * @return int
     */
    public function getWarranty(): int
    {
        return $this->warranty;
    }

    /**
     * @param int $warranty
     */
    public function setWarranty(int $warranty): void
    {
        $this->warranty = $warranty;
    }

    /**
     * @return string|null
     */
    public function getPicture1Path(): ?string
    {
        return $this->picture1Path;
    }

    /**
     * @param string|null $picture1Path
     */
    public function setPicture1Path(?string $picture1Path): void
    {
        $this->picture1Path = $picture1Path;
    }

    /**
     * @return string|null
     */
    public function getPicture2Path(): ?string
    {
        return $this->picture2Path;
    }

    /**
     * @param string|null $picture2Path
     */
    public function setPicture2Path(?string $picture2Path): void
    {
        $this->picture2Path = $picture2Path;
    }

    /**
     * @return string|null
     */
    public function getPicture3Path(): ?string
    {
        return $this->picture3Path;
    }

    /**
     * @param string|null $picture3Path
     */
    public function setPicture3Path(?string $picture3Path): void
    {
        $this->picture3Path = $picture3Path;
    }

    /**
     * @return string|null
     */
    public function getPicture4Path(): ?string
    {
        return $this->picture4Path;
    }

    /**
     * @param string|null $picture4Path
     */
    public function setPicture4Path(?string $picture4Path): void
    {
        $this->picture4Path = $picture4Path;
    }

    /**
     * @return float
     */
    public function getDm3(): float
    {
        return $this->dm3;
    }

    /**
     * @param float $dm3
     */
    public function setDm3(float $dm3): void
    {
        $this->dm3 = $dm3;
    }

    /**
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * @param string|null $details
     */
    public function setDetails(?string $details): void
    {
        $this->details = $details;
    }

    /**
     * @return float|null
     */
    public function getRebate(): ?float
    {
        return $this->rebate;
    }

    /**
     * @param float|null $rebate
     */
    public function setRebate(?float $rebate): void
    {
        $this->rebate = $rebate;
    }

    /**
     * @return int|null
     */
    public function getRebateType(): ?int
    {
        return $this->rebateType;
    }

    /**
     * @param int|null $rebateType
     */
    public function setRebateType(?int $rebateType): void
    {
        $this->rebateType = $rebateType;
    }

    /**
     * @return array|null
     */
    public function getVariants(): ?array
    {
        return $this->variants;
    }

    /**
     * @param array|null $variants
     */
    public function setVariants(?array $variants): void
    {
        $this->variants = $variants;
    }



}
