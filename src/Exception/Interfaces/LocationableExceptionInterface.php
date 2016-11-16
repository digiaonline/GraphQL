<?php
/**
 * Date: 16.11.16
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace Youshido\GraphQL\Exception\Interfaces;


interface LocationableExceptionInterface
{

    /**
     * @return array
     */
    public function getLocation();

}