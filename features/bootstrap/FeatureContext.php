<?php
# features/bootstrap/FeatureContext.php

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
        $this->basket = new Basket();
    }

    /**
     * @Then the basket prize is :arg1
     */
    public function theBasketPriceIs($arg1)
    {
        if ($this->basket->prize != $arg1) {
            throw new Exception("The prize is wrong");
            
        }
    }

    /**
     * @Given a product which costs :prize is added to the basket
     */
    public function aProductWhichCostsIsAddedToTheBasket($prize)
    {
        $product = new Product($prize);

        $this->basket->add($product);
    }
}
