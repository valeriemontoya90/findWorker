<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Monolog\Logger;
use Monolog\Formatter\LogglyFormatter;

/**
 * Sends errors to Loggly.
 *
 * @author Przemek Sobstel <przemek@sobstel.org>
 * @author Adam Pancutt <adam@pancutt.com>
<<<<<<< HEAD
=======
 * @author Gregory Barchard <gregory@barchard.net>
>>>>>>> e2daa7b143a354d747858dfbc2c58f6849c2f1d0
 */
class LogglyHandler extends AbstractProcessingHandler
{
    const HOST = 'logs-01.loggly.com';
    const ENDPOINT_SINGLE = 'inputs';
    const ENDPOINT_BATCH = 'bulk';

    protected $token;

<<<<<<< HEAD
    protected $tag;
=======
    protected $tag = array();
>>>>>>> e2daa7b143a354d747858dfbc2c58f6849c2f1d0

    public function __construct($token, $level = Logger::DEBUG, $bubble = true)
    {
        if (!extension_loaded('curl')) {
            throw new \LogicException('The curl extension is needed to use the LogglyHandler');
        }

        $this->token = $token;

        parent::__construct($level, $bubble);
    }

    public function setTag($tag)
    {
<<<<<<< HEAD
        $this->tag = $tag;
=======
        $tag = !empty($tag) ? $tag : array();
        $this->tag = is_array($tag) ? $tag : array($tag);
>>>>>>> e2daa7b143a354d747858dfbc2c58f6849c2f1d0
    }

    public function addTag($tag)
    {
<<<<<<< HEAD
        $this->tag = (strlen($this->tag) > 0) ? $this->tag .','. $tag : $tag;
=======
        if (!empty($tag)) {
            $tag = is_array($tag) ? $tag : array($tag);
            $this->tag = array_unique(array_merge($this->tag, $tag));
        }
>>>>>>> e2daa7b143a354d747858dfbc2c58f6849c2f1d0
    }

    protected function write(array $record)
    {
        $this->send($record["formatted"], self::ENDPOINT_SINGLE);
    }

    public function handleBatch(array $records)
    {
        $level = $this->level;

        $records = array_filter($records, function ($record) use ($level) {
            return ($record['level'] >= $level);
        });

        if ($records) {
            $this->send($this->getFormatter()->formatBatch($records), self::ENDPOINT_BATCH);
        }
    }

    protected function send($data, $endpoint)
    {
        $url = sprintf("https://%s/%s/%s/", self::HOST, $endpoint, $this->token);

        $headers = array('Content-Type: application/json');

<<<<<<< HEAD
        if ($this->tag) {
            $headers[] = "X-LOGGLY-TAG: {$this->tag}";
=======
        if (!empty($this->tag)) {
            $headers[] = 'X-LOGGLY-TAG: '.implode(',', $this->tag);
>>>>>>> e2daa7b143a354d747858dfbc2c58f6849c2f1d0
        }

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

<<<<<<< HEAD
        curl_exec($ch);
=======
        if (curl_exec($ch) === false) {
            throw new \RuntimeException(sprintf('Curl error (code %s): %s', curl_errno($ch), curl_error($ch)));
        }

>>>>>>> e2daa7b143a354d747858dfbc2c58f6849c2f1d0
        curl_close($ch);
    }

    protected function getDefaultFormatter()
    {
        return new LogglyFormatter();
    }
}
