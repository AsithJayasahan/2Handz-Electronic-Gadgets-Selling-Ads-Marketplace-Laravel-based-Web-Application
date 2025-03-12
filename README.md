# 2Handz Electronic Gadgets Selling Ads Marketplace

**2Handz** is an online platform for buying and selling brand new and used tech accessories, including laptops, computers, smartphones, and other gadgets. Users can register, post free ads, and filter listings to find what they need.

## Features

### User Features:
- **Sign Up & Sign In** – Users can create an account and log in securely.
- **Chatbot Support** – chatbot to assist users with queries.
- **Post Ads** – Users can create ads for their second-hand tech items.
- **View Ads** – Users can browse all available ads.
- **Filter Ads** – Search and filter ads based on categories.
- **Edit Profile** – Users can update their credentials.
- **Send Messages** – Users can communicate with sellers or buyers.

### Admin Panel:
- **Manage Ads** – Admins can post, edit, and delete ads.
- **Manage Users** – View all registered users and their activities.
- **Dashboard Statistics** – Get a count of total ads and users.

## Installation & Setup

1. **Clone the repository**
   ```sh
   git clone https://github.com/AsithJayasahan/2Handz-Marketplace.git
   cd 2Handz
   ```
2. **Install dependencies** (if using Laravel):
   ```sh
   composer install
   npm install
   ```
3. **Set up environment file**
   ```sh
   cp .env.example .env
   ```
4. **Generate application key**
   ```sh
   php artisan key: generate
   ```
5. **Migrate the database**
   ```sh
   php artisan migrate
   ```
6. **Start the server**
   ```sh
   php artisan serve
   ```

## Technologies Used
- Laravel (Backend Framework)
- MySQL (Database)
- BotMan (Chatbot Integration)
- Blade (Frontend Template Engine)


