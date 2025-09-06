🛍️ MultiVendor-MarketPlace

A multi-vendor e-commerce platform showcasing authentication, product management, payments, and vendor-buyer interactions. Built with Laravel (Backend) and Vue + Inertia + Vite (Frontend).

🚀 Core Features (Phase 1 – MVP)
	•	🏪 Vendor Registration: Onboarding flow for sellers
	•	📦 Product Listings: CRUD for products, images, categories
	•	💳 Orders & Payments: Checkout system with Stripe/PayPal
	•	⭐ Reviews & Ratings: Customers can leave feedback

🔮 Future Expansion (Phase 2 – Advanced)
	•	📊 Analytics Dashboards: Vendor & Admin sales insights
	•	🤖 AI Recommendations: Personalized product suggestions
	•	💬 Chat System: Real-time messaging between buyers & vendors
	•	📱 Mobile App API: Ready-to-use REST API for mobile app

🛠️ Tech Stack
	•	Backend: Laravel 12 (PHP 8.2)
	•	Frontend: Vite, Vue 3 + Inertia.js
	•	Database: MySQL / PostgreSQL
	•	Authentication: Laravel Breeze + Inertia
	•	Payments: Stripe/PayPal

📂 Project Structure
	•	app/Models → User, Vendor, Product, Order, Review
	•	resources/js/Pages → Vue components (frontend)
	•	routes/web.php → Web routes
	•	routes/api.php → API endpoints for mobile

▶️ Getting Started
```
git clone https://github.com/sja-thedude/MultiVendor-MarketPlace.git
cd MultiVendor-MarketPlace
composer install
npm install
npm run dev
php artisan migrate
php artisan serve
```