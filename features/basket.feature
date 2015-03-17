# features/basket.feature
Feature: Basket
    it allows to verify that the basket works
    Scenario:
        Given an empty basket
        Then the basket price is "0 $"
    Scenario:
        Given an empty basket
        And a product which costs "5 $" is added to the basket
        And a product which costs "15 $" is added to the basket  
        Then the basket price is "25 $"
