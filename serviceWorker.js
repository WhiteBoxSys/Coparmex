const staticDevCoffee = "dev-coffee-site-v1";
const assets = [
  "/",
  "/index.php",
  "assets/js/app.js",
  "assets/js/main.js",
  "assets/css/style.css",
  "https://fonts.googleapis.com",
  "https://fonts.gstatic.com",
  "https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap",
  "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css",
  "assets/lib/owlcarousel/assets/owl.carousel.min.css",
  "assets/lib/animate/animate.min.css",
  "assets/css/bootstrap.min.css",
];

self.addEventListener("install", (installEvent) => {
  installEvent.waitUntil(
    caches.open(staticDevCoffee).then((cache) => {
      cache.addAll(assets);
    })
  );
});
