<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing CueType
 *
 * A Composite containing details of a
 *  Cue.
 * XSD Type: Cue
 */
class CueType
{

    /**
     * A Composite containing details of a
     *  UseType of the Cue. It can be expected that this element will be contractually
     *  mandatory in many communications of cue sheets to music rights
     *  societies.
     *
     * @var \DedexBundle\Entity\Ern\CueUseTypeType $cueUseType
     */
    private $cueUseType = null;

    /**
     * A Composite containing details of a
     *  ThemeType for the Creation referenced in the Cue.
     *
     * @var \DedexBundle\Entity\Ern\CueThemeTypeType $cueThemeType
     */
    private $cueThemeType = null;

    /**
     * A Composite containing details of a
     *  VocalType for the Creation referenced in the Cue.
     *
     * @var \DedexBundle\Entity\Ern\CueVocalTypeType $cueVocalType
     */
    private $cueVocalType = null;

    /**
     * A Flag indicating whether a Creation
     *  contains dancing (=true) or not (=false).
     *
     * @var bool $isDance
     */
    private $isDance = null;

    /**
     * A Composite containing details of a
     *  VisualPerceptionType for the Creation referenced in the Cue.
     *
     * @var \DedexBundle\Entity\Ern\CueVisualPerceptionTypeType $cueVisualPerceptionType
     */
    private $cueVisualPerceptionType = null;

    /**
     * A Composite containing details of a
     *  CueOrigin for the Cue. It can be expected that this element will be contractually
     *  mandatory in many communications of cue sheets to music rights
     *  societies.
     *
     * @var \DedexBundle\Entity\Ern\CueOriginType $cueOrigin
     */
    private $cueOrigin = null;

    /**
     * A Composite containing a
     *  CueCreationReference for a Creation (specific to this
     *  Message).
     *
     * @var \DedexBundle\Entity\Ern\CueCreationReferenceType[] $cueCreationReference
     */
    private $cueCreationReference = [
        
    ];

    /**
     * A Type of the Creation referenced in
     *  the Cue.
     *
     * @var string $referencedCreationType
     */
    private $referencedCreationType = null;

    /**
     * A Composite containing details of a
     *  CreationId.
     *
     * @var \DedexBundle\Entity\Ern\CreationIdType $referencedCreationId
     */
    private $referencedCreationId = null;

    /**
     * A Composite containing details of a
     *  Title of the Creation referenced in the Cue.
     *
     * @var \DedexBundle\Entity\Ern\TitleType[] $referencedCreationTitle
     */
    private $referencedCreationTitle = [
        
    ];

    /**
     * A Composite containing details of a
     *  Contributor of the Creation referenced in the Cue.
     *
     * @var \DedexBundle\Entity\Ern\DetailedResourceContributorType[] $referencedCreationContributor
     */
    private $referencedCreationContributor = [
        
    ];

    /**
     * A Composite containing details of an
     *  indirect Contributor of the Creation referenced in the
     *  Cue.
     *
     * @var \DedexBundle\Entity\Ern\MusicalWorkContributorType[] $referencedIndirectCreationContributor
     */
    private $referencedIndirectCreationContributor = [
        
    ];

    /**
     * A Composite containing details of a
     *  Character in the Creation referenced in the Cue. A Character may be
     *  described through Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern\CharacterType[] $referencedCreationCharacter
     */
    private $referencedCreationCharacter = [
        
    ];

    /**
     * A Flag indicating whether whether the
     *  Creation referenced in the Cue contains musical content such as a SoundRecording
     *  or a MusicalWork (=true) or not (=false).
     *
     * @var bool $hasMusicalContent
     */
    private $hasMusicalContent = null;

    /**
     * The start time of the Creation, measured
     *  from the start of the Resource from which the CueSheet is referenced (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @var \DateInterval $startTime
     */
    private $startTime = null;

    /**
     * The Duration of the use of the Creation
     *  that is referenced in the CueCreationReference (using the ISO 8601:2004
     *  PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case
     *  characters are part of the xs:string, e.g. one hour, two minutes and three seconds
     *  would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute
     *  and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The end time of the Creation, measured
     *  from the start of the Resource from which the CueSheet is referenced (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @var \DateInterval $endTime
     */
    private $endTime = null;

