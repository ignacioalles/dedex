<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing PurgeReleaseMessage
 *
 * A Message in the Release Notification Message Suite Standard, allowing a ReleaseCreator to 'purge' a Release that a DSP has on its books but that cannot be retracted or be taken down in the normal way (e.g. because its metadata is corrupt).
 */
class PurgeReleaseMessage
{

    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the PurgeReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of a DDEX Release to be purged.
     *
     * @var \DedexBundle\Entity\Ern\PurgedReleaseType $purgedRelease
     */
    private $purgedRelease = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the PurgeReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the PurgeReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DedexBundle\Entity\Ern\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as purgedRelease
     *
     * A Composite containing details of a DDEX Release to be purged.
     *
     * @return \DedexBundle\Entity\Ern\PurgedReleaseType
     */
    public function getPurgedRelease()
    {
        return $this->purgedRelease;
    }

    /**
     * Sets a new purgedRelease
     *
     * A Composite containing details of a DDEX Release to be purged.
     *
     * @param \DedexBundle\Entity\Ern\PurgedReleaseType $purgedRelease
     * @return self
     */
    public function setPurgedRelease(\DedexBundle\Entity\Ern\PurgedReleaseType $purgedRelease)
    {
        $this->purgedRelease = $purgedRelease;
        return $this;
    }


}

