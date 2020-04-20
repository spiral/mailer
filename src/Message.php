<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace Spiral\Mailer;

final class Message implements MessageInterface
{
    /** @var string */
    private $subject;

    /** @var array */
    private $to;

    /** @var array */
    private $data;

    /** @var array */
    private $cc;

    /** @var array */
    private $bcc;

    /** @var string|null */
    private $from;

    /** @var string|null */
    private $replyTo;

    /**
     * @param string $subject
     * @param string|array $to
     * @param array $data
     */
    public function __construct(string $subject, $to, array $data = [])
    {
        $this->setSubject($subject);
        $this->setTo($to);
        $this->setData($data);
    }

    /**
     * @param string $subject
     * @return $this
     */
    public function setSubject(string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param string|array $to
     * @return $this
     */
    public function setTo($to): self
    {
        $this->to = is_array($to) ? $to : func_get_args();

        return $this;
    }

    /**
     * @return array
     */
    public function getTo(): array
    {
        return $this->to;
    }

    /**
     * @param string|array $cc
     * @return $this
     */
    public function setCC($cc): self
    {
        $this->cc = is_array($cc) ? $cc : func_get_args();

        return $this;
    }

    /**
     * @return array
     */
    public function getCC(): array
    {
        return $this->cc ?? [];
    }

    /**
     * @param string|array $bcc
     * @return $this
     */
    public function setBCC($bcc): self
    {
        $this->bcc = is_array($bcc) ? $bcc : func_get_args();

        return $this;
    }

    /**
     * @return array
     */
    public function getBCC(): array
    {
        return $this->bcc ?? [];
    }

    /**
     * @param string|null $from
     * @return $this
     */
    public function setFrom(?string $from): self
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * @param string|null $replyTo
     * @return $this
     */
    public function setReplyTo(?string $replyTo): self
    {
        $this->replyTo = $replyTo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReplyTo(): ?string
    {
        return $this->replyTo;
    }
}