    /**
     * A Composite containing details of the
     *  PLine for the Cue.
     *
     * @var \DedexBundle\Entity\Ern\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the
     *  CLine for the Cue.
     *
     * @var \DedexBundle\Entity\Ern\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * Gets as cueUseType
     *
     * A Composite containing details of a
     *  UseType of the Cue. It can be expected that this element will be contractually
     *  mandatory in many communications of cue sheets to music rights
     *  societies.
     *
     * @return \DedexBundle\Entity\Ern\CueUseTypeType
     */
    public function getCueUseType()
    {
        return $this->cueUseType;
    }

    /**
     * Sets a new cueUseType
     *
     * A Composite containing details of a
     *  UseType of the Cue. It can be expected that this element will be contractually
     *  mandatory in many communications of cue sheets to music rights
     *  societies.
     *
     * @param \DedexBundle\Entity\Ern\CueUseTypeType $cueUseType
     * @return self
     */
    public function setCueUseType(\DedexBundle\Entity\Ern\CueUseTypeType $cueUseType)
    {
        $this->cueUseType = $cueUseType;
        return $this;
    }

    /**
     * Gets as cueThemeType
     *
     * A Composite containing details of a
     *  ThemeType for the Creation referenced in the Cue.
     *
     * @return \DedexBundle\Entity\Ern\CueThemeTypeType
     */
    public function getCueThemeType()
    {
        return $this->cueThemeType;
    }

    /**
     * Sets a new cueThemeType
     *
     * A Composite containing details of a
     *  ThemeType for the Creation referenced in the Cue.
     *
     * @param \DedexBundle\Entity\Ern\CueThemeTypeType $cueThemeType
     * @return self
     */
    public function setCueThemeType(\DedexBundle\Entity\Ern\CueThemeTypeType $cueThemeType)
    {
        $this->cueThemeType = $cueThemeType;
        return $this;
    }

    /**
     * Gets as cueVocalType
     *
     * A Composite containing details of a
     *  VocalType for the Creation referenced in the Cue.
     *
     * @return \DedexBundle\Entity\Ern\CueVocalTypeType
     */
    public function getCueVocalType()
    {
        return $this->cueVocalType;
    }

    /**
     * Sets a new cueVocalType
     *
     * A Composite containing details of a
     *  VocalType for the Creation referenced in the Cue.
     *
     * @param \DedexBundle\Entity\Ern\CueVocalTypeType $cueVocalType
     * @return self
     */
    public function setCueVocalType(\DedexBundle\Entity\Ern\CueVocalTypeType $cueVocalType)
    {
        $this->cueVocalType = $cueVocalType;
        return $this;
    }

    /**
     * Gets as isDance
     *
     * A Flag indicating whether a Creation
     *  contains dancing (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsDance()
    {
        return $this->isDance;
    }

    /**
     * Sets a new isDance
     *
     * A Flag indicating whether a Creation
     *  contains dancing (=true) or not (=false).
     *
     * @param bool $isDance
     * @return self
     */
    public function setIsDance($isDance)
    {
        $this->isDance = $isDance;
        return $this;
    }

    /**
     * Gets as cueVisualPerceptionType
     *
     * A Composite containing details of a
     *  VisualPerceptionType for the Creation referenced in the Cue.
     *
     * @return \DedexBundle\Entity\Ern\CueVisualPerceptionTypeType
     */
    public function getCueVisualPerceptionType()
    {
        return $this->cueVisualPerceptionType;
    }

    /**
     * Sets a new cueVisualPerceptionType
     *
     * A Composite containing details of a
     *  VisualPerceptionType for the Creation referenced in the Cue.
     *
     * @param \DedexBundle\Entity\Ern\CueVisualPerceptionTypeType $cueVisualPerceptionType
     * @return self
     */
    public function setCueVisualPerceptionType(\DedexBundle\Entity\Ern\CueVisualPerceptionTypeType $cueVisualPerceptionType)
    {
        $this->cueVisualPerceptionType = $cueVisualPerceptionType;
        return $this;
    }

    /**
     * Gets as cueOrigin
     *
     * A Composite containing details of a
     *  CueOrigin for the Cue. It can be expected that this element will be contractually
     *  mandatory in many communications of cue sheets to music rights
     *  societies.
     *
     * @return \DedexBundle\Entity\Ern\CueOriginType
     */
    public function getCueOrigin()
    {
        return $this->cueOrigin;
    }

    /**
     * Sets a new cueOrigin
     *
     * A Composite containing details of a
     *  CueOrigin for the Cue. It can be expected that this element will be contractually
     *  mandatory in many communications of cue sheets to music rights
     *  societies.
     *
     * @param \DedexBundle\Entity\Ern\CueOriginType $cueOrigin
     * @return self
     */
    public function setCueOrigin(\DedexBundle\Entity\Ern\CueOriginType $cueOrigin)
    {
        $this->cueOrigin = $cueOrigin;
        return $this;
    }

