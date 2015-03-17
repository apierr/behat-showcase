<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given an empty basket
     */
    public function anEmptyBasket()
    {
        throw new PendingException();
    }

    /**
     * @Then the basket prize is :arg1
     */
    public function theBasketPrizeIs($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given a product which costs :arg1 is added to the basket
     */
    public function aProductWhichCostsIsAddedToTheBasket($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the basket price is :arg1
     */
    public function theBasketPriceIs($arg1)
    {
        throw new PendingException();
    }
}
