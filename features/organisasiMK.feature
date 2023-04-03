Feature: Organisasi MK
    In order to view Organized MK data
    As a member of the academic team
    I want to be able to see the Organized MK data

    Scenario: Display Organized MK Data
        Given the user is on the main dashboard
        When the user go to Organisasi MK page
        Then the user should see Term with ID '1'