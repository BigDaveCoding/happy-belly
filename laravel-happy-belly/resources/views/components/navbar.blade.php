<div class="flex p-2 justify-end">
<i class="fa-solid fa-bars w-10 text-center pl-2 text-3xl cursor-pointer" onclick="toggleNavBar()"></i>
</div>

<div id="navbar" class="hidden flex flex-col border-t-1 border-y-primary-color justify-end font-main-fredoka">
    <a class="nav-link text-right px-2 py-2 border-b-1 border-b-primary-color" onclick="closeNavBar()" href="/">Home <i class="fa-solid fa-house pl-2 text-xl w-10 text-center"></i></a>
    <a class="nav-link text-right px-2 py-2 border-b-1 border-b-primary-color" onclick="closeNavBar()" href="#">Recipes <i class="fa-solid fa-utensils pl-2 text-xl w-10 text-center"></i></a>
    <a class="nav-link text-right px-2 py-2 border-b-1 border-b-primary-color" onclick="closeNavBar()" href="#">Shopping List <i class="fa-solid fa-list-check pl-2 text-xl w-10 text-center"></i></a>
    <a class="nav-link text-right px-2 py-2 border-b-1 border-b-primary-color" onclick="closeNavBar()" href="#">Food Diary <i class="fa-solid fa-book pl-2 text-xl w-10 text-center"></i></a>
</div>

<script>
    const navbar = document.getElementById('navbar');

    function toggleNavBar() {
        navbar.classList.toggle('hidden')
    }

    function closeNavBar() {
        const links = document.getElementsByClassName('nav-link')
        Array.from(links).forEach(link => {
            link.addEventListener('click', function() {
                navbar.classList.add('hidden');
            });
        });
    }
</script>
