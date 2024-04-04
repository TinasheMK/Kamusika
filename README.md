
## Online Shopping System with Multiple Sellers

An online shopping system that accommodates multiple sellers is essentially a **multi-vendor e-commerce platform**. Here's a description of such a system:

1. **Overview**:
    - The platform serves as a marketplace where various sellers can list their products for sale.
    - Customers can browse through a wide range of products from different sellers, compare prices, and make purchases.

2. **Key Components**:
    - **Seller Accounts**: Each seller has their own account to manage their inventory, product listings, and orders.
    - **Product Listings**: Sellers create detailed listings for their products, including descriptions, images, prices, and availability.
    - **Shopping Cart**: Customers can add products from multiple sellers to their cart before checkout.
    - **Payment Gateway**: Handles secure transactions between buyers and sellers.
    - **Order Management**: Tracks orders, shipping, and delivery status.

3. **Features**:

    - **Product Catalog Integration**:
        - Sellers can seamlessly integrate their entire product catalog into the platform.
        - Regular updates ensure accurate and up-to-date listings.

    - **Seller Dashboards**:
        - Each seller has a personalized dashboard to manage their products, inventory, and sales.
        - Access to analytics helps sellers track performance.

    - **Customer Reviews and Ratings**:
        - Customers can leave reviews and ratings for products and sellers.
        - Transparency builds trust among buyers.

    - **Search and Filter Options**:
        - Customers can search for products by category, brand, price range, and other criteria.
        - Advanced filters enhance the shopping experience.

    - **Secure Payment Processing**:
        - Integration with reliable payment gateways ensures secure transactions.
        - Supports various payment methods (credit cards, digital wallets, etc.).

    - **Shipping and Delivery Management**:
        - Sellers manage shipping options (standard, express, etc.).
        - Real-time tracking keeps customers informed.

    - **AI Chatbot**:
        - An AI chatbot enhances customer interactions:

    - **Inventory Management**:
        - Sellers track stock levels, restock products, and manage inventory efficiently.

    - **Seller Verification**:
        - Ensures that legitimate sellers join the platform.
        - Verification processes prevent fraudulent accounts.


4. **Benefits**:
    - **Diverse Product Range**: Customers have access to a wide variety of products from different sellers.
    - **Competition and Pricing**: Sellers compete, leading to competitive prices.
    - **Scalability**: The platform can accommodate an unlimited number of sellers and products.




# Kamusika
Kamusika Online Shopping

# Rasa Initialisation Comands
conda create --name rasa-env python==3.8  
conda activate rasa-env  

python -m pip uninstall pip  
python -m ensurepip  
python -m pip install -U pip  

python -m pip install --upgrade setuptools  
python -m pip install rasa  

# Start rasa backend
python -m rasa run --m ./models --endpoints endpoints.yml --port 5005 -vv --enable-api

rasa run -m models --enable-api --cors "*" --debug

rasa run actions --cors "*" --debug
