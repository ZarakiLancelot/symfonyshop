# Symfony Starship Management Application

## Description:

This web application, built with Symfony 7, provides a platform for managing a fleet of starships. It allows users to view a list of starships, access detailed information about individual starships, and potentially interact with starship data through an API (depending on implementation).

## Features:
- Starship Overview: Presents a list of all available starships with basic information, including name, captain, class, and current status.
- Detailed Starship View: Displays comprehensive information about a specific starship, including captain, class, current status, and additional details (as per your implementation).
- Dynamic User Interface: Leverages Twig templates to create a visually appealing and interactive user interface.
- Symfony Framework Integration: Utilizes Symfony functionalities for routing, data management, and potential API development.

## Installation:
- Clone the repository: git clone https://github.com/ZarakiLancelot/symfonyshop.git
- Install dependencies: `composer install`

## Prerequisites:
- PHP version 8.0
- Composer package manager (https://getcomposer.org/)

## Usage:
- Start the development server: `symfony serve`
- Access the application homepage: http://localhost:8000/

## Additional Information:

This project utilizes StarshipStatusEnum for defining starship statuses (waiting, in progress, completed).
It demonstrates basic usage of routing, templating, and Stimulus controllers with Symfony.

## Screenshots:
![Captura desde 2024-06-12 04-52-48.png](..%2F..%2F..%2F..%2FIm%C3%A1genes%2FCapturas%20de%20pantalla%2FCaptura%20desde%202024-06-12%2004-52-48.png)
![Captura desde 2024-06-12 04-52-57.png](..%2F..%2F..%2F..%2FIm%C3%A1genes%2FCapturas%20de%20pantalla%2FCaptura%20desde%202024-06-12%2004-52-57.png)
![Captura desde 2024-06-12 04-53-09.png](..%2F..%2F..%2F..%2FIm%C3%A1genes%2FCapturas%20de%20pantalla%2FCaptura%20desde%202024-06-12%2004-53-09.png)

## Further Development:
- I will implement more new features and go deep into Symfony 7.

### Note:
This README.md is a starting point. You can customize it further to reflect your project's specific details and functionalities.

## Key Technologies:
- Symfony 7
- Twig
- Stimulus
- PHP

## Project Structure:
- controllers: Contains Stimulus controllers for managing UI elements.
- models: Defines models for representing starships and their data.
- templates: Houses Twig templates for rendering the application's views.
- public: Contains static assets like CSS, JavaScript, and images.


## Dependencies:
- php-cs-fixer/shim
- symfony/asset
- symfony/flex
- symfony/serializer
- symfony/stimulus-bundle
- symfony/twig-bundle
- symfony/ux-turbo
- symfonycasts/tailwind-bundle
- twig/extra-bundle
- twig/twig

## Credits:
This project is based on the course of SymfonyCasts, [Cosmic Coding with Symfony 7](https://symfonycasts.com/screencast/symfony7)

### Disclaimer:
This README.md is a comprehensive guide for your Symfony Starship Management Application. Feel free to tailor it to your specific project's needs and preferences.
