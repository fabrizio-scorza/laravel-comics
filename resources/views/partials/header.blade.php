<header>
    <div class="container">
        <nav class="d-flex justify-content-between pt-4">
            <h3>Logo Bello Bellissimo</h3>
            <ul class="d-flex gap-5">
                <li>
                    {{-- link che con il metodo route si collega alla pagina home --}}
                    <a class="link-success" href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    {{-- link che con il metodo route si collega alla pagina comics --}}
                    <a class="link-success" href="{{ route('comics') }}">Comics</a>
                </li>
                <li>
                    {{-- link che con il metodo route si collega alla pagina books --}}
                    <a class="link-success" href="{{ route('books') }}">Books</a>
                </li>
                <li>
                    {{-- link che con il metodo route si collega alla pagina manga --}}
                    <a class="link-success" href="{{ route('manga') }}">Manga</a>
                </li>
                <li>
                    {{-- link che con il metodo route si collega alla pagina about --}}
                    <a class="link-success" href="{{ route('about') }}">About Us</a>
                </li>
            </ul>
        </nav>
    </div>
</header>