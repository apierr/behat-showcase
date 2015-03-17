<?php 

use Behat\MinkExtension\Context\MinkContext;

class WebContext extends MinkContext {
    /**
     * @When Wait for :arg1 seconds
     */
    public function waitForSeconds($arg1)
    {
        $this->getSession()->wait($arg1 * 1000);
    }
}