    /**
     * Adds as cueCreationReference
     *
     * A Composite containing a
     *  CueCreationReference for a Creation (specific to this
     *  Message).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CueCreationReferenceType $cueCreationReference
     */
    public function addToCueCreationReference(\DedexBundle\Entity\Ern\CueCreationReferenceType $cueCreationReference)
    {
        $this->cueCreationReference[] = $cueCreationReference;
        return $this;
    }

    /**
     * isset cueCreationReference
     *
     * A Composite containing a
     *  CueCreationReference for a Creation (specific to this
     *  Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCueCreationReference($index)
    {
        return isset($this->cueCreationReference[$index]);
    }

    /**
     * unset cueCreationReference
     *
     * A Composite containing a
     *  CueCreationReference for a Creation (specific to this
     *  Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCueCreationReference($index)
    {
        unset($this->cueCreationReference[$index]);
    }

    /**
     * Gets as cueCreationReference
     *
     * A Composite containing a
     *  CueCreationReference for a Creation (specific to this
     *  Message).
     *
     * @return \DedexBundle\Entity\Ern\CueCreationReferenceType[]
     */
    public function getCueCreationReference()
    {
        return $this->cueCreationReference;
    }

    /**
     * Sets a new cueCreationReference
     *
     * A Composite containing a
     *  CueCreationReference for a Creation (specific to this
     *  Message).
     *
     * @param \DedexBundle\Entity\Ern\CueCreationReferenceType[] $cueCreationReference
     * @return self
     */
    public function setCueCreationReference(array $cueCreationReference)
    {
        $this->cueCreationReference = $cueCreationReference;
        return $this;
    }

    /**
     * Gets as referencedCreationType
     *
     * A Type of the Creation referenced in
     *  the Cue.
     *
     * @return string
     */
    public function getReferencedCreationType()
    {
        return $this->referencedCreationType;
    }

    /**
     * Sets a new referencedCreationType
     *
     * A Type of the Creation referenced in
     *  the Cue.
     *
     * @param string $referencedCreationType
     * @return self
     */
    public function setReferencedCreationType($referencedCreationType)
    {
        $this->referencedCreationType = $referencedCreationType;
        return $this;
    }

    /**
     * Gets as referencedCreationId
     *
     * A Composite containing details of a
     *  CreationId.
     *
     * @return \DedexBundle\Entity\Ern\CreationIdType
     */
    public function getReferencedCreationId()
    {
        return $this->referencedCreationId;
    }

    /**
     * Sets a new referencedCreationId
     *
     * A Composite containing details of a
     *  CreationId.
     *
     * @param \DedexBundle\Entity\Ern\CreationIdType $referencedCreationId
     * @return self
     */
    public function setReferencedCreationId(\DedexBundle\Entity\Ern\CreationIdType $referencedCreationId)
    {
        $this->referencedCreationId = $referencedCreationId;
        return $this;
    }

    /**
     * Adds as referencedCreationTitle
     *
     * A Composite containing details of a
     *  Title of the Creation referenced in the Cue.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\TitleType $referencedCreationTitle
     */
    public function addToReferencedCreationTitle(\DedexBundle\Entity\Ern\TitleType $referencedCreationTitle)
    {
        $this->referencedCreationTitle[] = $referencedCreationTitle;
        return $this;
    }

    /**
     * isset referencedCreationTitle
     *
     * A Composite containing details of a
     *  Title of the Creation referenced in the Cue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedCreationTitle($index)
    {
        return isset($this->referencedCreationTitle[$index]);
    }

    /**
     * unset referencedCreationTitle
     *
     * A Composite containing details of a
     *  Title of the Creation referenced in the Cue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedCreationTitle($index)
    {
        unset($this->referencedCreationTitle[$index]);
    }

    /**
     * Gets as referencedCreationTitle
     *
     * A Composite containing details of a
     *  Title of the Creation referenced in the Cue.
     *
     * @return \DedexBundle\Entity\Ern\TitleType[]
     */
    public function getReferencedCreationTitle()
    {
        return $this->referencedCreationTitle;
    }

    /**
     * Sets a new referencedCreationTitle
     *
     * A Composite containing details of a
     *  Title of the Creation referenced in the Cue.
     *
     * @param \DedexBundle\Entity\Ern\TitleType[] $referencedCreationTitle
     * @return self
     */
    public function setReferencedCreationTitle(array $referencedCreationTitle)
    {
        $this->referencedCreationTitle = $referencedCreationTitle;
        return $this;
    }

