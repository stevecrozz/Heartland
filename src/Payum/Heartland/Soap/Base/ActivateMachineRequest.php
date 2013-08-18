<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ActivateMachineRequest extends AuthenticateRequest
{
    /**
     * ActivationKey
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $ActivationKey = null;

    /**
     * MachineName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $MachineName = null;

    /**
     * Constructor.
     *
     * @param string $activationKey
     * @param string $machineName
     */
    public function __construct($activationKey = null, $machineName = null)
    {
        $this->ActivationKey = $activationKey;
        $this->MachineName = $machineName;
    }

    /**
     * @param string $activationKey
     *
     * @return ActivateMachineRequest
     */
    public function setActivationKey($activationKey)
    {
        $this->ActivationKey = $activationKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivationKey()
    {
        return $this->ActivationKey;
    }

    /**
     * @param string $machineName
     *
     * @return ActivateMachineRequest
     */
    public function setMachineName($machineName)
    {
        $this->MachineName = $machineName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMachineName()
    {
        return $this->MachineName;
    }
}
