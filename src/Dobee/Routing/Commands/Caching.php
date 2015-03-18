<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/3/17
 * Time: 下午7:19
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

namespace Dobee\Routing\Commands;

use Dobee\Console\Commands\Command;
use Dobee\Console\Format\Input;
use Dobee\Console\Format\Output;

class Caching extends Command
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'route:caching';
    }

    /**
     * @return void|$this
     */
    public function configure()
    {
        $this->setDescription("Thank for you use Dobee routing caching tool.");
    }

    /**
     * @param Input  $input
     * @param Output $output
     * @return void
     */
    public function execute(Input $input, Output $output)
    {
        // TODO: Implement execute() method.
    }
}