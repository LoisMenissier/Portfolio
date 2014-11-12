<?php

namespace Portfolio\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PortfolioUserBundle extends Bundle
{
   public function getParent(){
        return 'FOSUserBundle';
    }

}
