# features/google.feature

Feature: Google
    Scenario: Homepage
        Given I am on the homepage
        Then I should see "Google"

    @javascript
    Scenario: Search
        Given I am on the homepage
        When I fill in "lst-ib" with "Repubblica"
        And Wait for 1 seconds
        Then I should see "Repubblica.it"
