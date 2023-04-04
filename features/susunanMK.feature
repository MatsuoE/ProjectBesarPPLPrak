Feature: Susunan MK
    In order to view MK data
    As a member of the academic team
    I want to be able to see the entire MK data

    Scenario: Display Entire MK Data
        Given the user is on the main dashboard
        When the user go to Susunan MK page
        Then the user should see MK with ID 'MK01'
        And the user should see BK with ID 'BK01'