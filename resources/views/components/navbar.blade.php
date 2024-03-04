<nav class="
    flex flex-col
    text-center
    sm:flex-row
    sm:text-left
    sm:justify-between
    py-4 px-2
    bg-[#62C370]
    shadow
    sm:items-baseline w-full"
>
    <div class="mb-6 sm:mb-0">
        <x-navbar-item href="/" main=true>Accueil</x-navbar-item>
    </div>
    <div class="flex justify-evenly gap-2">
        <x-navbar-item href="/projects">Projets</x-navbar-item>
        <x-navbar-item href="#">Expériences</x-navbar-item>
        <x-navbar-item href="#">Contact</x-navbar-item>
    </div>
</nav>