    /**
     * Adds as referencedCreationContributor
     *
     * A Composite containing details of a
     *  Contributor of the Creation referenced in the Cue.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\DetailedResourceContributorType $referencedCreationContributor
     */
    public function addToReferencedCreationContributor(\DedexBundle\Entity\Ern\DetailedResourceContributorType $referencedCreationContributor)
    {
        $this->referencedCreationContributor[] = $referencedCreationContributor;
        return $this;
    }

    /**
     * isset referencedCreationContributor
     *
     * A Composite containing details of a
     *  Contributor of the Creation referenced in the Cue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedCreationContributor($index)
    {
        return isset($this->referencedCreationContributor[$index]);
    }

    /**
     * unset referencedCreationContributor
     *
     * A Composite containing details of a
     *  Contributor of the Creation referenced in the Cue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedCreationContributor($index)
    {
        unset($this->referencedCreationContributor[$index]);
    }

    /**
     * Gets as referencedCreationContributor
     *
     * A Composite containing details of a
     *  Contributor of the Creation referenced in the Cue.
     *
     * @return \DedexBundle\Entity\Ern\DetailedResourceContributorType[]
     */
    public function getReferencedCreationContributor()
    {
        return $this->referencedCreationContributor;
    }

    /**
     * Sets a new referencedCreationContributor
     *
     * A Composite containing details of a
     *  Contributor of the Creation referenced in the Cue.
     *
     * @param \DedexBundle\Entity\Ern\DetailedResourceContributorType[] $referencedCreationContributor
     * @return self
     */
    public function setReferencedCreationContributor(array $referencedCreationContributor)
    {
        $this->referencedCreationContributor = $referencedCreationContributor;
        return $this;
    }

    /**
     * Adds as referencedIndirectCreationContributor
     *
     * A Composite containing details of an
     *  indirect Contributor of the Creation referenced in the
     *  Cue.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\MusicalWorkContributorType $referencedIndirectCreationContributor
     */
    public function addToReferencedIndirectCreationContributor(\DedexBundle\Entity\Ern\MusicalWorkContributorType $referencedIndirectCreationContributor)
    {
        $this->referencedIndirectCreationContributor[] = $referencedIndirectCreationContributor;
        return $this;
    }

    /**
     * isset referencedIndirectCreationContributor
     *
     * A Composite containing details of an
     *  indirect Contributor of the Creation referenced in the
     *  Cue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedIndirectCreationContributor($index)
    {
        return isset($this->referencedIndirectCreationContributor[$index]);
    }

    /**
     * unset referencedIndirectCreationContributor
     *
     * A Composite containing details of an
     *  indirect Contributor of the Creation referenced in the
     *  Cue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedIndirectCreationContributor($index)
    {
        unset($this->referencedIndirectCreationContributor[$index]);
    }

    /**
     * Gets as referencedIndirectCreationContributor
     *
     * A Composite containing details of an
     *  indirect Contributor of the Creation referenced in the
     *  Cue.
     *
     * @return \DedexBundle\Entity\Ern\MusicalWorkContributorType[]
     */
    public function getReferencedIndirectCreationContributor()
    {
        return $this->referencedIndirectCreationContributor;
    }

    /**
     * Sets a new referencedIndirectCreationContributor
     *
     * A Composite containing details of an
     *  indirect Contributor of the Creation referenced in the
     *  Cue.
     *
     * @param \DedexBundle\Entity\Ern\MusicalWorkContributorType[] $referencedIndirectCreationContributor
     * @return self
     */
    public function setReferencedIndirectCreationContributor(array $referencedIndirectCreationContributor)
    {
        $this->referencedIndirectCreationContributor = $referencedIndirectCreationContributor;
        return $this;
    }

    /**
     * Adds as referencedCreationCharacter
     *
     * A Composite containing details of a
     *  Character in the Creation referenced in the Cue. A Character may be
     *  described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CharacterType $referencedCreationCharacter
     */
    public function addToReferencedCreationCharacter(\DedexBundle\Entity\Ern\CharacterType $referencedCreationCharacter)
    {
        $this->referencedCreationCharacter[] = $referencedCreationCharacter;
        return $this;
    }

