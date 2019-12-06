<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventsRepository")
 */
class Events
{
    /**
     * @var string
     *
     * @ORM\Column(name="event_name", type="string", length=250, nullable=false)
     */
    private $eventName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_datetime", type="datetime", nullable=false)
     */
    private $eventDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="event_description", type="string", length=500, nullable=false)
     */
    private $eventDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="event_image", type="string", length=250, nullable=false)
     */
    private $eventImage;

    /**
     * @var integer
     *
     * @ORM\Column(name="event_capacity", type="integer", nullable=false)
     */
    private $eventCapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="event_contact", type="string", length=50, nullable=false)
     */
    private $eventContact;

    /**
     * @var string
     *
     * @ORM\Column(name="eventlocation_name", type="string", length=50, nullable=false)
     */
    private $eventlocationName;

    /**
     * @var string
     *
     * @ORM\Column(name="eventlocation_address", type="string", length=50, nullable=false)
     */
    private $eventlocationAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="eventlocation_ZIP_city", type="string", length=50, nullable=false)
     */
    private $eventlocationZipCity;

    /**
     * @var string
     *
     * @ORM\Column(name="event_url", type="string", length=250, nullable=false)
     */
    private $eventUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="event_type", type="string", length=20, nullable=false)
     */
    private $eventType;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set eventName
     *
     * @param string $eventName
     *
     * @return Events
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventDatetime
     *
     * @param \DateTime $eventDatetime
     *
     * @return Events
     */
    public function setEventDatetime($eventDatetime)
    {
        $this->eventDatetime = $eventDatetime;

        return $this;
    }

    /**
     * Get eventDatetime
     *
     * @return \DateTime
     */
    public function getEventDatetime()
    {
        return $this->eventDatetime;
    }

    /**
     * Set eventDescription
     *
     * @param string $eventDescription
     *
     * @return Events
     */
    public function setEventDescription($eventDescription)
    {
        $this->eventDescription = $eventDescription;

        return $this;
    }

    /**
     * Get eventDescription
     *
     * @return string
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * Set eventImage
     *
     * @param string $eventImage
     *
     * @return Events
     */
    public function setEventImage($eventImage)
    {
        $this->eventImage = $eventImage;

        return $this;
    }

    /**
     * Get eventImage
     *
     * @return string
     */
    public function getEventImage()
    {
        return $this->eventImage;
    }

    /**
     * Set eventCapacity
     *
     * @param integer $eventCapacity
     *
     * @return Events
     */
    public function setEventCapacity($eventCapacity)
    {
        $this->eventCapacity = $eventCapacity;

        return $this;
    }

    /**
     * Get eventCapacity
     *
     * @return integer
     */
    public function getEventCapacity()
    {
        return $this->eventCapacity;
    }

    /**
     * Set eventContact
     *
     * @param string $eventContact
     *
     * @return Events
     */
    public function setEventContact($eventContact)
    {
        $this->eventContact = $eventContact;

        return $this;
    }

    /**
     * Get eventContact
     *
     * @return string
     */
    public function getEventContact()
    {
        return $this->eventContact;
    }

    /**
     * Set eventlocationName
     *
     * @param string $eventlocationName
     *
     * @return Events
     */
    public function setEventlocationName($eventlocationName)
    {
        $this->eventlocationName = $eventlocationName;

        return $this;
    }

    /**
     * Get eventlocationName
     *
     * @return string
     */
    public function getEventlocationName()
    {
        return $this->eventlocationName;
    }

    /**
     * Set eventlocationAddress
     *
     * @param string $eventlocationAddress
     *
     * @return Events
     */
    public function setEventlocationAddress($eventlocationAddress)
    {
        $this->eventlocationAddress = $eventlocationAddress;

        return $this;
    }

    /**
     * Get eventlocationAddress
     *
     * @return string
     */
    public function getEventlocationAddress()
    {
        return $this->eventlocationAddress;
    }

    /**
     * Set eventlocationZipCity
     *
     * @param string $eventlocationZipCity
     *
     * @return Events
     */
    public function setEventlocationZipCity($eventlocationZipCity)
    {
        $this->eventlocationZipCity = $eventlocationZipCity;

        return $this;
    }

    /**
     * Get eventlocationZipCity
     *
     * @return string
     */
    public function getEventlocationZipCity()
    {
        return $this->eventlocationZipCity;
    }

    /**
     * Set eventUrl
     *
     * @param string $eventUrl
     *
     * @return Events
     */
    public function setEventUrl($eventUrl)
    {
        $this->eventUrl = $eventUrl;

        return $this;
    }

    /**
     * Get eventUrl
     *
     * @return string
     */
    public function getEventUrl()
    {
        return $this->eventUrl;
    }

    /**
     * Set eventType
     *
     * @param string $eventType
     *
     * @return Events
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
