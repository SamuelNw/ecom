<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

### About:
- A simple PHP app meant to show a list of dummy products with some search functionality.

#### Main Branch
- Less style and UI implementations. To search for products, just add in `/search?query="coffee"` for example in the URL section.
- This queries the DB for products with anything that matches the query term coffee.
- It is also dockerized and has an instance of Kubernetes created, but it is currently intended to run locally using `minikube`.
- CI/CD workflows are currently failing due to an error in setting up Kubernetes.

#### Develop Branch
- This branch has more products in the DB, and better UI/UX on the products page.
- To see the products, on running the project, visit `/products` which shows a list of all the items currently available.
- Has a search field that queries and dynamically populates the products to show.
- It is a work in progress

- Below are some demo images on works implemented on the develop branch so far.

<img width="1595" alt="image" src="https://github.com/user-attachments/assets/accc5c0f-5971-4bbb-88b1-8e9ba6a39bab" />

after querying:

<img width="1594" alt="image" src="https://github.com/user-attachments/assets/8d9daf84-cda0-4d37-a5fb-3815d684a47f" />