    /**
     * isset referencedCreationCharacter
     *
     * A Composite containing details of a
     *  Character in the Creation referenced in the Cue. A Character may be
     *  described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedCreationCharacter($index)
    {
        return isset($this->referencedCreationCharacter[$index]);
    }

    /**
     * unset referencedCreationCharacter
     *
     * A Composite containing details of a
     *  Character in the Creation referenced in the Cue. A Character may be
     *  described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedCreationCharacter($index)
    {
        unset($this->referencedCreationCharacter[$index]);
    }

    /**
     * Gets as referencedCreationCharacter
     *
     * A Composite containing details of a
     *  Character in the Creation referenced in the Cue. A Character may be
     *  described through Name, Identifier and Roles.
     *
     * @return \DedexBundle\Entity\Ern\CharacterType[]
     */
    public function getReferencedCreationCharacter()
    {
        return $this->referencedCreationCharacter;
    }

    /**
     * Sets a new referencedCreationCharacter
     *
     * A Composite containing details of a
     *  Character in the Creation referenced in the Cue. A Character may be
     *  described through Name, Identifier and Roles.
     *
     * @param \DedexBundle\Entity\Ern\CharacterType[] $referencedCreationCharacter
     * @return self
     */
    public function setReferencedCreationCharacter(array $referencedCreationCharacter)
    {
        $this->referencedCreationCharacter = $referencedCreationCharacter;
        return $this;
    }

    /**
     * Gets as hasMusicalContent
     *
     * A Flag indicating whether whether the
     *  Creation referenced in the Cue contains musical content such as a SoundRecording
     *  or a MusicalWork (=true) or not (=false).
     *
     * @return bool
     */
    public function getHasMusicalContent()
    {
        return $this->hasMusicalContent;
    }

    /**
     * Sets a new hasMusicalContent
     *
     * A Flag indicating whether whether the
     *  Creation referenced in the Cue contains musical content such as a SoundRecording
     *  or a MusicalWork (=true) or not (=false).
     *
     * @param bool $hasMusicalContent
     * @return self
     */
    public function setHasMusicalContent($hasMusicalContent)
    {
        $this->hasMusicalContent = $hasMusicalContent;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The start time of the Creation, measured
     *  from the start of the Resource from which the CueSheet is referenced (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The start time of the Creation, measured
     *  from the start of the Resource from which the CueSheet is referenced (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @param \DateInterval $startTime
     * @return self
     */
    public function setStartTime(\DateInterval $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the use of the Creation
     *  that is referenced in the CueCreationReference (using the ISO 8601:2004
     *  PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case
     *  characters are part of the xs:string, e.g. one hour, two minutes and three seconds
     *  would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute
     *  and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The Duration of the use of the Creation
     *  that is referenced in the CueCreationReference (using the ISO 8601:2004
     *  PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case
     *  characters are part of the xs:string, e.g. one hour, two minutes and three seconds
     *  would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute
     *  and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The end time of the Creation, measured
     *  from the start of the Resource from which the CueSheet is referenced (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The end time of the Creation, measured
     *  from the start of the Resource from which the CueSheet is referenced (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @param \DateInterval $endTime
     * @return self
     */
    public function setEndTime(\DateInterval $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the
     *  PLine for the Cue.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\PLineType $pLine
     */
    public function addToPLine(\DedexBundle\Entity\Ern\PLineType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A Composite containing details of the
     *  PLine for the Cue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPLine($index)
    {
        return isset($this->pLine[$index]);
    }

    /**
     * unset pLine
     *
     * A Composite containing details of the
     *  PLine for the Cue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPLine($index)
    {
        unset($this->pLine[$index]);
    }

    /**
     * Gets as pLine
     *
     * A Composite containing details of the
     *  PLine for the Cue.
     *
     * @return \DedexBundle\Entity\Ern\PLineType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the
     *  PLine for the Cue.
     *
     * @param \DedexBundle\Entity\Ern\PLineType[] $pLine
     * @return self
     */
    public function setPLine(array $pLine)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the
     *  CLine for the Cue.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CLineType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\Ern\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the
     *  CLine for the Cue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCLine($index)
    {
        return isset($this->cLine[$index]);
    }

    /**
     * unset cLine
     *
     * A Composite containing details of the
     *  CLine for the Cue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCLine($index)
    {
        unset($this->cLine[$index]);
    }

    /**
     * Gets as cLine
     *
     * A Composite containing details of the
     *  CLine for the Cue.
     *
     * @return \DedexBundle\Entity\Ern\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the
     *  CLine for the Cue.
     *
     * @param \DedexBundle\Entity\Ern\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine)
    {
        $this->cLine = $cLine;
        return $this;
    }


}
