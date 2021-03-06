<?php

namespace Api\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Applicable tax element. This element allows for both percentages and flat amounts. If one field is used, the other should be zero since logically, taxes should be calculated in only one of the two ways. | Provides details of the tax.
 * @package Api
 * @subpackage Structs
 * @release 1.1.0
 */
class ApiTaxType extends AbstractStructBase
{
    /**
     * The TaxDescription
     * Meta informations extracted from the WSDL
     * - documentation: Text description of the taxes in a given language.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Api\StructType\ApiParagraphType[]
     */
    public $TaxDescription;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Used to indicate if the amount is inclusive or exclusive of other charges, such as taxes, or is cumulative (amounts have been added to each other).
     * @var string
     */
    public $Type;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Code identifying the fee (e.g.,agency fee, municipality fee). Refer to OpenTravel Code List Fee Tax Type (FTT). | Used for codes in the OpenTravel Code tables. Possible values of this pattern are 1, 101, 101.EQP, or 101.EQP.X.
     * - pattern: [0-9A-Z]{1,3}(\.[A-Z]{3}(\.X){0,1}){0,1}
     * @var string
     */
    public $Code;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - documentation: Fee percentage; if zero, assume use of the Amount attribute (Amount or Percent must be a zero value). | Used for percentage values.
     * - maxInclusive: 100.00
     * - minInclusive: 0.00
     * @var float
     */
    public $Percent;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: A monetary amount. | Specifies an amount, max 3 decimals.
     * - fractionDigits: 3
     * @var float
     */
    public $Amount;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: The code specifying a monetary unit. Use ISO 4217, three alpha code. | Used for an Alpha String, length exactly 3.
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $CurrencyCode;
    /**
     * The DecimalPlaces
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g.,
     * USD 8500 needs DecimalPlaces="2" to represent $85).
     * @var int
     */
    public $DecimalPlaces;
    /**
     * Constructor method for TaxType
     * @uses ApiTaxType::setTaxDescription()
     * @uses ApiTaxType::setType()
     * @uses ApiTaxType::setCode()
     * @uses ApiTaxType::setPercent()
     * @uses ApiTaxType::setAmount()
     * @uses ApiTaxType::setCurrencyCode()
     * @uses ApiTaxType::setDecimalPlaces()
     * @param \Api\StructType\ApiParagraphType[] $taxDescription
     * @param string $type
     * @param string $code
     * @param float $percent
     * @param float $amount
     * @param string $currencyCode
     * @param int $decimalPlaces
     */
    public function __construct(array $taxDescription = array(), $type = null, $code = null, $percent = null, $amount = null, $currencyCode = null, $decimalPlaces = null)
    {
        $this
            ->setTaxDescription($taxDescription)
            ->setType($type)
            ->setCode($code)
            ->setPercent($percent)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setDecimalPlaces($decimalPlaces);
    }
    /**
     * Get TaxDescription value
     * @return \Api\StructType\ApiParagraphType[]|null
     */
    public function getTaxDescription()
    {
        return $this->TaxDescription;
    }
    /**
     * Set TaxDescription value
     * @throws \InvalidArgumentException
     * @param \Api\StructType\ApiParagraphType[] $taxDescription
     * @return \Api\StructType\ApiTaxType
     */
    public function setTaxDescription(array $taxDescription = array())
    {
        foreach ($taxDescription as $taxTypeTaxDescriptionItem) {
            // validation for constraint: itemType
            if (!$taxTypeTaxDescriptionItem instanceof \Api\StructType\ApiParagraphType) {
                throw new \InvalidArgumentException(sprintf('The TaxDescription property can only contain items of \Api\StructType\ApiParagraphType, "%s" given', is_object($taxTypeTaxDescriptionItem) ? get_class($taxTypeTaxDescriptionItem) : gettype($taxTypeTaxDescriptionItem)), __LINE__);
            }
        }
        $this->TaxDescription = $taxDescription;
        return $this;
    }
    /**
     * Add item to TaxDescription value
     * @throws \InvalidArgumentException
     * @param \Api\StructType\ApiParagraphType $item
     * @return \Api\StructType\ApiTaxType
     */
    public function addToTaxDescription(\Api\StructType\ApiParagraphType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Api\StructType\ApiParagraphType) {
            throw new \InvalidArgumentException(sprintf('The TaxDescription property can only contain items of \Api\StructType\ApiParagraphType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxDescription[] = $item;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Api\EnumType\ApiAmountDeterminationType::valueIsValid()
     * @uses \Api\EnumType\ApiAmountDeterminationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Api\StructType\ApiTaxType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Api\EnumType\ApiAmountDeterminationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Api\EnumType\ApiAmountDeterminationType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Api\StructType\ApiTaxType
     */
    public function setCode($code = null)
    {
        // validation for constraint: pattern
        if (is_scalar($code) && !preg_match('/[0-9A-Z]{1,3}(\.[A-Z]{3}(\.X){0,1}){0,1}/', $code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Z]{1,3}(\.[A-Z]{3}(\.X){0,1}){0,1}", "%s" given', var_export($code, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \Api\StructType\ApiTaxType
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: maxInclusive
        if ($percent > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 100, "%s" given', $percent), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($percent < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $percent), __LINE__);
        }
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Api\StructType\ApiTaxType
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($amount) && strlen(substr($amount, strpos($amount, '.') + 1)) !== 3) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 3 fraction digits, "%d" given', strlen(substr($amount, strpos($amount, '.') + 1))), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Api\StructType\ApiTaxType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($currencyCode) && !preg_match('/[a-zA-Z]{3}/', $currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{3}", "%s" given', var_export($currencyCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get DecimalPlaces value
     * @return int|null
     */
    public function getDecimalPlaces()
    {
        return $this->DecimalPlaces;
    }
    /**
     * Set DecimalPlaces value
     * @param int $decimalPlaces
     * @return \Api\StructType\ApiTaxType
     */
    public function setDecimalPlaces($decimalPlaces = null)
    {
        // validation for constraint: int
        if (!is_null($decimalPlaces) && !is_numeric($decimalPlaces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($decimalPlaces)), __LINE__);
        }
        $this->DecimalPlaces = $decimalPlaces;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Api\StructType\ApiTaxType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
