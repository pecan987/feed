<?php

namespace Mk\Feed\Generators\Acra;

use Mk;
use Mk\Feed\Generators\BaseItem;

class Item extends BaseItem
{
    /** @var string @required */
    protected $itemId;

    /** @var string @required */
    protected $productName;

    /** @var string|null */
    protected $product;

    /** @var string @required */
    protected $description;

    /** @var string|null */
    protected $safetyInstructions;

    /** @var string */
    protected $shortDescription;

    /** @var string @required */
    protected $url;

    /** @var Image[] */
    protected $images = array();

    /** @var string|null */
    protected $videoUrl;

    /** @var float @required */
    protected $priceVat;

    /** @var float|null */
    protected $price;

    /** @var int|null */
    protected $vat;

    /** @var float|null */
    protected $priceWholesale;

    /** @var string|null */
    protected $itemType;

    /** @var Parameter[] */
    protected $parameters = array();

    /** @var string|null */
    protected $manufacturer;

    /** @var string|null */
    protected $supplier;

    /** @var string|null */
    protected $categoryText;

    /** @var string|null */
    protected $ean;

    /** @var string|null */
    protected $itemGroupId;

    /** @var string|null */
    protected $customLabel;

    /** @var array */
    protected $accessories = array();

    /** @var Gift[] */
    protected $gifts = array();

    /** @var string[] */
    protected $specialServices = array();

    /** @var string|null */
    protected $metaTitle;

    /** @var string|null */
    protected $metaDescription;

    /** @var array */
    protected $downloads = array();

    /** @var array */
    protected $gpsrs = array();

    public function getProductName()
    {
        return $this->productName;
    }

    public function setProductName($productName)
    {
        $this->productName = (string)$productName;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = (string)$description;
        return $this;
    }

    public function getSafetyInstructions()
    {
        return $this->safetyInstructions;
    }

    public function setSafetyInstructions($safetyInstructions)
    {
        $this->safetyInstructions = $safetyInstructions ? (string)$safetyInstructions : null;
        return $this;
    }

    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = (string)$url;
        return $this;
    }

    public function getPriceVat()
    {
        return $this->priceVat;
    }

    public function setPriceVat($priceVat)
    {
        $this->priceVat = (float)$priceVat;
        return $this;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    public function getEan()
    {
        return $this->ean;
    }

    public function setEan($ean)
    {
        $this->ean = $ean;
        return $this;
    }

    public function getItemGroupId()
    {
        return $this->itemGroupId;
    }

    public function setItemGroupId($itemGroupId)
    {
        $this->itemGroupId = $itemGroupId;
        return $this;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getSupplier()
    {
        return $this->supplier;
    }

    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
        return $this;
    }

    public function getCategoryText()
    {
        return $this->categoryText;
    }

    public function setCategoryText($categoryText)
    {
        $this->categoryText = $categoryText;
        return $this;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    public function getItemType()
    {
        return $this->itemType;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function addImage($url)
    {
        $this->images[] = new Image($url);
        return $this;
    }

    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function addParameter($name, $val, $unit = null, $percentage = null)
    {
        $this->parameters[] = new Parameter($name, $val, $unit, $percentage);
        return $this;
    }

    public function getGifts()
    {
        return $this->gifts;
    }

    public function addGift($name, $id = null)
    {
        $this->gifts[] = new Gift($name, $id);
        return $this;
    }

    public function getAccessories()
    {
        return $this->accessories;
    }

    public function addAccessory($itemId)
    {
        $this->accessories[] = $itemId;
        return $this;
    }

    public function getCustomLabel(): ?string
    {
        return $this->customLabel;
    }

    public function setCustomLabel(?string $customLabel): void
    {
        $this->customLabel = $customLabel;
    }

    public function getSpecialServices(): array
    {
        return $this->specialServices;
    }

    public function setSpecialServices(array $specialServices): void
    {
        $this->specialServices = $specialServices;
    }

    public function addService(string $service): void
    {
        if (count($this->specialServices) < 5) {
            $this->specialServices[] = $service;
        }
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(?string $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    public function addDownload(string $url)
    {
        $this->downloads[] = $url;
        return $this;
    }

    public function getDownloads(): array
    {
        return $this->downloads;
    }

    public function addGpsr(string $url): void
    {
        $this->gpsrs[] = $url;
    }

    public function getGpsrs(): array
    {
        return $this->gpsrs;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getVat(): ?int
    {
        return $this->vat;
    }

    public function setVat(int $vat): void
    {
        $this->vat = $vat;
    }

    public function getPriceWholesale(): ?float
    {
        return $this->priceWholesale;
    }

    public function setPriceWholesale(float $priceWholesale): void
    {
        $this->priceWholesale = $priceWholesale;
    }
}
