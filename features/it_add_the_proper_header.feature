Feature: It adds the Permissions-Policy header on responses

    Scenario: Test

    Given I am on "/"
    Then the header "Permissions-Policy" should be equal to "interest-cohort=()"

    When I send a POST request to "/" with body:
        """
        {"Permissions-Policy":"foobar"}
        """
    Then the header "Permissions-Policy" should be equal to "foobar"
