<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} News" href="/news"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/news') ? 'active text-blue-600' : '' }}">
        News
    </a>
    <a title="{{ $page->siteName }} About Us" href="/about"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
        About Us
    </a>
    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
        Contact
    </a>
</nav>
