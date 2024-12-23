<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Organic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('.\build\assets\css\style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
        <link rel="icon" href="{{ asset('.\build\assets\images\cart.png') }}" type="image/x-icon">

</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Organic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('store') }}">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item" href="{{ route('cart') }}">
                            <img src="{{ asset('.\build\assets\images\cart.png') }}" alt="add to cart" height="32px" width="32px">
                        </a>
                    </li>
                </ul>
                


               
                <form class="d-flex position-relative" role="search">
    <input 
        class="px-2 search" 
        id="search-bar" 
        type="search" 
        placeholder="Search" 
        aria-label="Search" 
        autocomplete="off">
    <button class="btn0" type="button">Search</button>
    <div id="search-results" class="dropdown-menu" style="display: none; width: 100%;"></div>
</form>










            </div>
        </div>
    </nav>

    <script>
document.addEventListener('DOMContentLoaded', function () {
    const searchBar = document.getElementById('search-bar');
    const searchResults = document.getElementById('search-results');

    searchBar.addEventListener('input', function () {
        const query = searchBar.value.trim();

        if (query.length > 2) {
            fetch({{ route('search') }}?query=${encodeURIComponent(query)})
                .then(response => response.json())
                .then(data => {
                    let results = '';

                    if (data.products.length > 0) {
                        data.products.forEach(product => {
                            results += `
                                <a href="/productDetail/${product.id}" class="dropdown-item">
                                    <img src="{{ asset('storage/') }}/${product.image}" alt="${product.name}">
                                    <span>${product.name} - $${parseFloat(product.price).toFixed(2)}</span>
                                </a>`;
                        });
                    } else {
                        results = '<span class="dropdown-item text-muted">No results found</span>';
                    }

                    searchResults.innerHTML = results;
                    searchResults.style.display = 'block';
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                });
        } else {
            searchResults.style.display = 'none';
        }
    });

    // Hide results when clicking outside
    document.addEventListener('click', function (e) {
        if (!searchBar.contains(e.target) && !searchResults.contains(e.target)) {
            searchResults.style.display = 'none';
        }
    });
});
</script>