<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace Spiral\Mailer\Tests;

use PHPUnit\Framework\TestCase;
use Spiral\Mailer\Message;

class MessageTest extends TestCase
{
    public function testDefaults(): void
    {
        $m = new Message('test', 'email@domain.com');
        $this->assertSame('test', $m->getSubject());
        $this->assertSame(['email@domain.com'], $m->getTo());
        $this->assertSame([], $m->getData());
        $this->assertSame([], $m->getCC());
        $this->assertSame([], $m->getBCC());
        $this->assertSame(null, $m->getFrom());
        $this->assertSame(null, $m->getReplyTo());
    }
}
